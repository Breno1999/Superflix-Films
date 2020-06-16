<?php
    
    $alterar = isset( $_POST[ 'alterar' ] ) ? $_POST[ 'alterar' ] : null ;
    $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
    $novaSenha = isset( $_POST[ 'novaSenha' ] ) ? $_POST[ 'novaSenha' ] : null ;
    $novaSenha = md5($novaSenha);
    
    $conecta = mysqli_connect('sql10.freesqldatabase.com','sql10348436','3CLi39vjV7','sql10348436', '3306');
    
    $sql = "SELECT email, senha FROM usuarios"; 
    
    $sql = "UPDATE usuarios SET senha='$novaSenha' WHERE email ='$email'";     
        if ($conecta->query($sql) === TRUE) 
         {         
            echo"<script language='javascript' type='text/javascript'>
          alert('Senha alterada com sucesso!');window.location.
          href='alterar_tela.php'</script>";     
         
         } 
        else 
        {         
            echo"<script language='javascript' type='text/javascript'>
          alert('Nao foi possivel alterar sua senha!');window.location.
          href='alterar_tela.php'</script>" . $conecta->error."<br>";     
             
        }     
        
    $conecta->close(); 

?>

