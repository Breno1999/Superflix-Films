<html>
	<head>
		<meta charset="utf-8"/>
		<title>Alterar</title>
                
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
      
      .link-form{
                    margin-left: 20px !important;
                    margin-top: 60px !important;
                    float: left !important; 
                    font-family: verdana !important;
                    color: white !important;
                    text-decoration: none !important;
                    display: block !important;
      }
      
      div#corpo-form{
	/*background-color: red;*/
	width: 420px !important;
	margin: 150px auto 0px auto !important;
}

      div#corpo-form-cad{
	/*background-color: red;*/
	width: 420px;
	margin: 80px auto 0px auto;
    }

    div#corpo-form h1{
	padding: 20px !important;
    }

    a{
	color: white;
	text-decoration: none;
	text-align: center;
	display: block !important;
    }

    a:hover{
	text-decoration: underline;
    }

    input[type="submit"]{
	background-color: #999999!important;
	border: none !important;
	color:white !important;
	cursor: pointer !important;
   
    }
    
    .input-form{

	display: block !important;
	height: 45px !important;
	width: 380px !important;
	margin: 15px !important;
	border-radius: 30px !important;
	border: 1px solid black !important;
	font-size: 10pt !important;
	padding: 10px 20px !important;
	outline: none !important;
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
                <form class="form-inline my-2 my-lg-1" method="POST" action="pesquisar.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control mr-2" name="pesquisar" type="search" placeholder="Buscar..." aria-label="Search">
                        </div>
                    </div>
                    <button class="btn btn-dark my-2 my-sm-0" type="submit" name="buscar">Pesquisar</button>
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
   
            
            
        <div id="corpo-form">
                    <font color="white"><h1 align="center">Alterar</h1></font>
                <form action="alterar_senha.php" method="POST">

                        <input class="input-form" name="email" type="email" placeholder="Email" maxlength="40">
                        <input class="input-form" name="novaSenha" type="password" placeholder="Nova senha" maxlength="15">
                        <input class="input-form" name="confirmarSenha" type="password" placeholder="Confirmar Senha" maxlength="15">
			<input class="input-form" name="alterar" type="submit" value="Alterar">
                        
                                                           
		</form>
                    
	</div>
        <br>
        <br>
        <br>   
        
        <div class="link-form">
            <a href="pagina_inicial.php"><h5><strong>< Voltar</strong></h5></a>
        </div>
            
	</body>
</html>