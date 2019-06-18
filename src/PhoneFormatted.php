<?php
/**
 * Created by PhpStorm.
 * User: mad
 * Date: 18.06.19
 * Time: 22:51
 */

namespace phoneformatted;

class PhoneFormatted
{
    public static function masked($numbers, $mask = '(###) ###-##-##', $region = '+7 ')
    {
        $numbers = (string) $numbers;

        if (substr_count($mask, '#') == strlen($numbers)) {

            foreach (str_split($numbers) as $num) {
                $mask = self::str_replace_once('#', $num, $mask);
            }

            return $region.$mask;
        }
    }

    public static function str_replace_once($search, $replace, $mask)
    {
       $pos = strpos($mask, $search);

       return $pos!==false ? substr_replace($mask, $replace, $pos, strlen($search)) : $mask;
    }
}