<?php
 // my first Function named test
    function test(){
        return "ben test <br>";
    }
   echo test();

   // write a function that add two number
   // and return the sum
   function calculate($num1, $num2){
       return ($num1 + $num2);
   }
   $sum = calculate(5,12);
   echo 'The sum is'.$sum.'<br>';

   // function which returned a global variable
   $name = 'Freedom';
   function fullname($surename){
       //global name
       return $GLOBALS['name'].' '.$surename;
       /**''
        * or write return $name.' '.$surname
        */
   }
   echo fullname('Kingdom');

   // function wich substring a string
   // take ... on the end of string

   $text = "lorem ipsum la font esto maos tesi";
   function smaller($str,$limit=10){

        $charNumber = strlen($str);
        if($charNumber > $limit){
            $str = substr($str,0,$limit).'..';
        }
        return $str;
   }
   echo smaller($text,10);
?>