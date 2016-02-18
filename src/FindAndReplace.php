<?php
class FindAndReplace
{
function replacer($first_input, $second_input, $third_input)
    {
        $sentence_array = array();

        array_push($sentence_array, strtolower($third_input));

        $result = str_replace($first_input, $second_input, $sentence_array, $i);

        return $result;

    }

    function counter($sentence_input, $count_word_input)
        {
            $words = explode(" ", $sentence_input);
            $count = 0;
            foreach ($words as $word) {
                if ($count_word_input == $word) {
                    $count++;
                }
            }

            return $count;

        }
}
?>
