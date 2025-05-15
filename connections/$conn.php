<?php 
$host = "localhost";
$user = "root";  
$pass = "adimin";
$bd = "site-praticando";


$conn= new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

C:\xampp\htdocs\ExRob\bloco de notas inteligente
