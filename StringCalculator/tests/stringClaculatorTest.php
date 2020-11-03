<?php
use PHPUnit\Framework\TestCase;
use App\stringCalculator;

final class StringCalculatorTest extends 
TestCase
{  
    
public function test_string_empty ()
    {
        $test = "";
        $calculadora = new stringCalculator();
        $result = $calculadora->add($test);
        $this->assertEquals(0,$result);
    }
}
