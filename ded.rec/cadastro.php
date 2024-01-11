<?php
    require_once("conexao.php");
    session_start();
    
    
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $email = $conn->real_escape_string($_POST["email"]);
    $senha = $_POST["senha"];
    $data = $_POST["dataN"];
  

   



    $sql = "INSERT INTO tbusuario (nome, usuario, email, senha, data) VALUES 
        ('$nome','$usuario','$email','$senha','$data')";

     

    if($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Conta criada com sucesso!");
            window.location = "login.php";
            </script>

            <?php

    }else{
         ?>
            <script>
                alert("Erro ao registrar ):");
                window.history.back();
            </script>    
         <?php
    }
    
    
   
?>