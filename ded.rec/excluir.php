<?php
include_once("conexao.php");

if(isset($_GET["idusuario"])) {
    $idusuario = $_GET["idusuario"];

    $sql = "DELETE FROM tbusuario WHERE idusuario = $idusuario";

    if($conn->query($sql) === TRUE){
        ?>
        <script>
            alert("Conta excluida com sucesso.");
            window.location = "login.php";
        </script>

         <?php   
    }else{
    ?>
        <script>
            alert("Erro ao excluir o registro.");
            window.history.back();
        </script>


        <?php
    }


}

?>