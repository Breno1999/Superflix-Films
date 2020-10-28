<?php 

$nome = isset( $_POST[ 'nome' ] ) ? $_POST[ 'nome' ] : null ;
$telefone = isset ($_POST[ 'telefone' ] ) ? $_POST[ 'telefone' ] : null;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);
$confirmarSenha = isset( $_POST[ 'confirmarSenha' ] ) ? $_POST[ 'confirmarSenha' ] : null ;
$confirmarSenha = md5($confirmarSenha);

$connect = mysqli_connect('127.0.0.1','root','','superflix', '3306');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($senha == $confirmarSenha){
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    index.php';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe!');window.location.href='
        index.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (nome,telefone,email,senha) VALUES ('$nome','$telefone','$email','$senha')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário!');window.location
          .href='cadastrar_tela.php'</script>";
        }
      }
    }
}
else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário!');window.location
          .href='cadastrar_tela.php'</script>";
        }
?>