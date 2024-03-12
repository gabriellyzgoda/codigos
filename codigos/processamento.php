<!DOCTYPE html>

<html>
<head>
    <title>Processamento</title>
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
    .fut{
    background-color:white;
    opacity: 0.7;
    border:solid 2px black;
    border-radius:10px;
    width:500px;
    height:50%; 
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
<div class="fut">
    
        <?php
			
        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "alunos";
    
        $conexao = new mysqli($hostname, $user, $password, $database);

        if ($conexao -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conexao -> connect_error;
            exit();
        } else {
            // Evita caracteres especiais (SQL Inject)
            $nome = $conexao -> real_escape_string($_POST['nome']);
            $tecnico = $conexao -> real_escape_string($_POST['tecnico']);
            $cidade = $conexao -> real_escape_string($_POST['cidade']);

            $sql="INSERT INTO `cadastro`
                        (`nome`, `tecnico`, `cidade`)
                    VALUES
                        ('".$nome."', '".$tecnico."', '".$cidade."')";

            $resultado = $conexao->query($sql);
            
            $conexao -> close();
            echo 'Cadastrado com sucesso.';
            echo '<a href="futebol.php">Voltar</a>';
            exit();
        }
        ?>
<a href= "futebol.php">Voltar para o cadastro de time</a>
</div>
</div>
</center>
</body>
</html>