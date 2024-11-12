<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="about.php"><b>About</b></a></li>
            <li><a href="pricing.php"><b>Pricing</b></a></li>
            <li><a href="search.php"><b>Search</b></a></li>
            <li><a href="login.php"><b>Sign Up/Login</b></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php" style="color: lightblue;">Sign Up</a></p>
    </div>
</body>
</html>