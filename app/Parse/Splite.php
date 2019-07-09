<?php

/**
 *
 * Create Spliter 
 * @author Daniel Wojtak <etherneco@gmail.com>
 * @use Splite::listAnd(name)
 * 
 * 
 * 
 */

namespace App\Parse;

use App\Parse\Dictionary;
use App\Parse\Helper;

class Splite {
 
    private static function dividePartner($list){
        $namePersonList = [];
        for ($i = 3; $i < count($list); $i++) 
            $namePersonList[] = $list[$i];
        $name = implode(" ", $namePersonList);
        return [$list[0].' '.$name, $list[2].' '.$name];
    }
    
    private static function dividePeople($divide, $name){
        $listPeople = explode($divide.' ', $name);
        return $listPeople;
    }

    public static function listAnd($name) {
        
        //fix replace & to and
        $name = str_replace('&', 'and', $name);
        
        
        
        $return = [];
        $list = explode(" ", $name);

        $findPosition = -1;
        // last and pre-last postion mayby is surname 
        // first position must be 
        for ($i = 1; $i < count($list) - 2; $i++) {
            if (mb_strtolower($list[$i]) == 'and')
                $findPosition = $i;
        }
        if ($findPosition > 0) {
            if($findPosition==1) 
                return self::dividePartner($list);
            else 
                return self::dividePeople($list[$findPosition], $name);
        }
        else
            return [$name];
    }
}
