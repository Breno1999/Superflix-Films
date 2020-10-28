<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro</title>
		<link rel="stylesheet" href="CSS/estilo.css">
                
                <style>
                    .link-form{
                    margin-left: 20px !important;
                    margin-top: 160px !important;
                    float: left !important; 
                    font-family: verdana !important;
                    color: white !important;
                    text-decoration: none !important;
                    display: block !important;
                    
                }
                </style>
	</head>
	<body>
            <br>
		<div id="corpo-form-cad">
		<h1 align="center">Cadastrar</h1>
		<form action="cadastrar.php" method="POST">

			<input name="nome" type="text" placeholder="Nome Completo" maxlength="30">
			<input name="telefone" type="text" placeholder="Telefone" maxlength="12">
			<input name="email" type="email" placeholder="Email" maxlength="40">
			<input name="senha" type="password" placeholder="Senha" maxlength="15">
                        <input name="confirmarSenha" type="password" placeholder="Confirmar Senha" maxlength="15">
			<input name="cadastrar" type="submit" value="Cadastrar">

		</form>
	</div>
        
        <div class="link-form">
            <a href="index.php"><h3><strong>< Voltar</strong></h3></a>
        </div>
	</body>
</html>