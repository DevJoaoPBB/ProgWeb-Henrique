<?php
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];

$sql ="INSETO INTO Pokedex(`nome`,`tipo`) values('$nome','$tipo')";
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'Pokemon';

// Conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $dbname) or die("Não foi possível estabelecer conexão com banco de dados....");

$res = mysqli_query($con, $sql) or die("Erro ao inserir Pokemon!");

echo"Pokemon na Pokedex!"
?>
