<?php
include('verifica_login.php');
include('conexao.php');

$grupo = mysqli_real_escape_string($conn, $_POST['grupo']);
$usuario = $_SESSION['usuario'];

$sql = "INSERT INTO temp_back (`usuario`, `grupo`, `horario` ) 
VALUES ('$usuario', '$grupo', curtime());";

if($conn->query($sql) === TRUE) {
	$_SESSION['video_inserido'] = true;
}

$conn->close();

header('Location: ../avante.php');
exit;
?>
?>