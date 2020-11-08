<?php
namespace App;

final class HatefulEight
{
    public function sum(array $array) :int
    {
        $sum = 0;
        foreach($array as $number)
        {
            $sum += $number;  
        }

        return $sum;
    }

    public function evenOrOdd(int $number) :string
    {
        if($number % 2 == 0)
        {
            return 'even';
        }
        return 'odd';
    }

    public function reverse(string $string) :string 
    {
        $word = '';
        for($index = strlen($string)-1; $index >= 0; $index--)
        {
            $character = $string{$index};
            $word .= $character;
        }
        return $word;  
    }

    public function swapVowel(string $word, string $vowel) :string 
    {
        $result = '';
        for($index = 0; $index <= strlen($word)-1; $index++)
        {
            $character = $word{$index};

            if($this->is_vowel($character) )
            {
                $result .= $vowel;
            }
            
            if(!$this->is_vowel($character))
            {
                $result .= $character;
            }   

        }
        return $result;
    }

    private function is_vowel(string $character) :bool
    {
        return $character == 'a' || $character == 'e' || $character == 'i' 
        || $character == 'o' || $character == 'u';
    }

    public function is_palindrome(string $word) :bool
    {
        return $this->reverse($word) === $word;
    }

    public function highestNumber(array $array) :int
    {
        $highest = 0;
        foreach($array as $number)
        {
            $highest = $number > $highest ? $number : $highest;
        }
        return $highest;
    }

    public function getX(array $grid) :array
    {
        for($x = 0; $x <= count($grid)-1; $x++)
        {
            for($y = 0; $y <= count($grid)-1; $y++)
            {
                
                if ($grid[$x][$y] === 'X')
                {
                    return [$x, $y];
                }
                
            }
        }
    }
}