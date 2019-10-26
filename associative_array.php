<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num= array('Dell','Deepak','Suraj','Aman');
    
    echo $num[1] . "<br>";
    
    print_r($num);/* zero is the key to normal array */
    
    echo  "<br>";
    
    $names = ["first_name" => 'Tanmay',"Last_name" => 'Gangurde'];
    
    print_r($names);//first_name is the key
    //to associative array i.e. names.
    
    echo "<br>" . $names['first_name'] . " " . $names['Last_name'];
    
    
        
    
    ?>
</body>
</html>