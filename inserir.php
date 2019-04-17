<?php 

require 'config.php';

if(isset($_POST['nome']) && empty ($_POST['nome']) == false) { 

$senha = '';

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = md5(addslashes($_POST['senha']));

$inserirusuario = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
$pdo->query($inserirusuario);

header("Location: index.php");

}

?>