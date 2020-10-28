<?php
    
    $deletar = isset( $_POST[ 'deletar' ] ) ? $_POST[ 'deletar' ] : null ;
    $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
    $senha = isset( $_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null ;
    $senha = md5($senha);
    
    $conecta = mysqli_connect('127.0.0.1','root','','superflix', '3306');
    $tenta_achar = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'" ;
    $resultado = $conecta->query($tenta_achar);
    $user = mysqli_fetch_assoc($resultado);
    if ($resultado->num_rows > 0) {
        $sql = "DELETE FROM usuarios  WHERE email ='$email'"; 
    
        if ($conecta->query($sql) === TRUE) 
            {         
            
                echo"<script language='javascript' type='text/javascript'>
                alert('Conta excluida com sucesso!');window.location.
                href='deslogar.php'</script>";     
         
            } 
    }
    else 
    {         
            echo"<script language='javascript' type='text/javascript'>
          alert('Dados informados não são válidos!');window.location.
          href='deletar_tela.php'</script>" . $conecta->error."<br>";     
             
    }
        
    $conecta->close(); 

?>

