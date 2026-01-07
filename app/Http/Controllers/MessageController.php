<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Jaybizzle\CrawlerDetect\CrawlerDetect as Crawler;

class MessageController extends Controller
{
    /**
     * Store a new message.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'message' => 'required|string|max:150',
                'limit' => 'nullable|max:18446744073709551615|integer|min:1',
                'expire' => 'nullable|integer|min:1|max:365',
            ]);
        }catch (ValidationException $exception){
            return redirect()->back()->withErrors($exception->validator->errors()->all())
                ->withInput();
        }

        $limit = $data['limit'] ?? 1;
        $expiresAt = Carbon::now()->addDays((int) ( $data['expire'] ?? 1 ))->timestamp; // +1 day

        $message = Message::create([
            'token'      => Message::generateUniqueToken(),
            'message'    => $data['message'],
            'limit'      => $limit,
            'expires_at' => $expiresAt,
            'ip'         => $request->ip(),
        ]);

        return redirect()->route('messages.view',['token'=>$message->token])->with('message',$message);
    }

    /**
     * Show and decrement a message (race-safe).
     */
    public function show(Request $request, string $token)
    {
        $crawlerDetect = app(Crawler::class);

        if ($crawlerDetect->isCrawler()) {
            return view('main.app');
        }
        $now = Carbon::now()->timestamp;

        // Try to decrement atomically
        $affected = DB::table('messages')
            ->where('token', $token)
            ->where('limit', '>', 0)
            ->where('expires_at', '>', $now)
            ->decrement('limit', 1);
        if ($affected === 0) {
            // Either not found, expired, or limit reached
            $message = Message::withTrashed()->where('token', $token)->first();

            if (! $message) {
                abort(404, 'Secret not found');
            }

            if ($message->expires_at <= $now) {
                $message->delete(); // soft delete for retention
                abort(410, 'Secret expired');
            }

            if ($message->limit <= 0) {
                $message->delete();
                abort(410, 'Secret limit reached');
            }

            // fallback (shouldn’t usually reach here)
            abort(410, 'Secret unavailable');
        }

        // Fetch updated row
        $message = Message::where('token', $token)->firstOrFail();


        // If limit hit zero, mark as soft-deleted
        if ($message->limit <= 0) {
            $message->delete();
        }

        return view('messages.show', ['message' => $message]);
    }

}
