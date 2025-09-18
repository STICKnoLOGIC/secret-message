<?php

namespace App\Helpers;

class TextHelper
{
    public static function linkify(string $text, string $token, ?string $sponsoredUrl = null): string
    {
        $text = e($text);

        $pattern = '~(https?://[^\s]+|www\.[^\s]+)~i';

        $text = preg_replace_callback($pattern, function ($matches) use ($sponsoredUrl) {
            $url = $matches[0];
            $href = preg_match('~^https?://~i', $url) ? $url : "http://$url";

            if ($sponsoredUrl) {
                // onclick handler: open sponsored in new tab, then go to real URL
                return '<a href="' . $href . '" target="_self" onclick="window.open(\'' 
                    . e($sponsoredUrl) . '\', \'_blank\', \'noopener,noreferrer\')">' 
                    . $url . '</a>';
            } else {
                // normal behaviour
                return '<a href="' . $href . '" target="_blank" rel="noopener noreferrer">' 
                    . $url . '</a>';
            }
        }, $text);

        return nl2br($text);
    }

}
