<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

    <style>
      body{
        background-color: black;
        color: white;
      }

      .card{
        width: 600px;
        height: 440px;
      }

      #rodapé{
        width: 290px;
        height: 30px;
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

    <title>Séries</title>

  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
      <div class="container">
      
        <a class="navbar-brand navbar-dark h5 mb-0" href="index.php">Inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <spam class="navbar-toggler-icon"></spam>
        </button>
      

      <div class="collapse navbar-collapse" id="navbarSite">
        
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="filmes.html">Filmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="series.html">Séries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html">Contato</a>
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
            
            <ul class="navbar-nav ml-5" id="sair">
                
               <li class="nav-item">
                   <a class="nav-link font-weight-bold"  href="deslogar.php"><b>Sair</b></a>
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

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://lh3.googleusercontent.com/w7I4sQ1b6Uv6YI1p8QEMCkhcx6UyJ200qMznqSyA0a_Ye10tT5CWKVs4cwGefNNtoc60JcaTct49lnac3_OC=s1000-rw" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Grown-ish</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://keepongeekin.files.wordpress.com/2017/02/wp-1487435610730.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Prison Break</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://img.over-blog-kiwi.com/0/99/48/38/20180913/ob_8d3ee5_breaking-bad-saison4.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Breaking Bad</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvds-serie-vikings-1-a-5-temporada-complet-verso-estendida-D_NQ_NP_786616-MLB26701857480_012018-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vikings</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://miro.medium.com/max/426/1*-m_qAywMMnP_h3kxzEMkFg.jpeg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Elite</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://www.spinoff.com.br/wp-content/uploads/greys-anatomy-season12.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Grey's Anatomy</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://m.minhaserie.com.br/uploads/editor_pictures/000/049/056/content_pic.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Riverdale</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/bates-motel-5-temporada-completa-em-box-dvd-personalizado-D_NQ_NP_773727-MLB25608633866_052017-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Bates Motel</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://www.opoderosoresumao.com/wp-content/uploads/2019/07/OlhosqueCondenamWhenTheySeeUs.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Olhos que Condenam</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-4-temporada-serie-blindspot-ponto-cego-D_NQ_NP_783199-MLB30990157440_062019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Blindspot</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div> 
  </div>
  <br>

  <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
          <a class="text-white" href="series.html"> 1 </a>
          <a class="text-white" href="series_2.html"> 2 </a>
          <a class="text-white" href="#"> 3 </a>
          <a class="text-white" href="#"> 4 </a>
        </p>
      </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>