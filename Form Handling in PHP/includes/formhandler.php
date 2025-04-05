<?php  

// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first_name = htmlspecialchars($_POST["firstname"]) ;
    $last_name = htmlspecialchars($_POST["lastname"]);
    $pets= htmlspecialchars($_POST["favoritepet"]); 

    if (empty($first_name)) {
        exit();
    }
    
    echo "These are the data, that the user submitted: ";
    echo "<br>";
    echo $first_name;
    echo "<br>";
    echo $last_name;
    echo "<br>";
    echo $pets;
}