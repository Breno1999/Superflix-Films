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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    
    <script>

    jQuery(document).ready(function() {

    var offset = 300;

    var duration = 500;

    jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() > offset) {

    jQuery('.backtotop').fadeIn(duration);

    } else {

    jQuery('.backtotop').fadeOut(duration);

    }

    });



    jQuery('.backtotop').click(function(event) {

    event.preventDefault();

    jQuery('html, body').animate({scrollTop: 0}, duration);
    
    return false;

    })

    });

    </script>
    
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
      
      .backtotop {

       position: fixed;

       bottom: 10px; /* increase value to move position up */

       right: 35px; /* increase value to move position left */

       color: #000000; /* color of text */

       font-size: 12px; /* changes size of text */

       padding: 10px; /* add space around the text */

       text-transform: uppercase; /* change text to all caps */

       letter-spacing: 1.0px; /* space between letters */

       }



       .backtotop:hover {

       color: #ffffff; /* color of text on hover over */

       text-decoration: none; /* no underline */

       bottom: 10px; /* increase value to move position up */

       right: 35px; /* increase value to move position left */

       padding: 10px; /* add space around the text */

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
            
            <div>
                <form class="form-inline my-2 my-lg-1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control mr-2" type="search" placeholder="Buscar..." aria-label="Search">
                        </div>
                    </div>
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
          
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

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://lh3.googleusercontent.com/w7I4sQ1b6Uv6YI1p8QEMCkhcx6UyJ200qMznqSyA0a_Ye10tT5CWKVs4cwGefNNtoc60JcaTct49lnac3_OC=s1000-rw" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Grown-ish</h5>
            <a class="btn btn-primary btn-sm" href="Download_GrownIsh.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://keepongeekin.files.wordpress.com/2017/02/wp-1487435610730.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Prison Break</h5>
            <a class="btn btn-primary btn-sm" href="Download_PrisonBreak.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://presleyson.com.br/wp-content/uploads/2018/12/breaking-bad-800x800-min.png" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Breaking Bad</h5>
            <a class="btn btn-primary btn-sm" href="Download_BreakingBad.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvds-serie-vikings-1-a-5-temporada-complet-verso-estendida-D_NQ_NP_786616-MLB26701857480_012018-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vikings</h5>
            <a class="btn btn-primary btn-sm" href="Download_Vikings.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://miro.medium.com/max/426/1*-m_qAywMMnP_h3kxzEMkFg.jpeg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Elite</h5>
            <a class="btn btn-primary btn-sm" href="Download_Elite.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://www.spinoff.com.br/wp-content/uploads/greys-anatomy-season12.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Grey's Anatomy</h5>
            <a class="btn btn-primary btn-sm" href="Download_GreysAnatomy.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://m.minhaserie.com.br/uploads/editor_pictures/000/049/056/content_pic.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Riverdale</h5>
            <a class="btn btn-primary btn-sm" href="Download_Riverdale.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/bates-motel-5-temporada-completa-em-box-dvd-personalizado-D_NQ_NP_773727-MLB25608633866_052017-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Bates Motel</h5>
            <a class="btn btn-primary btn-sm" href="Download_BatesMotel.php" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://www.opoderosoresumao.com/wp-content/uploads/2019/07/OlhosqueCondenamWhenTheySeeUs.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Olhos que Condenam</h5>
            <a class="btn btn-primary btn-sm" href="Download_OlhosQueCondenam.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-4-temporada-serie-blindspot-ponto-cego-D_NQ_NP_783199-MLB30990157440_062019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Blindspot</h5>
            <a class="btn btn-primary btn-sm" href="Download_BlindSpot.php" role="button">Download</a>
          </div>
        </div> 
  </div>
  <br>

  <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
          <a class="text-white" href="series.php"> 1 </a>
          <a class="text-white" href="series_2.php"> 2 </a>
          <a class="text-white" href="#"> 3 </a>
          <a class="text-white" href="#"> 4 </a>
        </p>
      </div>
    </div>
</div>
  
<a href="#" class="backtotop"><img src="https://imgur.com/zuTLdei.png" width="50px" height="50px" alt="back to top" /></a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>