
<?php
    $title= "Index";
    include  'include/header.php'
?>

    <!--Basic html-->

    <h1><?php echo $title ?></h1>
    
    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        $name ='Christ';
        $age = 21;
        $school ="Sharda University";
        echo $name;
        echo '<br/>';
        echo $age;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>I Am '.$age.' Years Old </h1>';
        echo "<h1>I'm studying at $school<?h1>";
    ?>
    <button type="button" class="btn btn-success">CLICK ME!</button>

    <?php require 'include/footer.php'?>