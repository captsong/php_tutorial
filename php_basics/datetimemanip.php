<?php 
    //title needs to be declared before the page includes the header
    $title = "Date and Time";
    include 'includes/header.php' 
?>
<body>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate();
        echo "<p>Today's date:</p>";
        echo $datenow['mday'] . '<br />';
        echo $datenow['mon'] . '<br />';
        echo $datenow['year'] . '<br />';

        echo "Today's Date: " . $datenow['mday'] . '/' .  $datenow['mon'] . '/' . $datenow['year'];
        echo time() . '<br />';

        print date("m/d/y G.i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());




    ?>
    
    <?php require 'includes/footer.php' ?>