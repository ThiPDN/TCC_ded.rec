<?php
require_once("conexao.php");

if (isset($_POST["nome"])) {
    $idusuario = $_GET["idusuario"];
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $email = $conn->real_escape_string($_POST["email"]);
    $senha = $_POST["senha"];
    $data = $_POST["dataN"];

    $sql = "UPDATE tbusuario 
            SET nome = '$nome',
            usuario = '$usuario',
            email = '$email',
            senha = '$senha',
            data = '$data'
            WHERE idusuario = $idusuario";
    
    if($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Perfil atualizado com sucesso!");
            window.location = "ouvinte.php";
            </script>

            <?php

    }else{
         ?>
            <script>
                alert("Erro ao atualizar perfil ):");
               // window.history.back();
            </script>    
         <?php
    }


}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">  
  <link rel="stylesheet" href="editar.css">
  <title>Editar</title>
</head>
<body>
    <?php
        if(isset($_GET["idusuario"])){
            $idusuario = $_GET["idusuario"];
            $sql = "SELECT * FROM tbusuario WHERE idusuario = $idusuario";
            $consulta = $conn->query($sql);
            $usuario = $consulta->fetch_assoc();
         
        }

    ?>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="editar.php?idusuario=<?php echo $_GET['idusuario'] ?>" method="post" >
                    <h2>Editar Perfil</h2>
                    <div class="inputbox">
                        <ion-icon name="people-outline"></ion-icon>
                        <input type="name" name="nome" value="<?php echo $usuario["nome"] ?>" required>
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="people-outline"></ion-icon>
                        <input type="user" name="usuario" value="<?php echo $usuario["usuario"] ?>" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="<?php echo $usuario["email"] ?>" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <i class="bi bi-eye" id="btn-senha" onclick="mostrarSenha()"></i> 
                        <input type="password" name="senha" id="senha" value="<?php echo $usuario["senha"] ?>" required>
                        
                        <label for="">Senha</label>
                        
                    </div>
                    <div class="inputbox">
                        <ion-icon name="date-outline"></ion-icon>
                        <input type="date" name="dataN" value="<?php echo $usuario["data"] ?>" required>
                        <label for=""></label>
                    </div>
                       
                        
                    
                    <button id="salvar">Salvar</button>
                    
                </form>
                <button id="cancelar" onclick="voltar()">Cancelar</button>
            </div>
        </div>
    </section>
    <script src="cancelar.js"></script>
    <script src="senha.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>