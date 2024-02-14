<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring PHP</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
    }
    .box{
        background-color:lavender;
    }
</style>
<body>
    <div class="box">
        Hi i am HTML
        <?php
    echo "<h1>How to print in php?</h1>";
    echo "Using echo Hello World we can print in php";
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
    echo "<h1> Arithmatic Operators</h1>";
    echo "<h2>Addition(+) </h2>";
    echo "The sum is: ", $sum;
    echo "<br>";
    echo "<h2> Subtraction(-) </h2>";
    $diff = $num1 - $num2;
    echo "The diff is: ", $diff;
    echo "<br>";
    echo "<h2> Multiplication(*) </h2>";
    $multi = $num1 * $num2;
    echo "The product is: ", $multi;
    echo "<br>";
    echo "<h2> Division(/) </h2>";
    $div = $num2 / $num1;
    echo  "The division is: ", $div;
    echo "<br>";
    echo "<h2> Modulous(%) </h2>";
    $modulous = $num2 % $num1;
    echo "The remainder is: ", $modulous;
    echo "<br>";
    // Assignment Operator
    echo "<h1> Assignment Operators</h1>";
    echo "<h2> Using = sign we can assign </h2>";
    $newVar = $num1;
    $newVar += $num1;
    echo "The value of num1 after addition is: ", $newVar;
    echo "<br>";
    echo "<h2>Using -= OR =- we can subtract</h2>";
    $newVar -= $num1;
    echo "The value of num1 after subtraction is: ", $newVar;
    echo "<br>";
    echo "<h2>Using *= OR =* we can Multiply</h2>";
    $newVar *= $num1;
    echo "The value of num1 after  is: ", $newVar;
    echo "<br>";
    echo "<h2>Using /= OR =/ we can Multiply</h2>";
    $newVar /= $num1;
    echo "The value of num1 after div is: ", $newVar;
    echo "<br>";
    
    // Comparision operators
    echo "<h1> Comparision Operators</h1>";
    echo "The value of 1 == 4 is: ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is: ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 is: ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1=<4 is: ";
    echo var_dump(1<=4);
    echo "<br>";

    // Inc / Dec operators
    echo "<h2> Increament & Decreament Operators</h2>";
    echo "<h3>Increament Operator</h3>";
    echo $num1++; //num1 = 10(at front-end), num1=11 (at backend)
    echo "<br>";
    echo ++$num1; //num1 = 12(at front-end)
    echo "<br>";
    echo "<h3>Decreament Operator</h3>";
    echo $num1--; //num1 = 12(at frontend), num1 = 11(at backend)
    echo "<br>";
    echo --$num1; // num1 = 11(at front-end)
    echo "<br>";
    // Logical Operators
    echo "<h1>Logical Operators</h1>";
    echo "<h2>AND</h2>";
    echo "<h3>&&</h3>";
    echo "<h2>OR</h2>";
    echo "<h3>||</h3>";
    echo "<h2>XOR</h2>";
    echo "<h3>!</h3>";

    // DATA Types in PHP
    echo "<h1>Data Types</h1>";
    echo "<h4> Note: var_dump() is generally use to tell the type of the data type;</h4>";
    echo "<h2>String</h2>";
    $var = "This is a String";
    echo var_dump($var);
    echo "<br>";
    echo "<h2>Integer</h2>";
    $varInt = 167;
    echo var_dump($varInt);
    echo "<br>"; 
    echo "<h2>Float</h2>";
    $varFloat = 78.87;
    echo var_dump($varFloat);
    echo "<br>";
    echo "<h2>Boolean</h2>";
    $varBool = true;
    $varBool = false;
    echo  var_dump($varBool);
    echo  var_dump($varBool);
    echo "<br>";
    echo "<h2>Array</h2>";
    $varArr =  [1,4,3,2,1];
    echo var_dump($varArr);
    echo "<br>";
    echo "<h2>Object</h2>";    
    ?>
    </div>
    
</body>
</html>