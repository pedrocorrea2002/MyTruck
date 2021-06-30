<?php 
session_start();
include('conexao.php');

$id_usuario = $_SESSION['usuario'];
$pedido_id = mysqli_real_escape_string($conexao, ($_POST['id_pedido']));

$sql = "SELECT * FROM pedidos where `pedido_id` = '$pedido_id' AND `usuario` = '$id_usuario';";

$result = mysqli_query($conexao, $sql);

$row = mysqli_num_rows($result);

if($row >= 1) {
    $sql = "DELETE FROM pedidos where `pedido_id` = '$pedido_id' AND `usuario` = '$id_usuario';";
    $result = mysqli_query($conexao, $sql);

	header('Location: Table.php');
	exit();
} else {
	$_SESSION['nao_encontrado'] = true;
	header('Location: Table.php');
	exit();
}

?>