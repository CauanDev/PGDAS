<?php
  session_start();
if(empty($_SESSION))
{
    print "<script>location.href='index.php'</script>";
}



include("funcs.php");
include("config.php");
if (isset($_SESSION['registro_sucesso']) && $_SESSION['registro_sucesso'])
{
    echo "<script>var condicaoConcluida = true;</script>";
    $_SESSION['registro_sucesso'] = false;
}
else
{
    echo "<script>var condicaoConcluida = false;</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script scr="scripts/register.js"></script>
</head>


<body>
    <div class="alert alert-success" role="alert"id="find" data-bs-dismiss="alert" style ="display:none;position:fixed;z-index: 9999;text-align: center;
    align-items: center;
    width: 100%;">
        <h4 class="alert-heading">Senha alterada com sucesso!</h4>
        <hr>
    </div>
    <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Cadastrar Senha</h3>
                    </div>
                    <div class="card-body">
                    <form action="registrar.php" method="POST">
                        <div>
                            <div class="mb-3">
                                <input type="text" name="cpf" class="form-control" oninput="formatarCPF(this)" placeholder="Digite seu CPF" required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="password" name="senha" class="form-control" placeholder="Digite uma senha" id = "senha" onclick="verificar()" required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="password" name="senha1" class="form-control" placeholder="Digite novamente" id = "senha1" onclick="verificar()" required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Digite seu email" required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Digite seu nome" onclick="validarNome(this)" required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                            <select class="form-select form-select-sm" name="city" aria-label="Large select example" required>
                            <option selected>Escolha a sua Cidade</option>
                            <?php
                                foreach ($opcoes as $opcao) {
                                echo "<option value='$opcao'>$opcao</option>";
                            }
                            ?>
                            </select>
                            </div>
                        </div>


                        <div class="botao">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<script> 
    var elemento = document.getElementById('find');
    function formatarCPF(input) 
    {

        let cpf = input.value.replace(/\D/g, '');
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
        input.value = cpf;
    }
    if(condicaoConcluida)
    {
        elemento.style.display = 'block';
    }
    else
    {
        elemento.style.display = 'none';
    }

</script>";