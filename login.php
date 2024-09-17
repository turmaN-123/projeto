<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Cadastro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
    <div class="logo">
            <img src="img/logo1.png" alt="" width="200">
        </div>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="cozinha.php">Cozinha</a></li>
                <li><a href="cama.php">Cama, Mesa e Banho</a></li>
                <li><a href="ferramentas.php">Ferramentas</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="tablets.php">Tablets</a></li>
                <li><a href="eletronicos.php">Eletrônicos</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" name="login-email" required>
                <label for="login-password">Senha:</label>
                <input type="password" id="login-password" name="login-password" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="signup-form">
            <h2>Cadastre-se</h2>
            <form>
                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="signup-email" required>
                <label for="signup-password">Senha:</label>
                <input type="password" id="signup-password" name="signup-password" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    <footer>
        <p> A FAZER </p>
    </footer>
</body>
</html>