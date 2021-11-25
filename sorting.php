<?php
    class Sorting{
        public function sort_and_show(){
            $file = fopen("data.txt", "r");
            $array = array();
            
            while ( $line = fgets($file, 1000) ){
                $nl = mb_strtolower($line,'UTF-8');
                $array[] = $nl;
            }
            print_r($array);
        }
    }
?>
