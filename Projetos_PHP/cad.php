<?php
session_start();

if(!isset($_SESSION['id'], $_SESSION['nome'])){
	header("Location: index.php");
} else {
	?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="Styles/componentes.css">
    <link rel="stylesheet" href="Styles/cad.css">
    <title> Sistema de login </title>
</head>

<body>

    <?php include_once 'Components/header.php' ?>

    <div class="Supra_Body">

        <div class='Corpo_Itens' id='dados-usuario' tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
            
            <h1>Cadastro de gestores</h1>
            <div class="Campo_Cadastro">
                <form id="cad-usuario-form">
                    <span id="msgAlertErroCad"></span>

                    <label for="cadnome">
                        <h3>Nome Completo:</h3>
                        <input 
                            type="text" 
                            name="cadnome" 
                            class="Campo_Input" 
                            id="cadnome" 
                            placeholder="Digite o nome completo"
                        >
                    </label>

                    <label for="cademail">
                        <h3>E-mail:</h3>
                        <input 
                            type="text" 
                            name="cademail" 
                            class="Campo_Input" 
                            id="cademail" 
                            placeholder="Digite o seu e-mail de trabalho"
                        >
                    </label>

                    <label for="cadsenha">
                        <h3>Senha:</h3>
                        <input 
                            type="password" 
                            name="cadsenha" 
                            class="Campo_Input" 
                            id="cadsenha" 
                            placeholder="Digite a senha"
                        >
                    </label>

                    <div class="btn">
                        <!-- <input type="submit" class="btn btn-outline-success bt-sm" id="cad-usuario-btn" value="Cadastrar"> -->
                        <button 
                            type="submit" 
                            id="cad-usuario-btn" 
                            value="Cadastrar" 
                        >
                        
                        Cadastrar <img src="img/button.svg" alt="butao">
                    
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="m-5">
            <span id="msgAlert"></span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom2.js"></script>
</body>

</html>

<?php 
}
?>