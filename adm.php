<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHEIN | ADMINISTRADOR</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header{
            width: 100%;
            height: 80px;

            background-color: black;
            color: white;

            font-size: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;
        }
        main{
            display: flex;
            flex-direction: column;
            align-items: center;

            margin-top: 50px;

            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }
        input, button{
            width: 400px;
            height: 40px;

        }
        input{
            padding-left: 20px;
            font-size: 15px;
        }
        .login-button{
            background-color: black;
            color: white;

            border: none;
            border-radius: 3px;

            width: 420px;

            font-size: 20px;

            cursor: pointer;
        }
        .infos{
            width: 600px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SHEIN</h1>
    </header>
    <main>
        <form method="GET">
            <label>Digite o ID para excluir</label><br>
            <input type="text" name="id"><br><br>
    
            <input type="submit" value="Enviar" class="login-button"><br><br><br>
        </form>  
    </main>

    <?php
         $servidor = "localhost";
         $usuario = "root";
         $senha = "";
         $dbnome = "DBShein";
 
         //Criando a conexão
 
         $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

          //verifica se ouve exclusao e executa
        if(isset($_GET['id'])) {
            mysqli_query($conexao, "DELETE FROM pessoas WHERE id = {$_GET['id']}");
        }
 
         //definir a consulta sql - GET
 
         $comando_banco = "SELECT * FROM pessoas";
 
         //executa a consulta e armazena os resultados
 
         $resultado = mysqli_query($conexao, $comando_banco);
 
         //percorrer a tabela
 
        echo "<div class = 'infos'>";
         while($linha_registro = mysqli_fetch_assoc($resultado)) {
             //imprimindo o valor nome
             echo "<p>Nome: " .$linha_registro['Nome']."</p>";
 
             echo "<p>Sobrenome: " .$linha_registro['Sobrenome']."</p>";

             echo "<p>Telefone: " .$linha_registro['Telefone']."</p>";

             echo "<p>Cidade: " .$linha_registro['Cidade']."</p>";
             //imprimir o email
 
             echo "<p>Email: " .$linha_registro['Email']."</p>";

             //imprimindo senha

             echo "<p>Senha: " .$linha_registro['Senha']."</p>";
 
             echo "<hr>";
         }
         echo "</div>";
 
         //fechar a conexao
 
         mysqli_close($conexao);
    ?>
</body>
</html>