<?php
namespace App;

final class JacksonFive
{
    public function isThereQuestionMark(string $input) :bool
    {
        for($i = 0; $i < strlen($input); $i++)
        {
            if ($input{$i} == '?')
            {
                return true;
            }
        }
        return false;
    }

}