<?php

include('conn.php');
 
if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}
 
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
 
$query = "select * from usuario where nome = '{$nome}' and senha = '{$senha}'";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
    session_start();
	$_SESSION['nome'] = $nome;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: cadastro-admin.php');
	exit();
}