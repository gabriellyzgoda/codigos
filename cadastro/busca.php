<!DOCTYPE html>

<html>
<head>
    <title>Pesquisa</title>
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
<br>
<br>
<div class="fut">
   
        <?php
			
        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "rede";
    
        $conexao = new mysqli($hostname, $user, $password, $database);

        if ($conexao -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conexao -> connect_error;
            exit();
        } else {
            // Evita caracteres epsciais (SQL Inject)
            $nomeUsuario = $conexao -> real_escape_string($_POST['busca']);

            $sql="SELECT *
                    FROM `usuario`
                    WHERE `nomeUsuario`='".$nomeUsuario."';";

            $resultado = $conexao->query($sql);
            
            if($resultado->num_rows != 0)
            {
                $row = $resultado -> fetch_array();
                echo 'ID: ' . $row['idUsuario'];
                echo '<br>';
                echo 'Nome: ' . $row['nomeUsuario'];
                echo '<br>';
                echo 'Senha: ' . $row['senha'];
                $conexao -> close();
                echo '<br>';
                echo '<a href="site.php">Voltar</a>';
                
                exit();
            } else {
                
                $conexao -> close();
                echo 'Nenhum registro encontrado.';
                echo '<a href="site.php">Voltar</a>';
            }
        }
    ?>
        ?>
<a href= "site.php">Voltar para o site</a>
</div>
</div>
</center>
</body>
</html>