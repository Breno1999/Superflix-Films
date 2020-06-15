<html>
	<head>
		<meta charset="utf-8"/>
		<title>Excluir Conta</title>
                
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <link rel="stylesheet" href="CSS/estilo.css">
                
                <style>
                    .link-form{
                    margin-left: 20px !important;
                    margin-top: 205px !important;
                    float: left !important; 
                    font-family: verdana !important;
                    color: white !important;
                    text-decoration: none !important;
                    display: block !important;
                    
                }
                </style>
 
                
	</head>
	<body>
            

        <div id="corpo-form">
                    <font color="white"><h2 align="center">Excluir conta:</h2></font>
                <form action="deletar.php" method="POST">

                        <input name="email" type="email" placeholder="Email" maxlength="40">
                      
                        <input name="senha" type="password" placeholder="Senha" maxlength="15">
    
			<input name="deletar" type="submit" value="Excluir">
                        
                </form>
                 
	</div>
            <br>
            <br>
            <br>
            
            <div class="link-form">
                <a href="alterar_tela.php"><h5><strong>< Voltar</strong></h5></a>
            </div>

	</body>
</html>