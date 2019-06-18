<?php
/**
 * Created by PhpStorm.
 * User: mad
 * Date: 18.06.19
 * Time: 22:51
 */

namespace PhoneFormatted;

class PhoneFormatted
{
    public static function masked($numbers, $mask = '(###) ###-##-##', $region = '+7')
    {
        try {
            $numbers = (string) $numbers;
            if (substr_count($mask, '#') == strlen($numbers)) {
                foreach (explode('', $numbers) as $num) {
                    $mask = str_replace_once('#', $num, $mask);
                }

                return $mask;
            }

        } catch (\Exception $e) {
            var_dump('Err');
        }
    }

    public static function str_replace_once($search, $replace, $mask)
    {
       $pos = strpos($mask, $search);

       return $pos!==false ? substr_replace($mask, $replace, $pos, strlen($search)) : $mask;
    }
}