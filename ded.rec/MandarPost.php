<?php
    require_once("conexao.php");
    session_start();
    
    
    $nomealbum = $_POST["nomealbum"];
    $nomemusica = $_POST["nomemusica"];
    $estilo = $_POST["estilo"];
    $letra = $_POST["letra"];
    $musica = $_POST["music__input"];
    $capa = $_POST["picture__input"];

   

    $sql = "INSERT INTO tbpost (NomeAlbum, NomeMusica, Estilo, Capa, Musica, Letra) VALUES 
        ('$nomealbum','$nomemusica','$estilo','$capa','$musica', '$letra')";

     

    if($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Album postado com sucesso!");
            window.location = "postar.php";
            </script>

            <?php

    }else{
         ?>
            <script>
                alert("Erro ao postar ):");
                window.history.back();
            </script>    
         <?php
    }
    
    
   
?>