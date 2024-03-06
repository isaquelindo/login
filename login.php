<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha  = md5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'login');
 if (isset($entrar)) {

    $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if(mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' types='text/javascript'>.href='login.html';</script>";
        die();
    }else{
        setcookie("login",$login);
        header("location:index.php");
    }
 }
 ?>