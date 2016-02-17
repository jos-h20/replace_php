<?php
class FindAndReplace
{
function replacer($first_input, $second_input, $third_input)
    {
        $sentence_array = array();
        $chosen_word = $second_input;
        $replace_word = $third_input;

        array_push($sentence_array, $first_input);


        return str_replace($chosen_word, $replace_word, $sentence_array);
}
}
?>
