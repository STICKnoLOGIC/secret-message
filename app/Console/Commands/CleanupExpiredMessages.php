<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;
use Carbon\Carbon;

class CleanupExpiredMessages extends Command
{
    protected $signature = 'messages:cleanup';
    protected $description = 'Delete messages that expired more than 3 days ago';

    public function handle()
    {
        $threshold = Carbon::now()->subDays(3)->timestamp;

        $count = Message::onlyTrashed()
            ->where('expires_at', '<=', $threshold)
            ->forceDelete();

        $this->info("Deleted {$count} old expired messages.");
    }
}
