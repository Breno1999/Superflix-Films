<html>
	<head>
		<meta charset="utf-8"/>
		<title>Alterar Senha</title>
		<link rel="stylesheet" href="CSS/estilo.css">
	</head>
	<body>
		<div id="corpo-form-cad">
		<h1 align="center">Alterar</h1>
                <form action="alterar_senha.php" method="POST">

			<input name="email" type="email" placeholder="Email" maxlength="40">
                        <input name="senha" type="password" placeholder="Nova senha" maxlength="15">
			<input name="alterar" type="submit" value="Alterar">

		</form>
	</div>

	</body>
</html>