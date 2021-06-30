<?php
session_start();
include('conexao.php');

if(empty($_POST['empresa']) || empty($_POST['telefone']) || empty($_POST['tipo']) || empty($_POST['frota'])) {
	header('Location: Form.php');
	exit();
}

$usuario = $_SESSION['usuario'];

$empresa = mysqli_real_escape_string($conexao, trim($_POST['empresa']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$frota = mysqli_real_escape_string($conexao, ($_POST['frota']));



if($frota <= 0){
	$_SESSION['frota_zero'] = true;
	header('Location: Form.php');
	exit;
}


$sql = "INSERT INTO pedidos(`empresa`,`usuario`,`telefone`,`tipo`,`frota`,`data_pedido`) VALUES ('$empresa','$usuario','$telefone','$tipo','$frota',NOW());";

// print_r($sql);exit;

// $result = mysqli_query($conexao, $sql);

if($conexao->query($sql) === TRUE){
    $_SESSION['all_right'] = true;
}

$conexao->close();

header('Location: Form.php');
exit;

?>