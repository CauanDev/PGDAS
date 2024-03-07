<?php
  session_start();
if(empty($_SESSION))
{
    print "<script>location.href='index.php'</script>";
}
    include("funcs.php");
    include('config.php');   
if(isset($_POST["cpf"]))
{
    $cpf = preg_replace('/[^0-9]/', '', $_POST["cpf"]);    
}

if(isset($_POST["senha"]) && isset($_POST["senha1"]) && isset($_POST["email"])&& isset($_POST["name"]) && isset($_POST["city"])) 
{

    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $name = $_POST["name"];    
    $city = $_POST["city"];            
    $conn->query("INSERT INTO users (name,senha,email,cpf,city,type) VALUES('$name','$senha','$email','$cpf','$city',0)");
    $_SESSION['registro_sucesso'] = true;
    Header("Location: register.php");
}
