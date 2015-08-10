<?php
    class TitleCaseGenerator
    {

        function makeLowerCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_lowercased = array();
            foreach ($input_array_of_words as $word) {
                array_push($output_lowercased, strtolower($word));
            }

            return implode(" ", $output_lowercased);

        }


        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                array_push($output_titlecased, strtolower($word));
            }

            return implode(" ", $output_titlecased);
        }
    }

 ?>
