<!-- Hello World!!!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World")
</script> -->

<?php
    // echo "Hello World";
    # echo "Hello World";
    #
    /* echo "Hello World";
     echo "Hello World";
     echo "Hello World";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->
    <?php
        //echo "Hello World";
        //echo "Hello World"

        //variable

        // $a = 5;
        // var_dump($a);

        // var_dump("JOHN");
        // var_dump(3.14);
        // var_dump(true);
        // var_dump([1, 2, 3]);
        // var_dump(null);

        //variable scope
        // global can be use if declared or implemented

        // $a = 5;

        // // echo $a;

        // //local variable

        // function test()
        // {
        //    static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }
        // // test(); //6
        // // test(); //6
        //  test(); //6
        //  test(); //7
        // //echo $a;

        // echo & print statement

        // echo ("Hello! <br>"), ("Hello! <br>");
        // echo "Hello! <br>", "World! <br>";
        // print ("Hello! <br>");
        // print "Hello! <br>";
        // echo print ("Hi!"); //THIS ADDS A VALUE OF A

        // DATA TYPES

        // $a = "Musni"; //string        
        // $b = 5; //int
        // $c = 0.5; //float
        // $d = true; //bool
        // $e = [1, 2 ,3]; //array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r"); //resources

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";


        //strings

        // $a = "blue";
        // $name = "<h1 style =\"color:$a\">Papi Dudut Malakas";

        // $name = "John Patrick Musni";
        // echo strlen($name), "<br>";
        // echo str_word_count($name), "<br>";
        // echo strpos($name, "Musni"), "<br>";
        // echo strtoupper($name), "<br>";
        // echo strtolower($name), "<br>";
        // echo str_replace("Musni", "Malakas", $name), "<br>";
        // echo strrev($name), "<br>";
        // echo trim($name), "<br>";
        // echo print_r (explode("P " , $name), "<br>");

        // Slicing
        // $x = "Hello"  ;
        // $y = "World!";
        // echo $x ." ". $y . "<br>" ;
        // echo "$x $y" . "<br>";
        // echo '$x $y <br>';

        // echo substr($x, 1,  4), '<br>';
        //  echo substr($x, 1,  ) , '<br>';
        //  echo substr($x, -5,2),'<br>';


        // escape characters
        // $a = "sample";
        //  $x = "John \"Pogi\" Doe" ;
        //  echo $x;

        //number
    //     $a = -1; //int  
    //     $b = 1.0; //float
    //     $c = "5 eggs"; //string
    
    //    echo PHP_INT_MAX,  '<br>';
    //    echo PHP_INT_MIN , '<br>';
    //    echo PHP_INT_SIZE ,'<br>';
    //    echo is_int($c),'<br>' ;
    //    echo PHP_FLOAT_MAX , '<br>';
    //    echo PHP_FLOAT_MIN , '<br>';
    //    echo PHP_FLOAT_DIG , '<br>';
    //    echo PHP_FLOAT_EPSILON , '<br>';
    //    echo is_float($b) ,'<br>';

    //    echo is_numeric($c) ,'<br>';

       //casting
    //    $a =  "Musni"; //string        
    //     $b = 5; //int
    //     $c = 3.14 ; //float
    //     $d = true; //bool
    //     $e = [1, 2 ,3]; //array
    //     $f = new stdClass(); //object
    //     $g = null; //null
    //     $h = fopen("php_practice.php", "r"); //resources

        //casting - string
    //     $a = (string) $a;
    //     $b = (string) $b;
    //     $c = (string) $c;
    //     $d = (string) $d;
    //     $e =  $e;
    //     $f =  $f;
    //     $g = (string) $g;
    //     $h = (string) $h;

    //  //casting - int
    //     $a = (int)  $a;
    //     $b = (int)  $b;
    //     $c = (int)  $c;
    //     $d = (int)  $d;
    //     $e = (int)  $e;
    //     $f =   $f;
    //     $g = (int) $g;
    //     $h = (int) $h;

        // //casting - float
        // $a = (float)  $a;
        // $b = (float)  $b;
        // $c = (float)  $c;
        // $d = (float)  $d;
        // $e = (float)  $e;
        // $f =   $f;
        // $g = (float) $g;
        // $h = (float) $h;

        // //casting - boolean
        // $a = (bool)  $a;
        // $b = (bool)  $b;
        // $c = (bool)  $c;
        // $d = (bool)  $d;
        // $e = (bool)  $e;
        // $f = (bool)  $f;
        // $g = (bool) $g;
        // $h = (bool) $h;

         //casting - array
        // $a = (array)  $a;
        // $b = (array)  $b;
        // $c = (array)  $c;
        // $d = (array)  $d;
        // $e = (array)  $e;
        // $f = (array)  $f;
        // $g = (array) $g;
        // $h = (array) $h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";
        

        //php math
        // $pi = pi();
        // echo $pi, "<br>";

        // $minNumber = min(300, 80, 4, 98, 5);
        //  $maxNumber = max(300, 80, 4, 98, 5);


        // echo $minNumber, "<br>";
        // echo $maxNumber, "<br>";

        // $num = -5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo abs($sqrt), "<br>";

        // $rounded = round(3.14);
        //  echo ($rounded), "<br>";

        //  echo PHP_INT_MAX, "<br>";
        //   echo PHP_INT_MIN, "<br>";
        //  echo rand(), "<br>";

        //  echo rand(5, 30), "<br>";


        // php constant
        // define("Num9", 20);
        // $x = 5;

        // function test(){

        //  echo Num9;
        // }

        // test();


        //php operator
        //arithmitic

        //addition + sum
        // echo 6 + 5 + 90, "<br>";

        // //subtract - difference
        //  echo 7 - 7 - 10, "<br>";

        //  echo 7 - 2 + 90 , "<br>";

        //  // multiplication * product
        //   echo 6 * 8 * 9 , "<br>";

        //   //division / quotient
        //    echo 6 / 8  , "<br>";

        //     echo 6 / 2 * 2 , "<br>";

        //     echo 13 + 6 / 2 * 2 , "<br>";

        // //modulus
        // echo 5 % 2, "<br>";

        // //exponent
        // echo 6 ** 2;

        //assignment
        // $x = 5;

        // +=
        // -=
        // /=
        // *=
        // %=

        //$x = $x + 10;
        // $x += 10;

        // echo $x;

        //comparison

        //==
        // var_dump(6 == "6");

        // // === identical
        // var_dump(6 === "6");

        //    // === identical
        // var_dump(100 != 99);


        //    // !==
        // var_dump(100 !== 100);

        // // >
        // // >=
        // var_dump(6 >= 4);

        // // <
        // // <=
        // var_dump(6 <= 7);

        // // <=>
        // echo 1  <=> 1;


        //++ increment
        //  $x = 5;
        // //PRE - increment
    
        // echo ++ $x, "<br>";


        //  $y = 5;
        // //POST - increment
        // echo  $y++, "<br>";
        // echo  $y, "<br>";

        // // -- decrement

        //   $x = 5;
        // //PRE - decrement
    
        // echo -- $x, "<br>";


        //  $y = 5;
        // //POST - decrement
        // echo  $y--, "<br>";
        // echo  $y, "<br>";

    
        // logical

        // and &&
        // var_dump(true and true); //true
        //  echo  "<br>";
        // var_dump(6 == "6" && 6 > 9); //false
        //  echo  "<br>";

        // // or ||
        // var_dump(false or false); //false
        // echo  "<br>";
        // var_dump(6 == "6" || 6 > 9); //true
        //  echo  "<br>";


        //  // xor
        //   var_dump(true xor false); //true
        // echo  "<br>";
        //  var_dump(6 == "6" xor 6 > 9); //true
        //  echo  "<br>";

        //  // !
        //   var_dump(!false); //true
        // echo  "<br>";
        //  var_dump(!(6 == "6") ); //false
        //  echo  "<br>";


        // string operator
        // echo "Hello " . "World!";

        // $x = "Hello";
        // $x = $x . "World!";

        // $x .= "World!";

        // echo $x;



    ?>
</body>
</html>