<?php
include('verifica_login.php');
include('conexao.php');
//valida se os campos estão vazios, se caso estiver vazio, ele redireciona para a mesma pagina,sem que armazene uma linha vazia no banco de dados
if(empty($_POST['name']) || empty($_POST['type']) || empty($_POST['link'])) {
	$_SESSION['erro_ao_inserir'] = true;
	header('Location: ../enviar-treinamento.php');
	exit();
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
$link = mysqli_real_escape_string($conn, $_POST['link']);
$newlink = substr ($link,17);
$cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
$grupo = mysqli_real_escape_string($conn, $_POST['grupo']);

$sql = "INSERT INTO videos (name, type, code, cnpj, grupo) VALUES ('$name', '$type', '$newlink', '$cnpj', '$grupo');";

if($conn->query($sql) === TRUE) {
	$_SESSION['video_inserido'] = true;
}

$conn->close();

header('Location: ../enviar-treinamento.php');
exit;
?>