<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo pow(2,7)."<br>";//2 raised to the power 7
    
    $i = rand(10,20);//stored a random value in i
    
    $j = rand(1,10);
    echo $i . "<br>";
    echo $j . "<br>";
    echo pow($i,$j)."<br>";
    
    echo $i ."<br>";//shows and random value
    
    echo sqrt($i) . "<br>"; 
    
    echo ceil(8.3) . "<br>";
    
    echo floor(4.6) . "<br>";
    
    echo round(4.5) . "<br>";
    
    
    ?>
</body>
</html>