<?php
session_start();
include('verifica_login.php');
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

                <h3 class="option"><a href="Form.php">Fazer pedido</a></h3>

                <h3 class="option"><a href="Table.php">Meus pedidos</a></h3>
        
                <h3 class="option"><a href="logout.php">Sair</a></h3>
                
            </div>
            
        </div>

        <h3 class="welcome">Olá, <?php echo $_SESSION['nome'];?>.</h3>
        <br>
    </div>

    <div class="content">

        <div class="info-container">

            <h3 class="info-title">Atenção!!!</h3>

            <h3 class="info"> -Para fazer seu pedido, clique em FAZER PEDIDO e descubra <br> já qual o melhor tipo de caminhão para sua empresa.</h3>

            <h3 class="info"> -Se já fez o seu pedido, clique em MEUS PEDIDOS para <br> acompanhar o andamento.</h3>
        </div>
        

    </div>

</body>

</html>