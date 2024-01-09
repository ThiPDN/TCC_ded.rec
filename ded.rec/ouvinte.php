<?php
    require_once("conexao.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ouvinte</title>
    <link rel="stylesheet" type="text/css" href="ouvinte.css">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline';" />
</head>

<body>
    <div class="container">


        <div class="perfil">
            <div class="playlist-header">

                <div class="playlist-content">
                    <div class="playlist-cover">
                        <img src="https://pbs.twimg.com/profile_images/1690568630994370560/DePRIg0M_400x400.jpg" alt="">
                    </div>
                    <div class="playlist-info">
                        <div class="playlist-description"><?php echo $_SESSION["usuario"]; ?></div>
                        <div class="playlist-titleartist"><?php echo $_SESSION["nome"]; ?></div>
                        <div class="playlist-description">Curto umas gritarias</div>
                        <div style="height: 10px;"></div>
                        <div class="playlist-stats">
                            <span>3 letras postadas</span> 
                            <button type="button" onclick="confirmarExlusao(
                            '<?php echo $_SESSION['id'] ?>',
                            '<?php echo $_SESSION['nome'] ?>' )" class="excluir">Excluir Conta</button>
                            <a href="editar.php?idusuario=<?php echo $_SESSION['id']?>"><button class="editar">Editar Perfil</button></a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="playlist-songs-container">
                
                <div class="playlist-songs">
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Músicas recentes</th>
                            <th>Álbum</th>
                            <th>Data</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://i1.sndcdn.com/artworks-meJAuAIYCxpV-0-t500x500.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name"><a style= "text-decoration: none;" href="player.html" class="link-zoom" title="Pecado">Pecado</a></div>
                                    <div class="song-artist">Mc kelvinho, MC don Juan, MC Hariel</div>
                                </div>
                            </td>
                            <td class="song-album">Solo</td>
                            <td class="song-date-added">May 31, 2022</td>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://cdns-images.dzcdn.net/images/cover/ab46238babc76748c9102f69750aebe1/500x500.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Mandraka</div>
                                    <div class="song-artist">Veigh</div>
                                </div>
                            </td>
                            <td class="song-album">Dos Prédios</td>
                            <td class="song-date-added">May 31, 2022</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/2/0/8/5/1730951680281022.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Preferida</div>
                                    <div class="song-artist">Kayblack</div>
                                </div>
                            </td>
                            <td class="song-album">Contradições</td>
                            <td class="song-date-added">May 31, 2022</td>
                            <td>
                            </td>
                        </tr>
                    </table> <br>

                    <table>
                        <tr>
                            <th>#</th>
                            <th>Artistas seguidos</th>
                            <th>Estilo</th>
                            <th>Views</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://i.pinimg.com/564x/7d/78/e1/7d78e1347aeaffc88d47e92205829bf3.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Veigh</div>
                                    <div class="song-artist">Ouça “Dos Prédios“ DELUXE.</div>
                                </div>
                            </td>
                            <td class="song-album">Trap</td>
                            <td class="song-date-added">7.745.881 ouvintes mensais</td>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://i1.sndcdn.com/artworks-Xft3pV9wDhqT7tyb-svCSAw-t500x500.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Ryu, the Runner</div>
                                    <div class="song-artist">“Mantém o Pique” outnow</div>
                                </div>
                            </td>
                            <td class="song-album">Trap</td>
                            <td class="song-date-added">1.826.447 ouvintes mensais</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="https://i1.sndcdn.com/avatars-g2x1wgHhB08StOUA-dGv2FA-t500x500.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Mestre LO-FI</div>
                                    <div class="song-artist">fique calmo man</div>
                                </div>
                            </td>
                            <td class="song-album">LO-FI</td>
                            <td class="song-date-added">55.654.973 ouvintes mensais</td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    function confirmarExlusao(id,nome){
        if(window.confirm("Deseja realmente exluir a conta " + nome + "?")){
            window.location = "excluir.php?idusuario=" + id;
        }

    }

</script>

</html>