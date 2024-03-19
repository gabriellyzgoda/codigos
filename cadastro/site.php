<html>
    <head>
        <title>.: Meu lindo site :.</title>
    
		<style>
		body{
        margin: 0;
        padding: 0;
    	}

        .botao{
            background-color: black;
            width: 120px;
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
		position: center;
    	width:400px;
    	height:27%; 
		color: #DA70D6;
    	}
		</style>
	</head>
	
    <body>
	<div class="fundo">
		<div class="login">
		<center>
		<?php
			// iniciar uma sessão
			session_start();

			if (empty($_SESSION['nomeUsuario'])){
				// Logado??? Não?? Tchau, bb.
				header('Location: sair.php');
				exit();
			} else {
				echo
					'<tr>
					<br>
						<td width=50%>
							<span class="corBranca">Bem vindo, '.$_SESSION['nomeUsuario'].'</span>
							<br>
							<br>
							<a class="botao" href="perfil.php">Perfil</a>
						</td>
						<br>
						<br>
						<td width=50%>
							<form method="post" action="busca.php" id="formBusca" name="formBusca" >
								<span style="font-size:20px;">BUSCAR:</span><br>
								<input type="text" name="busca" id="busca">
								<br>
								<br>
								<input class="botao" type="submit" value="BUSCAR"/>
								<br>
							</form>
						</td>
						<br>
						</tr>
						<tr>
							<td colspan=2>
								<center>
									Enviar mensagem:
									Aqui vai o texto da mensagem.

							</td>
					</tr>';
			}
		?>
		<br>
		<a href="sair.php">Sair</a>
		<center>
		</div>
		</div>
	</body>
</html>
