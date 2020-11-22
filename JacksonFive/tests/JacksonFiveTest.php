<?php
use PHPUnit\Framework\TestCase;
use App\JacksonFive;

final class JacksonFiveTest extends TestCase
{  
    public function test_returs_true_when_question_mark()
    {
        $five = new JacksonFive();
        $input = 'ftdqhgdj?hbwdhbc';

        $result = $five->isThereQuestionMark($input);

        $this->assertTrue($result);
    }

    public function test_returs_false_when_question_mark()
    {
        $five = new JacksonFive();
        $input = 'ftdqhgdjhbwdhbc';

        $result = $five->isThereQuestionMark($input);

        $this->assertFalse($result);
    }
}
