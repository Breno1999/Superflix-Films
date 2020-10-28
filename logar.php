<?php 
session_start();

$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$entrar = isset( $_POST[ 'entrar' ] ) ? $_POST[ 'entrar' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('127.0.0.1','root','','superflix', '3306');
$tenta_achar = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'" ;
    $resultado = $connect->query($tenta_achar);
    $user = mysqli_fetch_assoc($resultado);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
    $_SESSION["nome"] = $user["nome"];
        header('location:pagina_inicial.php');
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.php';
            </script>";
      }
?>
