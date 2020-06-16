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

    <title>La Casa de Papel</title>

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
          <div class="card-header bg-transparent border-success"><b>La Casa de Papel - 1ª Temporada Netflix Torrent (2018) Dublada / Dual Áudio 720p Download MKV</b></div>
          <div class="card-body text-dark">
            <img align="left" src="http://fr.web.img4.acsta.net/r_1280_720/pictures/19/07/22/09/56/1827026.jpg" width="250px" height="310px">
            <br>
            <br>
            <p><b>Ano de Lançamento:</b> 2018</p>
            <p><b>Gênero:</b> Ação, Drama</p>
            <p><b>Idioma:</b> Dublado / Dual Áudio</p>
            <p><b>Duração:</b> 70 minutos</p>
            <p><b>Qualidade:</b> 720p</p>
           </div>
          <div class="card-footer"><a class="btn btn-primary btn-sm" href="magnet:?xt=urn:btih:322AEF81478A74D32305EE7FEC60CE3D9293C418&dn=La%20Casa%20de%20Papel%202017%201%C2%AA%20Temporada%20Completa%20%5bWEBRip%5d%20WWW.BLUDV.COM&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2750%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce&tr=http%3a%2f%2fglotorrents.pw%3a80%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftorrent.gresille.org%3a80%2fannounce&tr=udp%3a%2f%2ftracker.aletorrenty.pl%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.piratepublic.com%3a1337%2fannounce" role="button">Download</a></div>
</div>
  </div>


 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>