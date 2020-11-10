<?php
namespace App;

final class StringCalculator
{
    public function add($test){
        // $test = 0;
        if (empty ($test)){
            return 0;
        }
        $coma = ",";
        $posiciones = strpos ($test, $coma);
        if($posiciones > 0){

           $numerosTest = explode ($coma, $test);
           $num1 = intval($numerosTest[0]);
           $num2 = intval($numerosTest[1]);

           $resultado = $num1+$num2;

           return $resultado;
        }

        return intval($test);




    }


}