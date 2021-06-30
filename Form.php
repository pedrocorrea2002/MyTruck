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

                <h3 class="option"><a href="Painel.php">Home</a></h3>

                <h3 class="option"><a href="Table.php">Meus pedidos</a></h3>
        
                <h3 class="option"><a href="logout.php">Sair</a></h3>
                
            </div>
            
        </div>

        <h3 class="welcome">Olá, <?php echo $_SESSION['nome'];?>. Como podemos ajudá-lo hoje?</h3>
        <br>
    </div>

    <div class="content">

        <h3 class="form_info"> Preencha os campos com as informações do seu pedido!</h3>


        <?php
        if(isset($_SESSION['all_right'])):
        ?> 
            <div class="all_right_container">
                <p class="all_right_text">Pedido efetuado com sucesso!<br> O orçamento do seu pedido chegara no seu e-mail em até 1 hora!</p>
            </div>
        <?php
        endif;
        unset($_SESSION['all_right']);
        ?>


        <?php
        if(isset($_SESSION['frota_zero'])):
        ?> 
            <div class="not_found">
                <p class="not_found_text">ERRO: A valor da frota deve ser maior que 0!</p>
            </div>
        <?php
        endif;
        unset($_SESSION['frota_zero']);
        ?>

        
        <form action="Pedir.php" method="post">
            <div>
                <table border=1>
                    <tr>
                        <label for="fname"> Nome da empresa: </label>
                        <input type="text" name="empresa"><br>
                        <br>

                        <label for="fname"> Telefone para contato: </label>
                        <input type="text" name="telefone"><br>
                        <br>

                        <label for="fname"> Tipo: </label><br>

                        <div class="truck-types">

                            <div class="truck-container">

                                <img src="./src/Images/Basculante.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="basculante" value="basculante">
                                <label class="truck_type" for="fname"> Basculante</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/CarregaTudo.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="carrega-tudo" value="carrega-tudo">
                                <label class="truck_type" for="fname"> Carrega-Tudo</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/Florestal.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="florestal" value="florestal">
                                <label class="truck_type" for="fname"> Florestal</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/Furgão.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="furgao" value="furgao">
                                <label class="truck_type" for="fname"> Furgão</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/Graneleiro.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="graneleiro" value="graneleiro">
                                <label class="truck_type" for="fname"> Graneleiro</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/Porta-Conteiner.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="porta-conteiner" value="porta-container">
                                <label class="truck_type" for="fname"> Porta-Container</label>

                            </div>

                            <div class="truck-container">

                                <img src="./src/Images/Tanque.jpg"
                                alt="Logo" 
                                class="truck-logo"/><br>

                                <input type="radio" name="tipo" id="tanque" value="tanque">
                                <label class="truck_type" for="fname"> Tanque</label>
                            
                            </div>

                        </div>

                        <label for="fname"> Frota: </label>
                        <input type="number" name="frota" id="frota"><br>

                        <input class="submit-button" type="submit" name='insert' value="Efetuar pedido"><br>
                    </tr>
                </table>
            </div>
        </form>

    </div>

</body>

</html>