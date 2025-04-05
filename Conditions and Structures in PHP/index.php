<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $bool = true; 
    $a = 1;
    $b = 4;
    
    //if else
    if ($a < $b && !$bool){
        echo "First condition is true!";
    } 
    else if ($a < $b && $bool){
        echo "Second condition is true!";
    } else {
        echo "No condition is true!";
    }
    //swich case
    
    ?>
</body>

</html>