<?php 
// session_start();
include('conexao.php');

$id_usuario = $_SESSION['usuario'];

$sql = "SELECT `pedido_id`,`tipo`,`frota`,`data_pedido` FROM pedidos
WHERE `usuario` = '$id_usuario';";

$pedidos = mysqli_query($conexao, $sql);

?>