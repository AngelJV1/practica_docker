<?php
$servername = "db";
$username = "testuser";
$password = "testpassword";
$dbname= "testdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Conexion fallida: " . $conn->conect_error);
}
echo "Conexion exitosa a la base de datos";
?>