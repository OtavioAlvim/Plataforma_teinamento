<?php
include('verifica_login.php');


if($_SESSION['sistema'] == 'Administrador' ){// usuario Administrador
    header('Location: ../pagina-inicial.php');
    exit();
} else if($_SESSION['sistema'] == 'Gestor-Inoveh' ){//usuario Gestor
	header('Location: ../menu-gestor.php');
	exit();
}  else if($_SESSION['sistema'] == 'Gestor-Pet' ){//usuario Pet
	header('Location: ../menu-gestor.php');
	exit();
}else if($_SESSION['sistema'] == 'Gestor-Food' ){//usuario Food
 	header('Location: ../menu-gestor.php');
 	exit();
} else if($_SESSION['sistema'] == 'Gestor-Agro' ){//usuario Agro
	header('Location: ../menu-gestor.php');
	exit();
}else if($_SESSION['sistema'] == 'Gestor-Salao' ){//usuario Salão
	header('Location: ../menu-gestor.php');
	exit();
} else if($_SESSION['sistema'] == 'Compilart' ){//usuario compilart
	header('Location: ../compilart.php');
	exit();
} else if($_SESSION['sistema'] == 'Visual-Control' ){//visual control
	header('Location: ../visual-control.php');
	exit();
} else if($_SESSION['sistema'] == 'Sia' ){//usuario Sia
	header('Location: ../sia.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;//usuario vai estar cadastrado no sistema, porem nao vai ter acesso ha plataforma
	header('Location: ../usuario-sem-permissao.php');
	exit();
}
?>