<?php

    $pesquisar = isset( $_POST[ 'pesquisar' ] ) ? $_POST[ 'pesquisar' ] : null ;
    $buscar = isset( $_POST[ 'buscar' ] ) ? $_POST[ 'buscar' ] : null ;

    $connect = mysqli_connect('127.0.0.1','root','','superflix', '3306');
    $query_select = "SELECT nomeFilme FROM filmes WHERE nomeFilme='$pesquisar'";
    $select = mysqli_query($connect, $query_select);
    $array = mysqli_fetch_array($select);  
    
    $resultado = $connect->query($query_select);
    $filme = mysqli_fetch_assoc($resultado);
    
   

/* Código de pesquisa da sessao LANÇAMENTOS*/
    
        if ($resultado->num_rows > 0 && $pesquisar == 'Creed 2') {
                      
                header('location:Download_Creed.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'creed 2'){
                  
                   header('location:Download_Creed.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Dumbo') {
                      
                header('location:Download_Dumbo.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'dumbo'){
                  
                   header('location:Download_Dumbo.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
      
        if ($resultado->num_rows > 0 && $pesquisar == 'Velozes e Furiosos') {
            
                
                      
                header('location:Download_HobseShaw.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'velozes e furiosos'){
                  
                   header('location:Download_HobseShaw.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Uma noite de crime') {
            
                
                      
                header('location:Download_ThePurgue.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'uma noite de crime'){
                  
                   header('location:Download_ThePurgue.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Empire') {
            
                
                      
                header('location:Download_Empire.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'empire'){
                  
                   header('location:Download_Empire.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Vingadores Ultimato' || $pesquisar == 'Vingadores'){
                      
                header('location:Download_VingadoresUltimato.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'vingadores ultimato' || $pesquisar == 'vingadores'){
                  
                   header('location:Download_VingadoresUltimato.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Aladdin'){
                      
                header('location:Download_Aladdin.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'aladdin'){
                  
                   header('location:Download_Aladdin.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Jhon Wick 3'){
                      
                header('location:Download_JhonWick3.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'jhon wick 3'){
                  
                   header('location:Download_JhonWick3.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Vidro'){
                      
                header('location:Download_Vidro.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'vidro'){
                  
                   header('location:Download_Vidro.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'Capitã Marvel'){
                      
                header('location:Download_CapitaMarvel.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'capitã marvel'){
                  
                   header('location:Download_CapitaMarvel.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        if ($resultado->num_rows > 0 && $pesquisar == 'O Rei Leão'){
                      
                header('location:Download_OReiLeao.php');
        }
        else{
               if($resultado->num_rows > 0 && $pesquisar == 'o rei leão'){
                  
                   header('location:Download_OReiLeao.php');
                   
               }
               else{
                    echo "<script> 
                            alert('Filme não encontrado');
                            window.location.href = 'pagina_inicial.php';
                    </script>";                    
               }
            
        }
        
        
    
/*Código de pesquisa da sessao FILMES */
        
?>
