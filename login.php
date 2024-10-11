<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="valida.php">
            <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="nome" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>
            <button type="submit" class="btn-login"><a href="cadastro-admin.php"></a>Entrar</button>
        </form>
    </div>

</body>
</html>

