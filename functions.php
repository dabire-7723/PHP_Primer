<?php
    $title = "Functions";
    include  'include/header.php'
?>    
    <h1><?php echo $title ?></h1>

    <?php

        /*Defining a Functions*/

        function writeMessage(){
            echo "You are really a nice person, Have a nice time!<br/>";
        }


        /*Calling a function*/
        writeMessage();
        writeMessage();
        echo "<hr/>";
        writeMessage();
        writeMessage();

        /*Functions with parameters */
        function addFunction($num1, $num2){
            $sum =$num1+$num2;

            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){
            $num=$num+10;
        }

        function returnProduct($num1,$num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        addFunction(10,20);
        $num = 500;
        addFunction(10,$num);
        addFunction('10','20');

        changeNum($num);
        echo $num.'<br/>';

        $return_value = returnProduct(10,200);
        echo $return_value.'<br/>';



    ?>

<?php require 'include/footer.php'?>