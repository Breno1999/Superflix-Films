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

    
    <title>SuperflixTorrents.com</title>

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

   <div id="carouselSite" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner" align="center"  width="500px" height="10px">

       <div class="carousel-item active">
           <a href="Download_SexEd.php">
            <img src="https://qph.fs.quoracdn.net/main-qimg-13e13269013e778c4ec9b976535cbe86" class="img-fluid d-block" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>  

       <div class="carousel-item">
         <a href="Download_MrRobot.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuIIKawOQX6jP3cAkSue2ZqeRsyv0rxOH_3Kox3dWlb-TcoktHCA&s" class="img-fluid d-block" 
            width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
           <a href="Download_LaCasa.php">
            <img src="https://dvqlxo2m2q99q.cloudfront.net/000_clients/1026022/page/1026022L7oPIvak.png" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="Download_VisaVis.php">
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
      <div class="col-12 text-center">
        <h1 class="ml-0" align="left">Lançamentos</h1>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>    

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-filme-creed-2-2019-dub-hd-stallone-michael-b-jordan-D_NQ_NP_880958-MLB29398622282_022019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Creed 2</h5>
            <a class="btn btn-primary btn-sm" href="Download_Creed.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/pictures/19/01/17/16/28/3541107.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Dumbo</h5>
            <a class="btn btn-primary btn-sm" href="Download_Dumbo.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuhGJJNjtQsSK5gdUZAf8VUOl1xKXOCKUqvOi4hL3ryCyfbRyJ3Q&s" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Velozes e Furiosos: Hobbs & Shaw</h5>
            <a class="btn btn-primary btn-sm" href="Download_HobseShaw.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://1.bp.blogspot.com/-zD84PZg3Zsg/XaaKQlq58mI/AAAAAAAAZa4/6bxd6wKTnS8e3evjaiqtyBzFRsPXsemkgCNcBGAsYHQ/s1600/The%2BPurge%2Bs02.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Uma Noite de Crime 2ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="Download_ThePurgue.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://i2.wp.com/i.imgur.com/0anGQvs.jpg?resize=220%2C280&ssl=1" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Empire 5ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="Download_Empire.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://is3-ssl.mzstatic.com/image/thumb/Video113/v4/cb/2b/96/cb2b96dd-7cd0-ba41-e742-e90045218c3e/DIS_AV_ENDGAME_BRP_FINAL_BR_ARTWORK_PT-BR_2000x3000_1OWPBJ00000FMO.lsr/268x0w.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vingadores: Ultimato</h5>
            <a class="btn btn-primary btn-sm" href="Download_VingadoresUltimato.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://www.revistanossa.com.br/midias/artigos/Imagens/P_HO00006038-1560261456.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Aladdin</h5>
            <a class="btn btn-primary btn-sm" href="Download_Alladin.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcS9Qct2NfoZfKg0N-QhrhwKfBG2YPN-yMtXkDKS-hBwh6RpjB&s" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Jhon Wick 3</h5>
            <a class="btn btn-primary btn-sm" href="Download_JhonWick3.php" role="button">Download</a>
          </div>
        </div> 
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img2.acsta.net/pictures/18/11/30/21/49/3142885.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vidro</h5>
            <a class="btn btn-primary btn-sm" href="Download_Vidro.php" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/5/59/Captain_Marvel_%282018%29.jpg/250px-Captain_Marvel_%282018%29.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Capitã Marvel</h5>
            <a class="btn btn-primary btn-sm" href="Download_CapitaMarvel.php" role="button">Download</a>
          </div>
        </div> 
  </div>
<br>

 <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
          <a class="text-white" href="index.php"> 1 </a>
          <a class="text-white" href="lancamentos_2.php"> 2 </a>
          <a class="text-white" href="lancamentos_3.php"> 3 </a>
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