<html>	
    <body>
		<?php
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "";
			$database = "rede";
		
			$conexao = new mysqli($hostname,$user,$password,$database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres epsciais (SQL Inject)
				$nomeUsuario = $conexao -> real_escape_string($_POST['nomeUsuario']);
				$senha = $conexao -> real_escape_string($_POST['senha']);

				$sql = "INSERT INTO `rede`.`usuario`
							(`nomeUsuario`, `senha`, `dataCadastro`, `ativo`)
						VALUES
							('".$nomeUsuario."', '".$senha."', '".date('Y-m-d')."', 's');";

				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: index.php', true, 301);
			}
		?>
	</body>
</html>
