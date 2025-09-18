<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['token','message','limit','expires_at'];

    protected $casts = [
        'limit' => 'integer',
        'expires_at' => 'integer',
    ];

    public function views()
    {
        return $this->hasMany(MessageView::class);
    }

    /**
     * Generate a unique random token.
     * $bytes controls length: random_bytes(8) -> 16 hex chars minimum.
     */
    public static function generateUniqueToken(int $bytes = 16): string
    {
        do {
            $token = bin2hex(random_bytes($bytes)); // 2*bytes hex chars
        } while (static::where('token', $token)->exists());

        return $token;
    }
}
