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
        $this->assertTrue($five->isThereQuestionMark('?'));  
    }

    public function test_returs_false_when_question_mark()
    {
        $five = new JacksonFive();
        $input = 'ftdqhgdjhbwdhbc';

        $result = $five->isThereQuestionMark($input);

        $this->assertFalse($result);
    }

    // -------------------------------------------------------

    public function test_returs_true_if_there_is_question_mark()
    {
        $five = new JacksonFive();
        $input = 'Hola';

        $result = $five->removeVowels($input);

        $this->assertEquals('hl', $result);
        $this->assertEquals('s', $five->removeVowels('Oso'));
    }

    // ------------------------------------------------------

    public function test_returs_the_longest_word_in_array()
    {
        $five = new JacksonFive();
        $input = ['cat', 'pasta', 'asparragus'];

        $result = $five->getLongestWord($input);

        $this->assertEquals('asparragus', $result);
        $this->assertEquals('astronaut', $five->getLongestWord(['astronaut', 'cat']));
    }
}
