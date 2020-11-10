<?php
namespace App;

final class StringCalculator
{
    public function add($test){
        // $test = 0;
        if (!empty ($test)){
            return intval($test);
        }
        return 0;
    }


}