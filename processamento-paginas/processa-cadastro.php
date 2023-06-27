<?php
session_start();
include('conexao.php');
// || empty($_POST['cnpj']) || empty($_POST['type'])
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	$_SESSION['error'] = true;
	header('Location: ../cadastrar-usuario.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));
$cnpj = mysqli_real_escape_string($conn, trim($_POST['cnpj']));
$sistema = mysqli_real_escape_string($conn, trim($_POST['type']));

//Verifica se no banco de dados, ja existe um cadastro

$sql = "select count(*) as total from usuarios where usuario = '{$usuario}' and usuario = '{$sistema}'";
$resultados = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultados);
if($row['total'] == 1) {
	$_SESSION['erro_ao_cadastrar'] = true;
	header('Location: ../cadastrar-usuario.php');
	exit;
}

//cadastra um novo usuario no banco de dados do sistema

$sql = "INSERT INTO usuarios (usuario, senha, cnpj, sistema) VALUES ('$usuario', '$senha', '$cnpj', '$sistema');";

if($conn->query($sql) === TRUE) {
	$_SESSION['usuario_cadastrado'] = true;
	header('Location: ../cadastrar-usuario.php');
	exit();
}else{
	header('Location: ../cadastrar-usuario.php');
}
?>
