<html>
	<head>
		<meta charset="utf-8"/>
		<title>Alterar Senha</title>
                
                
		<link rel="stylesheet" href="CSS/estilo.css">
                
 

	</head>
	<body>
            
            
		<div id="corpo-form">
                    <font color="white"><h1 align="center">Alterar</h1></font>
                <form action="alterar_senha.php" method="POST">

                        <input name="email" type="email" placeholder="Email" maxlength="40">
                        <input name="novaSenha" type="password" placeholder="Nova senha" maxlength="15">
			<input name="alterar" type="submit" value="Alterar">
                        <br>
                        <a href="deletar_tela.php"><strong><h4>Para excluir sua conta clique aqui!</h4></strong></a>
                                                           
		</form>
                    
	</div>
            
        <div class="link-form">
            <a href="index.php"><h3><strong>< Voltar</strong></h3></a>
        </div>
            
	</body>
</html>