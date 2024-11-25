<?php
class Validation {
    public $string;
    function __construct($string) {
        $this->string = $string;
    }

    function validate() {

        $counter = 0;
        $openBracket = ['{'];
        $closedBracket = ['}'];
        $length = strlen($this->string);

        for ($i = 0; $i<$length; $i++) {

            $char = $this->string[$i];

            if (in_array($char, $openBracket)) {
                $counter ++;
            } elseif (in_array($char, $closedBracket)) {
                $counter --;
            }

            if ($counter < 0) break;

        }

        if ($counter != 0) {
            echo "false";
            return false;
        }

        echo "true";
        return true;
    }
}

$text = new Validation("{{la{jkdhf{adfa}}}}");

echo $text->validate();
?>