<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 1</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .fundo {
        width: 100%;
        height:965px;
        background-image: url("fundo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .texto{
        font-size: 70px;
        color: black;
    }
    .botao{
        display: inline-block;
        padding: .75rem 1.25rem;
        border-radius: 10px;
        color: black;
        background-color: #FOFFFF;
        text-transform: uppercase;
        font-size: 1rem;
        letter-spacing: .15rem;
        transition: all .3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
</style>
<body>
<div class="fundo">
    <center>
    <br>
    <p class="texto"> Exercício 1</p>
    Pesquisar as informações:
    <input type="submit" value="pesquisar" class='botao' />
    <form method="post" action="processamento.php" id="formlogin" name="formlogin" >
	Digite o nome do time:
    <input type="text" name="nome">
    <br>
    Digite o nome do técnico:
    <input type="text" name="tecnico">
    <br>
    Digite a cidade onde surgiu:
    <input type="text" name="cidade">
    <input type="submit" value="pesquisar" class='botao' />
	<br>
	</form>
    <?php
	?>
    <br>
    <br>
    <a href= "index.php">Voltar</a>
    <center>
</div>
</body>
</html>