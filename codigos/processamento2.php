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
        $database = "alunos";
    
        $conexao = new mysqli($hostname, $user, $password, $database);

        if ($conexao -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conexao -> connect_error;
            exit();
        } else {
            // Evita caracteres epsciais (SQL Inject)
            $nome = $conexao -> real_escape_string($_POST['nome']);

            $sql="SELECT *
                    FROM `cadastro`
                    WHERE `nome`='".$nome."';";

            $resultado = $conexao->query($sql);
            
            if($resultado->num_rows != 0)
            {
                $row = $resultado -> fetch_array();
                echo 'ID: ' . $row['id'];
                echo '<br>';
                echo 'Nome: ' . $row['nome'];
                echo '<br>';
                echo 'Técnico: ' . $row['tecnico'];
                echo '<br>';
                echo 'Cidade ' . $row['cidade'];
                $conexao -> close();
                echo '<br>';
                echo '<a href="futebol.php">Voltar</a>';
                
                exit();
            } else {
                
                $conexao -> close();
                echo 'Nenhum registro encontrado.';
                echo '<a href="futebol.php">Voltar</a>';
            }
        }
    ?>
        ?>
<a href= "futebol.php">Voltar para o cadastro de time</a>
</div>
</div>
</center>
</body>
</html>