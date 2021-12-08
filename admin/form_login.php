<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo: Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
    <main class="d-flex align-items-center justify-content-center h-100">
        <form id="login-form" class="row py-5 px-4 rounded bg-primary" action="login.php" method="POST">
            <h1>Entrar</h1>
            <div class="mb-3 col-12 px-0">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            
            <div class="mb-3 col-12 px-0">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********">
            </div>

            <div class="col-12 mx-0 px-0 text-center">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>
        </form>
    </main>
</body>
</html>