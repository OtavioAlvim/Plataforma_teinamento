<?php
session_start();
include('conexao.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	$_SESSION['errorr'] = true;
	header('Location: ../index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$sql = "select count(*) as total from usuarios where usuario = '{$usuario}'";
$resultados = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultados);
if($row['total'] == 0) {
	$_SESSION['erro_de_login'] = true;
	header('Location: ../index.php');
	exit;
}

$query = "select usuario, senha, sistema, cnpj from usuarios where usuario = '{$usuario}' and senha = md5 ('{$senha}');";
$result = mysqli_query($conn, $query);
$resultado = mysqli_fetch_assoc($result);

//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
if(isset($resultado)){
	$_SESSION['usuario'] = $resultado['usuario'];
	$_SESSION['sistema'] = $resultado['sistema'];
	$_SESSION['cnpj'] = $resultado['cnpj'];
	header('Location: permissao.php');
	exit();
}else{
	header('Location: ../index.php');
}
?>
