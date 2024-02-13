<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring PHP</title>
</head>
<body>
    <div class="box">
        Hi i am HTML
    </div>
    <?php
    echo "I am php";
    echo "<br>";
    // Variables in php: 
    // Variables are denoted  by "$"
    $num1 = 10;
    $num2 = 10;
    $sum = $num1 + $num2;
    echo "The ans is:", $sum;
    echo "<br>";
    // Operators in php:
    // Arithmatic Operators
    echo "The sum is: ", $sum;
    echo "<br>";
    $diff = $num1 - $num2;
    echo "The diff is: ", $diff;
    echo "<br>";
    $multi = $num1 * $num2;
    echo "The product is: ", $multi;
    echo "<br>";
    $div = $num2 / $num1;
    echo  "The division is: ", $div;
    echo "<br>";
    $modulous = $num2 % $num1;
    echo "The remainder is: ", $modulous;
    // Assignment Operator(=)
    $newVar = $num1;
    echo "The updated value of num1 is", $newVar;
    // Comparision operators
    // inc / dec operators
    // Logical Operators

    ?>
</body>
</html>