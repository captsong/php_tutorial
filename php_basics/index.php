
<?php 
    //title needs to be declared before the page includes the header
    $title = "Index";
    include 'includes/header.php' 
?>
<body>
    <!-- This is a Comment - Basic HTML -->
    <h1>Hello HTML -  PHP Primer </h1>
    <br />
    <?php
        // this is a comment
        /* multiline comment */
        echo 'Hello PHP!';
        echo '<br />';
        echo 'Second Line';
        echo '<br />';

        $name = 'Gwen';
        $age = 21;

        echo $name;
        echo '<br />';
        //using single quotations, you will need to use the . concatenation
        echo '<h1>My name is ' .$name. '</h1>';
        echo '<h1>My age is ' .$age. '</h1>';
        
        //using double quotations, you don't need to use the concat
        echo "<h1>My name is $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click Me</button>
    <button type="button" class="btn btn-primary">Click Me</button>
    <button type="button" class="btn btn-success">Click Me</button>
    <?php require 'includes/footer.php' ?>