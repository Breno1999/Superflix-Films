<?php 

$nome = isset( $_POST[ 'nome' ] ) ? $_POST[ 'nome' ] : null ;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$assunto = isset ($_POST[ 'assunto' ] ) ? $_POST[ 'assunto' ] : null;
$mensagem = isset( $_POST['mensagem']) ? $_POST['mensagem'] : null;

$connect = mysqli_connect('127.0.0.1','root','','superflix', '3306');
$query_select = "SELECT email FROM mensagem";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);

  if($email == "" || $email == null  || $nome == "" ||$nome == null || $assunto == "" || $assunto == null || $mensagem == "" || $mensagem == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo deve ser preenchido!');window.location.href='
    contato.php';</script>";
 
    }
  else{
 
        $query = "INSERT INTO mensagem (nome,email,assunto,mensagem) VALUES ('$nome','$email','$assunto','$mensagem')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Mensagem enviada com sucesso!');window.location.
          href='contato.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível enviar a mensagem, tente Novamente!');window.location
          .href='contato.php'</script>";
        }
    }

?>