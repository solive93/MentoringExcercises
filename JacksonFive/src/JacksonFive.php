<?php
namespace App;

final class JacksonFive
{
    public function isThereQuestionMark(string $input) :bool
    {
        for($i = 0; $i < strlen($input); $i++)
        {
            if ($input[$i] == '?')
            {
                return true;
            }
        }
        return false;
    }

    public function removeVowels(string $input) :string
    {
        $input = strtolower($input);
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $inputWithoutVowels = str_replace($vowels, '', $input);
        
        return $inputWithoutVowels;
    }

    public function getLongestWord(array $input) :string
    {
        
    }
}