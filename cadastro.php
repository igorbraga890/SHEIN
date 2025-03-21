<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SHEIN | CADASTRO</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        header{
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
        .sign-button{
            background-color: rgba(255, 255, 255, 0);

            border: none;
            border-radius: 3px;

            width: 420px;

            font-size: 15px;

            cursor: pointer;
        }
    </style>
    

</head>
<body>
    <header>
        <h1>SHEIN</h1>
    </header>
    <main>
        <form method="POST">
            <h1>cadastre-se ja</h1><br><br>

            <label>Nome</label><br>
            <input type="text" name="campo1" placeholder="digite seu nome"><br><br>

            <label>Sobrenome</label><br>
            <input type="text" name="campo2" placeholder="coloque seu sobrenome"><br><br>

            <label>Telefone</label><br>
            <input type="tel" name="campo3" placeholder="coloque seu telefone"><br><br>

            <label>Cidade</label><br>
            <input type="text" name="campo4" placeholder="coloque sua cidade"><br><br>
    
            <label>Email</label><br>
            <input type="email" name="campo5" placeholder="coloque seu email"><br><br>
    
            <label>Senha</label><br>
            <input type="password" name="campo6" placeholder="crie uma senha"><br><br>
    
            <input type="submit" value="Enviar" class="login-button"><br><br>
            
        </form>
        <a href="index.php"><button class="sign-button" type="home">Já tenho um cadastro</button></a>
    </main>

    <?php
         //Definir a conexão com o banco

         $servidor = "localhost";
         $usuario = "root";
         $senha = "";
         $dbnome = "DBShein";
         //Criando a conexão
 
         $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);
 
         //verificar se o formas foi enviado pelo metodo POST
 
         if($_SERVER["REQUEST_METHOD"] == "POST"){
             $nome = $_POST["campo1"];
             $sobrenome = $_POST["campo2"];
             $telefone = $_POST["campo3"];
             $cidade = $_POST["campo4"];
             $email = $_POST["campo5"];
             $senha = $_POST["campo6"];
             $adm = "nao";
 
             //Definir o envio - POST
 
             $comando_banco = "INSERT INTO pessoas (Nome,Sobrenome,Telefone,Cidade, Email, Senha, ADM) VALUES ('$nome','$sobrenome','$telefone','$cidade', '$email', '$senha', '$adm')";
 
             //verificação de envio
 
             if(mysqli_query($conexao, $comando_banco)){
                 echo "Registro enviado com sucesso";
             }else{
                 echo "Deu ruim parça";
             }
         }
    ?>
</body>
</html>