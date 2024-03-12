<?php
			
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "";
			$database = "usuarios";
		
			$conexao = new mysqli($hostname, $user, $password, $database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres especiais (SQL Inject)
				$senha = $conexao -> real_escape_string($_POST['senha']);
				$email = $conexao -> real_escape_string($_POST['email']);

                $sql="INSERT INTO `login`
							(`email`, `senha`)
						VALUES
							('".$email."', '".hash('sha256',$senha)."')";
							
				
				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: index.php', true, 301);
				exit();
			}
		?>