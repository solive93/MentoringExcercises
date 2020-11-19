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

public function test_return_same_number()
    {
        $test = "2";
        $calculadora = new stringCalculator();
        $result = $calculadora->add($test);
        $this->assertEquals(2,$result);

    }
public function test_sum_numbers()
    {
        $test = "2,3";
        $calculadora = new stringCalculator();
        $result = $calculadora->add($test);
        $this->assertEquals(5,$result);

    }
}
