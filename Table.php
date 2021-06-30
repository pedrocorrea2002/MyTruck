<?php
session_start();
include('verifica_login.php');
require_once 'TableCode.php';
$_SESSION['alterar'] = false;
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyTruck</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="src/css/painel.css">
</head>

<body>

    <div class="super-header">

        <div class="header">

            <div class="logo-container">
                
                <h3 class="logo-text">MyTruck</h3>

                <img src="./src/Images/MyTruck.png"
                alt="Logo" 
                class="logo-image"/>
            </div>

            <div class="options-container">

                <h3 class="option"><a href="Painel.php">Home</a></h3>

                <h3 class="option"><a href="Form.php">Fazer pedido</a></h3>
        
                <h3 class="option"><a href="logout.php">Sair</a></h3>
                
            </div>
            
        </div>

        <h3 class="welcome">Olá, <?php echo $_SESSION['nome'];?>. Aqui estão os seus pedidos!</h3>
        <br>
    </div>

    <div class="content">
        
        <form>
        <table border=1>
            <tr>
               <th colspan="13>"> <!-- TÍTULO -->
                  Pedidos
               </th>
            </tr>
            <tr>
               <td>ID</td>
               <td>Tipo</td>
               <td>Frota</td>
               <td>Data do pedido</td>
            </tr>
            <?php
               foreach($pedidos as $pedido) {
            ?>
                <tr>
                    <td><?php echo $pedido['pedido_id']; ?></td>
                    <td><?php echo $pedido['tipo']; ?></td>
                    <td><?php echo $pedido['frota']; ?></td>
                    <td><?php echo $pedido['data_pedido']; ?></td>
                </tr>
            <?php
               }
            ?>
        </table>
        </form>
        <br>

        <form action="delete.php" method="post">
            <div>
                <table border=1>
                    <tr>
                        <br>
                        <label for="fname"> ID do pedido: </label>
                        <input type="number" name="id_pedido" id="id_pedido"><br>

                        <input class="submit-button" type="submit" name='excluir' value="Cancelar pedido"><br>
                    </tr>
                </table>
            </div>
        </form>
        <br>


        
        <?php
        if(isset($_SESSION['nao_encontrado'])):
        ?> 
            <div class="not_found">
                <p class="not_found_text">ERRO: Pedido não encontrado, verifique o ID digitado</p>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_encontrado']);
        ?>
        

    </div>

</body>

</html>