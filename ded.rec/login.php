
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="verificacaoLogin.php" method="post" >
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="user" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <i class="bi bi-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                        <input type="password" name="senha" id="senha" required>
                        <label for="">Senha</label>
                    </div>
                    <button class="login">Login</button>
                    
                </form>
                <a href="cadastro.html"><button class="registrar">Registrar</button></a>
            </div>
        </div>
    </section>
    <script src="senha.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>