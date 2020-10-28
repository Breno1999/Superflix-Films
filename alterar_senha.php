<?php
    
    $alterar = isset( $_POST[ 'alterar' ] ) ? $_POST[ 'alterar' ] : null ;
    $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
    $novaSenha = isset( $_POST[ 'novaSenha' ] ) ? $_POST[ 'novaSenha' ] : null ;
    $novaSenha = md5($novaSenha);
    $confirmarSenha = isset( $_POST[ 'confirmarSenha' ] ) ? $_POST[ 'confirmarSenha' ] : null ;
    $confirmarSenha = md5($confirmarSenha);
    
    $conecta = mysqli_connect('127.0.0.1','root','','superflix', '3306');
    
    $sql = "SELECT email, senha FROM usuarios"; 
    
    if($novaSenha == $confirmarSenha){
    
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
    }    
    else {
        echo"<script language='javascript' type='text/javascript'>
          alert('Nao foi possivel alterar sua senha!');window.location.
          href='alterar_tela.php'</script>" . $conecta->error."<br>";
    }
        
    $conecta->close(); 

?>

