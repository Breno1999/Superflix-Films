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

   <div id="carouselSite" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner" align="center"  width="500px" height="10px">

       <div class="carousel-item active">
         <a href="#">
            <img src="https://qph.fs.quoracdn.net/main-qimg-13e13269013e778c4ec9b976535cbe86" class="img-fluid d-block" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>  

       <div class="carousel-item">
         <a href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuIIKawOQX6jP3cAkSue2ZqeRsyv0rxOH_3Kox3dWlb-TcoktHCA&s" class="img-fluid d-block" 
            width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="#">
            <img src="https://dvqlxo2m2q99q.cloudfront.net/000_clients/1026022/page/1026022L7oPIvak.png" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="#">
            <img src="https://i.ytimg.com/vi/O34MP1nTtoo/maxresdefault.jpg" class="img-fluid d-block"  
            width="650px" height="10px"></a>
       </div>

    </div>

    <div>
        <br>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Avançar</span>
        </a>
    </div>
   </div> 
    <br>
    <br>
    <br>
    <br>
    
    

  <div class="container" id="Titulo">
    <div class="row">
      <div class="col-12">
        <h1 class="ml-0">Séries</h1>
        <br>
        <br>
        <br>
      </div>  
    </div>
  </div>

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://pbs.twimg.com/media/ED9gXxnWwAYzrep.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vis a Vis</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://img.elo7.com.br/product/original/26B5DAC/big-poster-serie-the-flash-lo10-tamanho-90x60-cm-the-flash.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Flash</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/pictures/16/06/14/19/46/337804.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Mr Robot</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://1.bp.blogspot.com/-zD84PZg3Zsg/XaaKQlq58mI/AAAAAAAAZa4/6bxd6wKTnS8e3evjaiqtyBzFRsPXsemkgCNcBGAsYHQ/s1600/The%2BPurge%2Bs02.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Uma Noite de Crime 2ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://i2.wp.com/i.imgur.com/0anGQvs.jpg?resize=220%2C280&ssl=1" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Empire 5ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://fr.web.img4.acsta.net/r_1280_720/pictures/19/07/22/09/56/1827026.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">La Casa de Papel</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://upload.wikimedia.org/wikipedia/pt/f/f6/Dark_%28s%C3%A9rie%29.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Dark</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://media.fstatic.com/Eg4MlEbpO1kniehFqaStrNW4-TI=/fit-in/290x478/smart/media/movies/covers/2018/05/Suits-7%C2%AA-Temporada.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Suits</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://images-na.ssl-images-amazon.com/images/I/91lPMgf0ZdL._SX425_.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Arrow</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://cartt.ca/sites/default/files/styles/large/public/field/image/Netflix%20The%20100.jpg?itok=rzw5xrQ0" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">The 100</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>