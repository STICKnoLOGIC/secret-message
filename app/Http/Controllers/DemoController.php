<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class DemoController extends Controller
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
                'expire' => 'nullable|integer|min:1'
            ]);
        }catch (ValidationException $exception){
            return redirect()->back()->withErrors($exception->validator->errors()->all())
                ->withInput();
        }

        $limit = $data['limit'] ?? 1;
        $expiresAt = Carbon::now()->addDays($data['expire']??1)->timestamp; // +1 day


        $message = [
            'token'      => bin2hex(random_bytes(16)),
            'message'    => $data['message'],
            'limit'      => $limit,
            'expires_at' => $expiresAt,
        ];

        return redirect()->route('demo.view',['token' => $message['token']])->with('message',$message);
    }
}
