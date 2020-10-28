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
      
      #container-form{
          height: 200px;
          width: 700px
      }
      
      #input-form{
          position: absolute;
          top: 85%;
          left: 44%;
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

    <title>Contato</title>

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
   <br>
   

   <div id="container-form" class="container theme-showcase" role="main">
      <div class="page-header">
        <h1 class="ml-0" align="left">Pagina de Contato</h1>
      </div>
      <br>
      <form class="form-horizontal" name="formcontato" method="POST" action="envia_mensagem.php">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            Nome: 
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            E-mail: 
          </label>
          <div class="col-sm-10">
             <input type="email" class="form-control" name="email" placeholder="Seu e-mail" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            Assunto: 
          </label>
          <div class="col-sm-10">
             <input type="text" class="form-control" name="assunto" placeholder="Assunto do contato" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            Mensagem: 
          </label>
          <div class="col-sm-10">
            <textarea class="form-control" name="mensagem"></textarea>
          </div>
        </div>
        
          <input id="input-form" class="btn btn-success" type="submit" value="Enviar" onclick="return validar_form_contato()">
      </form>
    </div>


 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>