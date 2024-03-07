
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Digite o seu CPF</label>
        <input type="name" name= "cpf"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Digite a sua senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name = "senha"required>
    </div>
    <button type="submit" class="btn btn-primary">Acessar</button>
    </form>    
</body>
</html>

