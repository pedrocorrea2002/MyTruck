<?php
session_start();
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
    <link rel="stylesheet" type="text/css" href="src/css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <div class="box">

                        <h3 class="title">Faça seu cadastro e peça já o seu</h3>

                        <?php
                        if(isset($_SESSION['status_cadastro'])):
                        ?> 
                        <div class="notification is-success">
                        <p>Cadastro efetuado!</p>
                        <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                        </div>
                        <?php
                        endif;
                        unset($_SESSION['status_cadastro']);
                        ?>

                        <?php
                        if(isset($_SESSION['usuario_existe'])):
                        ?>
                        <div class="notification is-info">
                            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                        <?php
                        endif;
                        unset($_SESSION['usuario_existe']);
                        ?>
                    
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="email" class="input is-large" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        
                        </form>

                        <div class="account-container">

                            <h3 class="account-text">Caso já possui a sua conta</h3>
                            <h3 class="account-text-button"><a href="index.php">clique aqui</h3>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>