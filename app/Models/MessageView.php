<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageView extends Model
{
    public $timestamps = false;
    protected $fillable = ['message_id', 'viewer_ip', 'user_agent', 'viewed_at'];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
