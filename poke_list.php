<?php
include('conectar.php');

if(!empty($_GET['action'])){

    if($_GET['action']=='excluir'){
        $IdPokemon = $_GET['IdPokemon'];
        $sql_delete = "DELETE FROM POKEDEX WHERE IdPokemon = '$IdPokemon'";

        if (mysqli_query($con, $sql_delete)){
            echo "<b>Excluido com sucesso!<br><br>";
        }else{
            echo "<b>Erro ao excluir!<br><br>";
        if ($_REQUEST['action'] == 'novo'){
            $nome = $_REQUEST['nome'];
            $tipo = $_REQUEST['tipo'];
            $sql_insert = "INSERT INTO Pokedex(`nome`,`tipo`) values ('$nome','$tipo')";
            if (mysqli_query($con, $sql_insert)){
                echo "<b>Pokemon salvo na Pokedex!<br><br>";

            }else{
                echo "<b>Pokemon não salvo!<br><br>";
            }
        }
        
        
        }
    }
}

$consulta = "SELECT * FROM Pokedex";
$resultado = mysqli_query($con, $consulta);
?>
<a href="novo_pokemon.php">Novo Pokemon</a>
<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Tipo</td>
    </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
      $link="<a href='poke_list.php?action=excluir&IdPokemon=$row[IdPokemon]'>Excluir</a>";
        echo "<tr>";
        echo "<td>" . $row['IdPokemon'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['tipo'] . "</td>";
        echo "<td>$link</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
