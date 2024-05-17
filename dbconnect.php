<?php 
$host='localhost';
$dbname='cafe_system';
$user='root';
$password='';
try{                  
    $con=new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
}
catch(PDOException $e){
    echo "Error:".$e->getMessage();
}

