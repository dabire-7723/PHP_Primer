<?php
    $title = "Switch Statement";
    include  'include/header.php'
?>   
    <h1><?php echo $title ?></h1>

    <?php   
       
       $grade = '9';

       switch($grade){
           case 'A':
                echo '<h2 style="color:green">You are a superstar</h2>';
                break;
           case 'B':
                echo '<h2 style="color: blue">You did well</h2>';
                break;
           default:
                echo '<h2 style="color: red">YOU HAVE FAILED!</h2>';
       }
         
    ?>
    <?php require 'include/footer.php'?>