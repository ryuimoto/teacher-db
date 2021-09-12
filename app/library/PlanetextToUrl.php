<?php

namespace App\Library;

class planetextToUrl
{
    public static function convertLink($plane_text)
    {
        $pattern = '/https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+/';

        $convert_text = preg_replace_callback($pattern,function ($matches) {

            return '<a href="'.$matches[0].'" target="_blank" rel="noopener noreferrer">'.$matches[0].'</a>';
        },htmlspecialchars($plane_text));

        return $convert_text;
    }
}