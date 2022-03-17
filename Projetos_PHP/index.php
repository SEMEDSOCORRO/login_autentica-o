<?php
session_start();
//Gerar senha
//echo password_hash("123456", PASSWORD_DEFAULT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Sistema de Login</title>
</head>

<body>
    <div class="container text-center">
        <!-- Substituir o botão pelos dados do usuário 
        <div id="dados-usuario">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Acessar
            </button>
        </div>-->

        <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            echo "Bem vindo " . $_SESSION['nome'] . "<br>";
            echo "<a href='sair'>Sair</a><br>";
        }else{
            ?>    
            <div id='dados-usuario'>
                <div class="container" id="loginModal" tabindex="-1">
                    <div class="container-content">
                        <div class="container-body">
                            <form id="login-usuario-form">
                                <span id="msgAlertErroLogin"></span>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Usuário:</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Digite o usuário">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="col-form-label">Senha:</label>
                                    <input type="password" name="senha" class="form-control" id="senha" autocomplete="on" placeholder="Digite a senha">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            <?php
        }
        ?>
        
        <div class="m-5">
            <span id="msgAlert"></span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>