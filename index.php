<html>
    <head>
        <title>Tela de Login</title>

    </head>

	<style>
    body{
        margin: 0;
        padding: 0;
    }
    .fundo{
        width: 100%;
        height:953px;
        background-image: url("fundo.jfif");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .cadastro{
    background-color:white;
    opacity: 0.7;
    border:solid 2px black;
    border-radius:10px;
    width:400px;
    height:18%; 
    }
    .login{
    background-color:white;
    opacity: 0.7;
    border:solid 2px black;
    border-radius:10px;
    width:400px;
    height:15%; 
    }
    .btnFut{
        border:none;
        height:32px;
        width:75px;
        font-weight:bold;
        border-radius:0 3px 3px 0;
        background:#6A5ACD;  
        top: 50%;
        color: white;
    }
</style>
<body>
<div class="fundo">
	<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
		<div class="cadastro">
            <br>
			<form method="post" action="cadastrarUsuario.php" id="formlogin" name="formlogin" >
				<label>Digite seu e-mail: </label>
				<input type="text" name="email" id="email" size="20"><br />
                <br>
				<label>Digite sua senha: </label>
				<input type="password" name="senha" id="senha" size="20"><br />
				
				<br>
				<center>
					<input type="submit" value="Cadastrar" class="btnFut" />
				</center>
			</form>
            <a href= "futebol.php">Página do time</a>
		</div>
        <br>
        <br>
        <br>
        <div class="login">
            <br>
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin" >
				<label>Digite seu e-mail: </label>
				<input type="text" name="emailLogin" id="emailLogin" size="20"><br />
                <br>
				<label>Digite sua senha: </label>
				<input type="password" name="senhaLogin" id="senhaLogin" size="20"><br />
				<br>
				<center>
					<input type="submit" value="Logar" class="btnFut" />
				</center>
			</form>
		</div>
	<center>
</div>
</body>
</html>
