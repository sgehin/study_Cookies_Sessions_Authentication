<?php

function connectDB() {
    $hostname = 'localhost';
    $databasenaam = 'go';
    $username = 'root';
    $password = '';
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    //error in connect stop instructie
    if ($conn->connect_error) die($conn->connect_error);
    return $conn;
}
function mysql_entities_fix_string($conn,$string){
    return htmlentities(mysql_fix_string($conn,$string));
}



function mysql_fix_string($conn,$string){
    if(get_magic_quotes_gpc()) $string = stripcslashes($string);
    return $conn->real_escape_string($string);
}

?>
