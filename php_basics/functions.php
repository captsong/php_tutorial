<?php 
    //title needs to be declared before the page includes the header
    $title = "Functions";
    include 'includes/header.php' 
?>
<body>
    <h1>Functions</h1>
    <?php
        // Defining a functions
        function writeMessage(){
            echo "You are really a nice person, have a nice day! <br/>";
        }
        //call a function
        writeMessage();
        writeMessage();
        writeMessage();
        writeMessage();

        //functions with parameters
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";
        }
        //pass by value -> the original value of the passed parameters will not change
        $num = 500;
        addFunction(5, 3);
        addFunction($num, 10);
        addFunction("50", '10');
        echo $num . '<br/>';

        //pass by reference
        function changeNum(&$num){
            $num = $num + 10;
        }
        changeNum($num);
        echo $num . '<br/>';

        //function with return value
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';




    ?>
<?php require 'includes/footer.php' ?>