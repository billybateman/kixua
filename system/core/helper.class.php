<?php

class Helper
{
    public function __construct()
   {
          
   }

    static function split_word($text) {
        $array =  mb_split("\s", preg_replace( "/[^\p{L}|\p{Zs}]/u", " ", $text ));
        return clean_array($array);
    }
    static function split_char($text) {
        return preg_split('/(?<!^)(?!$)/u', mb_strtolower(preg_replace( "/[^\p{L}]/u", "", $text )));
    }
}
