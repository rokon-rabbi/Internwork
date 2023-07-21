<?php
 $firstNumber=5;
 $secondNumber=6;
 function addition($firstNumber, $secondNumber){
    return $firstNumber+$secondNumber;
 }
  function substraction($firstNumber, $secondNumber){
    return $firstNumber-$secondNumber;
 }
 function multiplication($firstNumber, $secondNumber){
    return $firstNumber*$secondNumber;
 }
 function division($firstNumber, $secondNumber){
    return $firstNumber/$secondNumber;
 }
 function result($result){
    echo"The result of the operation is = $result ";
 }
 
 result(addition($firstNumber,$secondNumber));
 echo "<br>";
 result(substraction($firstNumber,$secondNumber));
 echo "<br>";
 result(multiplication($firstNumber,$secondNumber));
 echo "<br>";
 result(division($firstNumber,$secondNumber));
?>