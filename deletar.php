<?php
    
    $deletar = isset( $_POST[ 'deletar' ] ) ? $_POST[ 'deletar' ] : null ;
    $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
    $senha = isset( $_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null ;
    $senha = md5($senha);
    
    $conecta = mysqli_connect('sql10.freesqldatabase.com','sql10348436','3CLi39vjV7','sql10348436', '3306');
    
   $sql = "DELETE FROM usuarios  WHERE email ='$email'";     
     if ($conecta->query($sql) === TRUE) 
         {         
            echo"<script language='javascript' type='text/javascript'>
          alert('Conta excluida com sucesso!');window.location.
          href='index.php'</script>";     
         
         } 
        else 
        {         
            echo"<script language='javascript' type='text/javascript'>
          alert('Nao foi possivel apagar sua conta!');window.location.
          href='index.php'</script>" . $conecta->error."<br>";     
             
        }
        
    $conecta->close(); 

?>

