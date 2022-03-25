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
    <link rel="shortcut icon" href="imagens/favicon.ico">
    <!-- Stylesheet Links -->
    <link rel="stylesheet" href="Styles/style_index.css">
    <link rel="stylesheet" href="Styles/componentes.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>ID Socorro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500&display=swap" rel="stylesheet"> 

</head>

<body>
    <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            include_once 'Components/header.php';
        } else {
            include_once 'Components/header_notloged.php';
        }
    ?>

    <div class="Supra_Body">
        <!-- Substituir o botão pelos dados do usuário 
        <div id="dados-usuario">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Acessar
            </button>
            <h1>Faça seu login para ter acesso!</h1>
    
            <h2>ID SOCORRO</h2>
        </div>-->

        <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            echo "Bem vindo " . $_SESSION['nome'] . "<br>";
            echo "<a href='crud.php'>CRUD</a><br>";
        }else{
            ?>
            <div class="Corpo_Conteudo" id='dados-usuario'>
                
                <div class="Texto_Titulo">
                    <h1>Minha Escola</h1>
                    <h2>Minha Escola</h2>
                </div>
                
                <div class="Corpo_Itens" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="Campo_Img">
                        <img class="Img_img" src="img/tela_login.png" alt="img">
                    </div>
                    
                    <div class="Separador"></div>
                    
                    <div class="Campo_Login">
                        <form id="login-usuario-form">
                            
                            
                                <label for="email">
                                    <h3>CPF / EMAIL:</h3>
                                    <input 
                                        class="Campo_Input" 
                                        type="text" 
                                        name="email" 
                                        
                                        id="email" 
                                        placeholder="Digite o usuário"
                                    >
                                </label>
                            
                            
                                <label for="senha">
                                    <h3>SENHA:</h3>
                                    <input 
                                        class="Campo_Input"
                                        type="password" 
                                        name="senha" 
                                        
                                        id="senha" 
                                        autocomplete="on" 
                                        placeholder="Digite a senha"
                                    >
                                </label>
                            
                                <div class="btn">
                                    <!-- <input type="submit" id="login-usuario-btn" value="Acessar"> -->
                                    <button 
                                        type="submit" 
                                        id="login-usuario-btn" 
                                        value="Acessar" 
                                    >
                                    
                                    Entrar <img src="img/button.svg" alt="butao">
                                
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>

                <div class="Texto_Titulo">
                    <h1 id="msgAlertErroLogin"></h1>
                    <h2 id="msgAlertErroLogin"></h2>
                </div>
                
            </div>
            <?php
        }

        ?>
        <div class="m-5">
            <span id="msgAlert"></span>
        </div>
    </div>

    <?php include_once 'Components/footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>