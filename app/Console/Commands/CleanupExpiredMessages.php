<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;
use Carbon\Carbon;

class CleanupExpiredMessages extends Command
{
     //use this * * * * * cd /path/to/your/project && php artisan schedule:run >> /dev/null 2>&1
    protected $signature = 'messages:cleanup';
    protected $description = 'Delete messages that expired more than 3 days ago';

    public function handle()
    {
        $threshold = Carbon::now()->timestamp;

        $count = Message::onlyTrashed()
            ->where('expires_at', '<=', $threshold)
            ->orWhere('limit', '<=', 0)
            ->forceDelete();

        $this->info("Deleted {$count} old expired messages.");
    }
}
