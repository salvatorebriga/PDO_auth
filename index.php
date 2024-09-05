<!-- index.php -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Login e Registrazione</title>
</head>

<body>
    <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username" required>
        <br><br>
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>

    <hr>

    <h2>Registrazione</h2>
    <form action="register.php" method="post">
        <label for="register-username">Username:</label>
        <input type="text" id="register-username" name="username" required>
        <br><br>
        <label for="register-password">Password:</label>
        <input type="password" id="register-password" name="password" required>
        <br><br>
        <input type="submit" value="Registrati">
    </form>
</body>

</html>