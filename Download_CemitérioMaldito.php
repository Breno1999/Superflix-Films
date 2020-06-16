<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <style>

      body{
        background-color: black;
        color: white;

      }

       .card{
        width: 720px;
        height: 460px;
      }
      
    </style>
    
    <?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();//remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['email'];
    ?>

    <title>Cemitério Maldito</title>

  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
      <div class="container">
      
          <a class="navbar-brand navbar-dark h5 mb-0" href="pagina_inicial.php">Inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <spam class="navbar-toggler-icon"></spam>
        </button>
      

        <div class="collapse navbar-collapse" id="navbarSite">
        
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                  <a class="nav-link" href="filmes.php">Filmes</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="series.php">Séries</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contato.php">Contato</a>
              </li>

          </ul> 
          
          <ul class="navbar-nav ml-auto">

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Redes Sociais</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Facebook</a>
                <a class="dropdown-item" href="#">Instagram</a>
              </div>
            </li>
            
            <ul class="navbar-nav ml-5" id="Sair">
                
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><b>Conta</b></a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="alterar_tela.php">Alterar senha</a>
                  <a class="dropdown-item" href="deletar_tela.php">Excluir conta</a>
                  <a class="dropdown-item" href="deslogar.php">Sair</a>
              </div>
              </li>

            </ul>

          </ul>

        </div>
      </div>
   </nav>
   <br>
   <br>
   <br>
   <br>
   <br>

   <div class="container" align="center">
        <div class="card border-dark text-dark bg-danger mb-3">
          <div class="card-header bg-transparent border-success"><b>Cemitério Maldito(2019) Dublado / Dual Áudio BluRay 720p | 1080p </b></div>
          <div class="card-body text-dark">
            <img align="left" src="https://i.pinimg.com/originals/4b/63/fe/4b63feb46f98af71188ffc3eef9fbc6f.jpg" width="250px" height="290px">
            <br>
            <br>
            <p><b>Ano de Lançamento:</b> 2019</p>
            <p><b>Gênero:</b> Terror, Suspense</p>
            <p><b>Idioma:</b> Dublado / Dual Áudio</p>
            <p><b>Duração:</b>  1h 40Min.</p>
            <p><b>Qualidade:</b> 1080p</p>
           </div>
           <div class="card-footer"><a class="btn btn-primary btn-sm" href="magnet:?xt=urn:btih:2ef739752364dde4f26a5e68f228506c48088b55&dn=%5bACESSE%20COMANDOTORRENTS.COM%5d%20Cemit%c3%a9rio%20Maldito%202019%20%5b1080p%5d%20%5bBluRay%5d%20%5bDUAL%5d&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2fglotorrents.pw%3a6969%2fannounce&tr=udp%3a%2f%2ftracker4.piratux.com%3a6969%2fannounce&tr=udp%3a%2f%2fcoppersurfer.tk%3a6969%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2ftracker.yify-torrents.com%3a80%2fannounce&tr=http%3a%2f%2fwww.h33t.com%3a3310%2fannounce&tr=http%3a%2f%2fexodus.desync.com%2fannounce&tr=http%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=http%3a%2f%2fbt.careland.com.cn%3a6969%2fannounce&tr=http%3a%2f%2fexodus.desync.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=http%3a%2f%2ftracker.blazing.de%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=http%3a%2f%2ftracker.yify-torrents.com%2fannounce&tr=udp%3a%2f%2ftracker.prq.to%2fannounce&tr=udp%3a%2f%2ftracker.1337x.org%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2740%2fannounce&tr=udp%3a%2f%2ftracker.ex.ua%3a80%2fannounce&tr=udp%3a%2f%2fipv4.tracker.harry.lu%3a80%2fannounce&tr=udp%3a%2f%2f12.rarbg.me%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f11.rarbg.com%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce&tr=udp%3a%2f%2ffr33dom.h33t.com%3a3310%2fannounce&tr=udp%3a%2f%2fpublic.popcorn-tracker.org%3a6969%2fannounce" role="button">Download</a></div>
        </div>
  </div>


 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>

