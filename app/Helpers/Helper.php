<?php

namespace App\Helpers;

class Helper
{
    public static function toLocalTranslate($translate)
    {
        $local = session()->has('lang_code') ? session()->get('lang_code') : '';
        foreach ($translate as $lang) {
            return $lang->where('local', $local)->where('translate_id', $lang->translate_id)->first()->title;
        }
    }
}
