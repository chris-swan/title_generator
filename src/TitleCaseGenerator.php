<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $exclude_words = array("the", "for", "it", "and", "in");



            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $key => $word)
            {
                array_push($output_titlecased, ucfirst($word));
            }

            return implode(" ", $output_titlecased);
        }
    }

 ?>
