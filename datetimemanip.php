<?php
    $title = "Date-Time manipulation";
    include  'include/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php
        $datenow = getdate();
        echo "Today's Date <br/>";
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>';

        echo "Today's Date: ".$datenow['mon'].'/'.$datenow['mday'].'/'.$datenow['year'];

    ?>
    
    <?php require 'include/footer.php'?>