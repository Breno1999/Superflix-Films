<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
                
		<title>Entrar</title>
                
		<link rel="stylesheet" href="CSS/estilo.css">
                <style>
                    .link-form1{
                    margin-left: 20px !important;
                    margin-top: 201px !important;
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
		<h1 align="center">Alterar</h1>
                <form action="alterar_senha2.php" method="POST" >
			<input name="email" type="email" placeholder="Email">
			<input name="novaSenha" type="password" placeholder="Nova Senha">
			<input type="submit" name="alterar" value="Alterar">
                        <br>

		</form>
		</div>
                <br>
            
            <div class="link-form1">
            <a href="index.php"><h3><strong>< Voltar</strong></h3></a>
            </div>
	</body>
</html>