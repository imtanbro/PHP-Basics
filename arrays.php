<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
$numlist=array(23,26,98,786,4132,15648,4651,'597','<h1>Hey this is array </h1>');
    
    //to display the elements of an array //we use folowing syntax
    
    echo $numlist[0];
    echo "<br>";
    echo $numlist[7];
    echo "<br>";
    echo $numlist[8];
    echo "<br>";
    echo $numlist[0] + $numlist[2];
    
    //structure of an array
    
    print_r($numlist);
    
    echo "<br>";
    echo $numlist[3] + $numlist[2];
    
    
    ?>
    
</body>
</html>