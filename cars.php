<?php

$servername = "127.0.0.1";
$database = "car";
$username = "root";
$password = "root";
$charset = "utf8mb4";

try {

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connection Okay";

return $pdo;

}

catch (PDOException $e)

{
echo "Connection failed: ". $e->getMessage();
}




$array_products=array();
$stmt=$conn->prepare("select * from car"); 
$stmt->execute();
console.log($stmt);
$conn=null;

?>