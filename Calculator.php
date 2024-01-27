<?php

$num1 = $_GET['input1'];
$num2 = $_GET['input2'];
$operation = $_GET['operation'];

switch($operation) {
    case "add":
        $result = $num1 + $num2;
        break;
    case "subtract":
        $result = $num1 - $num2;
        break;
    case "multiply":
        $result = $num1 * $num2;
        break;
    case "divide":
        if ($num2 !=0) {
            $result = $num1 / $num2;
        }
        else{
            echo "Cannot divide by zero";
            exit();
        }
        break;
}

echo "The result is: ";
echo $result;
?>