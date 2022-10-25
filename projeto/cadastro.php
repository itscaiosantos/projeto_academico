<?php 


  if (isset($_GET['submit'])) 
  {
      echo 'ryjytytgfyjhtgjg';
      include_once('config.php');

      $nome = $_GET['nome'];
      $senha = $_GET['senha'];
      $email = $_GET['email'];
      $telefone = $_GET['telefone'];
      $genero = $_GET['genero'];
      $data_nascimento = $_GET['data_nascimento'];
      $estado = $_GET['estado'];
      $cidade = $_GET['cidade'];
      $endereco = $_GET['endereco'];

      $result = $pdo->query("INSERT INTO usuarios(nome, senha, email, telefone, genero, data_nascimento, estado, cidade, endereco) VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nascimento','$estado','$cidade','$endereco')");


  }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div>, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, purple, cyan);
        }
        .box{
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            border-radius: 15px;
            color: white;
            width: 20%;

        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color: white;
        }
        .inputBox{
            position: relative;

        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition:  .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
            
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

        }

        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));

        }


    </style>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="get">
            <fieldset>
            <legend><b>Formulário do Cliente</b></legend><br>

            <div class="inputBox">
                <input type="text" name="nome" id="nome"class="inputUser" required>
                <label for="name" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha"class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</labe>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>

            <label for="data_nascimento"><b>Data Nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required> 
            <br><br>

            <div class="inputBox">
                <input type="text" name="cidade" id="cidade"class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado"class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco"class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label><br><br>
                
                <input type="submit" name="submit" id="submit">
            </div>
            <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>