<?php
require_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postar Álbum</title>
    <link rel="stylesheet" href="postar.css">
</head>
<body>

  <div class="sidebar">
    <div class="logo">
      <a href="#">
        <img src="https://lh3.googleusercontent.com/pw/AIL4fc_sp4FFG0dVvX27ybSQ0yeSwTGkrUZChjuK2Inyod-gxTXvIa6mywpddAhzWcGlGQrOqZuE5iDT5h0LdLA-fMyHTJMZyD9tt2w7zzRr03XH8BbH46OjvoZ5OKPI_cMwjsqi5PFU0EcQGWBAzu2eadm7hf1UFnBZ3BasY11WHyJ1rMzAtXwvDmty_J4-u9LC1DAuEyVhovKwwIQm9byE_4G1NHSNENnngE26OQ-7LQXKkO4dul9uqfJEVQjGZ0XkJ_RXz4Z0D-SuMU416X9_5oW-iGSki6MKzxGs_aC_gXOX5yDyIjDSras9XHCI-KmmysMFJCGS2gxLnRgFGRwYOG6MyKfNuGUINywur-7fdN6zgTPmiHSAucWFQsdTrBpxHL9VVR0bBAqaRHWeWKoFXHPr6A9K47-7-7vaQRBkSzKdNQuxnuq4fUnhsjzsSOTalxxtx_wIvBskfgNiIlTdJY0i4kzfw1E1M4C_YzjvQq0diXng1LcDPYwWsFqU6YbeD0lKTyA39UGvq7BRD6XYCuZnoyIKapZ9lcrjlkBbd01FtzcLOrJyabNoPEj1NqOBv0cP-lLT2XZCdIt1vaIhDlM5DzJQn_-_E_4CsA05wkqA2a-aoHNL3UhYPcHQcvedyYZEUK7s6XVOwG0nsZZpLmgRUk27j4mT_vyhd6gzRyGkci6U9gg95qDXBiT8M0WdZPafSEYDcgQNv6NguXb6isvbZvmAkv8NlonjkB6P7sZKfgVOQfA2-vautiZyoFrg9XIHsQ-650ulILvtzB8EnR5vRWODX8TQKBcNmPyDtjeHIdghOGibSr8p2KrbpPgKDK9BuwBgwZQBHmyVXm-oRDIzbV844exuz6kq8WzrYMFfvqCben2s3_oxPhS6GsiTsJMxSuxr50JgkjMM_Kj9PA=w500-h500-s-no?authuser=0" alt="Logo" />
      </a>
    </div>

    <div class="navegar">
      <ul>
        <li>
          <a href="#">
            <span class="fa fa-home"></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </svg> <a href="PIouvinte.php">Home</a></span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fa-search"></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg> Procurar</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fas fa-book"></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
              <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
              <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
            </svg> <a href="artista.html">Artista</a></span>
          </a>
        </li>
      </ul>
    </div>

    <div class="navegar">
      <ul>
        <li>
          <a href="#">
            <span class="fa fas fa-plus-square"></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg> <a href="zonamusical.html">Zona musical</a></span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fas fa-heart"></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
          </a>
        </li>
      </ul>
    </div>

    <div class="policies">
      <ul>
        <li>
          <a href="#">Sobre o site</a>
        </li>
        <li>
          <a href="#">Privacidade</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-container">
    <div class="topbar">
      <div class="prev-next-buttons">
        <button type="button" class="fa fas fa-chevron-left"></button>
        <button type="button" class="fa fas fa-chevron-right"></button>
      </div>

      <div class="navbar">
        <ul>
          <li>
            <a href="suporte.html">Suporte</a>
          </li>
          <li>
            <a href="sair.php">Sair</a>
          </li>
          <li class="divider">|</li>
          <li>
          <a href="ouvinte.php"> <?php echo $_SESSION["usuario"]; ?></a>   
          </li>
        </ul>
      </div>
    </div>

    <form action="MandarPost.php" method="post" >
      <div style="padding-left: 380px; padding-top: 50px; ">
      <label class="picture" for="picture__input" tabIndex="0";">
        <span class="picture__image"> Adicionar Capa do Álbum</span>
      </label>
      
      <input type="file" name="picture__input" id="picture__input">
    </div><br><br><br><br>
    <div style="padding-left: 50px;">
        
      <label class="music" for="music__input" tabIndex="0";">
        <span class="music__folder"> Adicionar Musica</span>
      </label>
      
      <input type="file" name="music__input" id="music__input">
    </div>
    <div style="left: 400px; bottom: 100px;">
        <label >Nome do album:</label> <br>
        <input name="nomealbum" type="text" class="dados" required><br>
        <label >Nome da musica:</label> <br>
        <input name="nomemusica" type="text" class="dados" required><br>
        <label >Estilo:</label> <br>
        <input name="estilo" type="text"  class="dados" required>
        
    </div>
    <div style="padding-left: 750px; ;">
        <textarea name="letra" rows="50" cols="50" >Adicionar letra de musica</textarea>
    </div>

    
    <button>Postar</button>
</form>