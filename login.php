<?php
include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $cpf = str_replace(['.', '-'], '', $_POST["cpf"]);
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE cpf = ? AND senha = ?";
    $prp = $conn->prepare($sql);
    if($prp)
    {
        $prp->bind_param("ss", $cpf,$senha);
        $prp->execute();

        $result = $prp->get_result();
        if($result->num_rows > 0)
        {
            header("dashboard.php");
            $conexao->close(); 
        }
        else{
            echo 0;
            $conexao->close(); 
        }
        
    }
}