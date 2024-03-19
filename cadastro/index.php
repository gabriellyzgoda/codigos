<html>
    <head>
        <title>Login</title>

    </head>

	<style>
		body{
        margin: 0;
        padding: 0;
    	}
        .botao{
            background-color: black;
            width: 100px;
            text-align: center;
            border-radius: 16px;
            font-size: 14px;
            padding: 11px;
            text-decoration: none;
            color: white;
            font-family: 'Montserrat', sans-serif;
			transition: .3s ease-in-out;
			opacity: 0.7;
			-webkit-transition: .3s ease-in-out;
    		-moz-transition: .3s ease-in-out;
    		-ms-transition: .3s ease-in-out;
    		-o-transition: .3s ease-in-out;
    		transition: .3s ease-in-out;
   			 opacity: 0.9;
        }
		.botao:hover{
			opacity: 0.5;
		}
		.fundo{
			width: 100%;
        	height:1080px;
			background-color: #E6E6FA;
			background-size: cover;
        	background-repeat: no-repeat;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.titulo{
			color: #DA70D6;
            font-family: 'Montserrat', sans-serif;
			font-size: 50px;
			font-weight: bold; 
		}
		.login{
    	background-color:white;
    	border:solid 2px black;
    	border-radius:10px;
    	width:400px;
    	height:22%; 
		color: #DA70D6;
    	}
	</style>
	
<body>
    <center>
	<div class="fundo">
	<br>
		<p class="titulo"> Faça o Login </p>
		<div class="login">
            <br>
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin" >
				<label>Nome: </label>
				<input type="text" name="nomeUsuario" id="nomeUsuario" size="20"><br />
                <br>				
				<label>Senha: </label>
				<input type="password" name="senha" id="senha" size="20">
				<br>
                <br>
					<input type="submit" value="Logar" class="botao" />
			</form>
		<br>
		<a class="botao" href="cadastro.php">Cadastrar</a>
		</div>
		</div>
	</center>
</body>
</html>
