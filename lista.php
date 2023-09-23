<?php
echo 'Conectar-se ao Banco de dados Procedural';
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'Pokemon';

// Conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $dbname) or die("Não foi possível estabelecer conexão com banco de dados....");

$consulta = "SELECT * FROM Pokedex";
$resultado = mysqli_query($con, $consulta);

// Exibe os resultados da consulta
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "Nome: " . $row['nome'] . "<br>";
    echo "Tipo: " . $row['tipo'] . "<br>";
    echo "Id Pokemon: " . $row['IdPokemon'] . "<br>";
    echo "<br>";
}

// Fechar a conexão com o banco de dados quando terminar
mysqli_close($con);
?>
