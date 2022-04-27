<?php

try{
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "portfolio";

    $server = new PDO('mysql:host='.$host.';dbname='.$db,$username,$password);

} catch(PDOExpection $err){
    echo "Wakishe";
    echo $err->getMessage();
}

?>