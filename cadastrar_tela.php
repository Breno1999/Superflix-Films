<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro</title>
		<link rel="stylesheet" href="CSS/estilo.css">
	</head>
	<body>
		<div id="corpo-form-cad">
		<h1 align="center">Cadastrar</h1>
		<form action="cadastrar.php" method="POST">

			<input name="nome" type="text" placeholder="Nome Completo" maxlength="30">
			<input name="telefone" type="text" placeholder="Telefone" maxlength="12">
			<input name="email" type="email" placeholder="Email" maxlength="40">
			<input name="senha" type="password" placeholder="Senha" maxlength="15">
			<input name="cadastrar" type="submit" value="Cadastrar">

		</form>
	</div>

	</body>
</html>