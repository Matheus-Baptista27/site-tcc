<?php

include ('conn.php');

session_start();

// Suponha que você tenha uma função para validar o usuário
function authenticate($username, $password) {
    // Substitua isso pela sua lógica de autenticação, como verificar em um banco de dados.
    return $username === 'usuario' && $password === 'senha';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticate($username, $password)) {
        // Defina a sessão do usuário se a autenticação for bem-sucedida
        $_SESSION['user'] = $username;
        header('Location: index.php'); // Redireciona para index.php
        exit();
    } else {
        echo "<script>alert('Usuário ou senha inválidos.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a9a9a9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #77a0d8;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #77a0d8;
            outline: none;
        }

        .btn-login {
            width: 100%;
            padding: 0.75rem;
            background-color: #77a0d8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #a0c4e1;
        }

        @media (max-width: 500px) {
            .login-container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login"><a href="index.php"></a>Entrar</button>
        </form>
    </div>

</body>
</html>

