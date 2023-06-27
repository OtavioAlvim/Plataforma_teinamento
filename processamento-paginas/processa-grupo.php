<?php
session_start();
include('conexao.php');
// || empty($_POST['cnpj']) || empty($_POST['type'])
if(empty($_POST['grupo'])) {
	$_SESSION['error'] = true;
	header('Location: ../cadastro-grupo.php');
	exit();
}

$grupo = mysqli_real_escape_string($conn, trim($_POST['grupo']));

//Verifica se no banco de dados, ja existe um cadastro

$sql = "select count(*) as total from grupo where nome = '{$grupo}'";
$resultados = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultados);
if($row['total'] == 1) {
	$_SESSION['erro_ao_cadastrar'] = true;
	header('Location: ../cadastro-grupo.php');
	exit;
}

//cadastra um novo usuario no banco de dados do sistema

$sql = "INSERT INTO grupo (nome) VALUES ('$grupo');";

if($conn->query($sql) === TRUE) {
	$_SESSION['grupo_cadastrado'] = true;
	header('Location: ../cadastro-grupo.php');
	exit();
}else{
	header('Location: ../cadastro-grupo.php');
}
?>
