<?php
    $title = "String Manipulation";
    include  'include/header.php'
?>    
    <h1><?php echo $title ?></h1>

    <?php 
    //Concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "trevoir williams";
        echo $phrase1." ".$phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name). '<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' .strtoupper(str_repeat('a',10)). '<br/>';
        echo 'Get a Substring: ' . substr($name,3,10).'<br/>';
        echo 'Get position of string: ' . strpos($name,'w').'<br/>';
        echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';
        echo 'Find Length of String: ' . strlen($name).'<br/>';
        echo 'Without Trim: '."A"." B C D "."E".'<br/>';
        echo 'Trim spaces on both sides: '."A".trim(" B C D")."E".'<br/>';
        echo 'Trim spaces on left side: '."A".ltrim(" B C D ")."E".'<br/>';
        echo 'Trim spaces on right side: '."A".rtrim(" B C D ")."E".'<br/>';


        echo 'Replace string with another: '.str_replace("stand","sit",$phrase2).'<br/>';


    ?>
    <?php require 'include/footer.php'?>