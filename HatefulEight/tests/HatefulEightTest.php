<?php
use PHPUnit\Framework\TestCase;
use App\HatefulEight;

final class HatefulEightTest extends TestCase
{  
    public function test_returns_the_same_number_when_only_one_passed()
    {
        // Escenario
        $eight = new HatefulEight();
        
        // La llamada a la función que queremos testear
        $sum = $eight->sum([1]);
        
        // assert
        $this->assertEquals(1, $sum);
    }

    public function test_returns_the_sum_of_the_numbers_passed()
    {
        // Escenario
        $eight = new HatefulEight();
        
        // La llamada a la función que queremos testear
        $sum1 = $eight->sum([1, 2]);
        $sum2 = $eight->sum([1, 10, 10, 10]);
        $sum3 = $eight->sum([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]);
        
        // assert
        $this->assertEquals(3, $sum1);
        $this->assertEquals(31, $sum2);
        $this->assertEquals(10, $sum3);
    }

    // -----------------------------------------------

    public function test_returns_odd_when_odd_number_passed()
    {
        $eight = new HatefulEight();

        $result = $eight->evenOrOdd(1);
        $result2 = $eight->evenOrOdd(31);

        $this->assertEquals('odd', $result);
        $this->assertEquals('odd', $result2);
    }

    public function test_returns_even_when_even_number_passed()
    {
        $eight = new HatefulEight();

        $result = $eight->evenOrOdd(2);
        $result2 = $eight->evenOrOdd(22);

        $this->assertEquals('even', $result);
        $this->assertEquals('even', $result2);
    }

    // -----------------------------------------------

    public function test_reverses_the_string_given()
    {
        $eight = new HatefulEight();

        $result = $eight->reverse('amor');
        $result2 = $eight->reverse('serevilo igres');

        $this->assertEquals('roma', $result);
        $this->assertEquals('sergi oliveres', $result2);
    }

    // ----------------------------------------------------

    public function test_swaps_vowel()
    {
        $eight = new HatefulEight();

        $result = $eight->swapVowel('hola ke ase', 'i');
        $result2 = $eight->swapVowel('hola', 'u');

        $this->assertEquals('hili ki isi', $result);
        $this->assertEquals('hulu', $result2);
    }

    // -------------------------------------------------------

    public function test_return_true_when_a_palindrome_word_passed()
    {
        $eight = new HatefulEight();

        $result = $eight->is_palindrome('kayak');
        $result2 = $eight->is_palindrome('pan');

        $this->assertTrue($result);
        $this->assertFalse($result2);
    }

    // -----------------------------------------------------

    public function test_returns_the_highest_number_of_the_given_array()
    {
        $eight = new HatefulEight();

        $result = $eight->highestNumber([1, 2, 3, 4, 5, 6, 7]);
        $result2 = $eight->highestNumber([0, 1, 70, 3, 0, 7, 7, 1]);

        $this->assertEquals(7, $result);
        $this->assertEquals(70, $result2);
    }

    // -------------------------------------------------------

    public function test_returns_the_position_of_X()
    {
        $eight = new HatefulEight();
        $grid = [
            ['Y', 'O', 'O'],
            ['O', 'X', 'O'],
            ['O', 'O', 'O']
        ];

        $result = $eight->getX($grid);

        $this->assertEquals([1, 1], $result);
        
        $grid = [
            ['O', 'O', 'O', 'O', 'O'],
            ['O', 'O', 'O', 'O', 'O'],
            ['O', 'O', 'O', 'O', 'O'],
            ['O', 'O', 'O', 'O', 'O'],
            ['O', 'O', 'O', 'O', 'X'],
          
        ];

        $result = $eight->getX($grid);

        $this->assertEquals([4, 4], $result);
    }
}
