<!DOCTYPE html>

<html>
<head>
    <title>Futebol</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .fundo{
        width: 100%;
        height:641px;
        background-image: url("fut.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pesquisa{
    background-color:#B0C4DE;
    border:solid 2px #6A5ACD;
    border-radius:10px;
    width:25%;
    height:32px;
    }
    .btnBusca{
        border:none;
        position:absolute;
        left: 57%;
        height:32px;
        width:75px;
        font-weight:bold;
        border-radius:0 3px 3px 0;
        background:#6A5ACD;  
    }
    .txtBusca{
    float:left;
    background-color:transparent;
    padding-left:5px;
    font-size:15px;
    border:none;
    height:32px;
    width:260px;
    color: black;
    }
    .fut{
    background-color:white;
    opacity: 0.7;
    border:solid 2px black;
    border-radius:10px;
    width:500px;
    height:50%; 
    }
    .btnFut{
        border:none;
        height:32px;
        width:75px;
        font-weight:bold;
        border-radius:0 3px 3px 0;
        background:#6A5ACD;  
    }
</style>
<body>
<div class="fundo">
<center>
    <br>
    <br>
<div class="pesquisa">
<form method="post" action="processamento.php" id="formlogin" name="formlogin" >
    <input type="text" class="txtBusca" placeholder="Pesquise o que precisa:"/>
    <button class="btnBusca">Buscar</button>
    <br>
</form>
</div>
<br>
<br>
<br>
<br>
<div class="fut">
    <form method="post" action="processamento.php" id="formlogin" name="formlogin" >
    <br>
	Digite o nome do time:
    <input type="text" name="nome">
    <br>
    <br>
    Digite o nome do técnico:
    <input type="text" name="tecnico">
    <br>
    <br>
    Digite a cidade onde surgiu:
    <input type="text" name="cidade">
	<br>
    <br>
    <input type='submit' value='Cadastrar' class="btnFut">
    <br>
    <br>
	</form>
        <?php
        ?>
</div>
</div>
</center>
</body>
</html>