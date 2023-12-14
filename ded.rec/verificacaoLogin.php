<?php
    require_once("conexao.php");
    session_start();

    $email = $conn->real_escape_string($_POST["email"]);
    $senha = $_POST["senha"];
    $usuario = $_POST["usuario"];

    $sql = "SELECT * 
            from tbusuario 
            where email = '$email' and
            senha = '$senha'";

            

    $resultado = $conn->query($sql);
    
    if($resultado->num_rows > 0){
        $dados_usuario = $resultado->fetch_assoc();
        
        $_SESSION["usuario"] = $dados_usuario["usuario"];
        $_SESSION["nome"] = $dados_usuario["nome"];
        $_SESSION["id"] = $dados_usuario["idusuario"];
        header("location: PIouvinte.php");
        
    }else{
        ?>
        echo  "<script>alert('Email ou Senha incorreta!');</script>";
        <script>window.history.back();</script>
        <?php
    }
    
   
?>

