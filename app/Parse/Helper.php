<?php

namespace App\Parse;

class Helper {
    

    // helper public function for fix_case
    public static function safeFirst($seperator, $word) {
        // uppercase words split by the seperator (ex. dashes or periods)
        $parts = explode($seperator, $word);
        foreach ($parts as $word) {
            $words[] = (self::isCamel($word)) ? $word : self::first(mb_strtolower($word));
        }
        return implode($seperator, $words);
    }

    // helper public function for multibytes ctype_alpha
    public static function alpha($text) {
        return (bool) preg_match('/^\p{L}*$/', $text);
    }
    
    // helper public function for multibytes ctype_lower
    public static function lower($text) {
        return (bool) preg_match('/^\p{Ll}*$/', $text);
    }

    // helper public function for multibytes ctype_upper
    public static function upper($text) {
        return (bool) preg_match('/^\p{Lu}*$/', $text);
    }

    // helper public function for multibytes str_word_count
    public static function strWordCount($text) {
        if (empty($text)) {
            return 0;
        } else {
            return preg_match('/s+/', $text) + 1;
        }
    }

    // helper public function for multibytes ucfirst
    public static function first($string) {
        $strlen = mb_strlen($string);
        $firstChar = mb_substr($string, 0, 1);
        $then = mb_substr($string, 1, $strlen - 1);
        return mb_strtoupper($firstChar) . $then;
    }

     /**
     * Checks for camelCase words such as McDonald and MacElroy
     *
     * @param string $string the single word you wish to test
     * @return boolean
     */
    protected static function isCamel($string) {
        if (preg_match('/\p{L}(\p{Lu}*\p{Ll}\p{Ll}*\p{Lu}|\p{Ll}*\p{Lu}\p{Lu}*\p{Ll})\p{L}*/', $string)) {
            return true;
        }
        return false;
    }

    
    
}
