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
    <title>Letras de músicas</title>
    <link rel="stylesheet" href="style.css">
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
              </svg> <a href="postar.php">Postar</a></span>
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

      <div class="playlists">
        <h2>Novas caras</h2>

        <div class="list">
          <div class="item">
            <img src="https://i.pinimg.com/564x/cc/2a/4f/cc2a4ff967b10631398d60dffeb8b2d6.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4> <a href="player.html">Novo Balanço</a> </h4>
            <p>Veigh</p>
          </div>

          <div class="item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPD-AfblxCPu4WJ0ysYk3Z9xqX2zMLosingw&usqp=CAU" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Nirvana</h4>
            <p>Kurt kobain em um...</p>
          </div>

          <div class="item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkFZkMJeIzB2IqKpPIsN7CQN9xf80sWxFQ1A&usqp=CAU" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>desistindo ein</h4>
            <p>esse cara é mt legal...</p>
          </div>

          <div class="item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5eimE7HmxIctGS9BToQuG9na8i5K-1LROpw&usqp=CAU" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Imagine Dragon</h4>
            <p>aqui o nome dos artistas...</p>
          </div>

          <div class="item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2a2pNLNtEHi0p_ezXtQ6T3qlZoInKpWuYpPpr9_W5w5TS4vwhn4CClnZH1sxAHPRiXSU&usqp=CAU" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Ruidos do Céu Profundo</h4>
            <p>Rafa e toninho né...</p>
          </div>

          <div class="item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSApqFsinQG-gy5wsbQUl4VJ3iHWG0Xw_IsgvFpMfFHHH7HYBpENsAbpYncS7FdQNAw9UE&usqp=CAU" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>viva la vida</h4>
            <p>aqui o nome dos artistas...</p>
          </div>

          <div class="item">
            <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/1/5/6/7/347711399474311.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Gorgoroth</h4>
            <p>aqui o nome dos artistas...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>All out 80s</h4>
            <p>aqui o nome dos artistas.</p>
          </div>
        </div>
      </div>

      <div class="playlists">
        <h2>Pra você</h2>
        <div class="list">
          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>desistikk</h4>
            <p>espero que dê pra entender</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>amo essa matéria</h4>
            <p>ficou muito bonito...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Instrumental Study</h4>
            <p>lofi é bom...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>beats para programar</h4>
            <p>melhor coisa...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Coding Mode</h4>
            <p>o modo mais apelão</p>
          </div>
          
          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Focus Flow</h4>
            <p>tipo um super sayajin.</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>maratonar professor márcio</h4>
            <p>no youtube e no insta.</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>muuuito bom</h4>
            <p>Focus thiago.</p>
          </div>
        </div>
      </div>

      <div class="playlists">
        <h2>Recomendados</h2>
        <div class="list">
          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Mood Booster</h4>
            <p>feliz com o processo...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>se sentindo bem</h4>
            <p>felizinho...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Medo do futuro </h4>
            <p>mas bora que não tem descansso.</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Piano Instrumental</h4>
            <p>Happy vibes for an upbeat morning.</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Filosofia e alegria</h4>
            <p>platão e descartes...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>provas e deveres</h4>
            <p>Se sentindo sufocado</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>acabou</h4>
            <p>é isso...</p>
          </div>

          <div class="item">
            <img src="https://i1.sndcdn.com/artworks-000570232784-0rrp7l-t500x500.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>idk.</h4>
            <p>idk.</p>
          </div>
        </div>

        <hr>
      </div>
    </div>
    
  </body>
</html>