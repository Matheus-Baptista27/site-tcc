<?php
include ('conn.php');
$connect = getConnection();

$nome = mb_strtoupper($_POST['nome']);
$senha = $_POST['senha'];

try {
	$query = "SELECT * FROM usuario WHERE USUARIO = :nome and SENHA = :senha";
	$stmt = $connect->prepare($query);
	$stmt->bindValue(":nome",$nome);
	$stmt->bindValue(":senha",$senha);
	$stmt->execute();

	$result = $stmt->fetchAll();

if ($result) {
	foreach ($result as $value) {
		session_start();
		$_SESSION['usuario'] = $nome;
		$_SESSION['pwd'] = $senha;
		$_SESSION['nivel_acesso'] = $value['TIPO_ACESSO'];
		$_SESSION['ID'] = $value['ID_USUARIO'];
		header("location: index.php");
	}
}
else{
	header("location: login.php?status=erro");
}
} catch (Exception $e) {
	echo "erro";
	print_r($e);
}
