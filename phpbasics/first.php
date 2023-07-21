<?php
require("./variable.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo"Hi my name is $name and i am $age year old";
    echo "<br>";
    function add( $a, $b){
        return $a+$b;
    }
    echo  "addition= ".add(-4,-7)." amount"
    ?> </body>

</html>