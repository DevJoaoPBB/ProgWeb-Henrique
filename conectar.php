<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'Pokemon';
// Conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $dbname) or die("Não foi possível estabelecer conexão com banco de dados....");
?>