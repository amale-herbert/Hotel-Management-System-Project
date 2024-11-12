<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Search Rooms</title>
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
        <h1>Search for Rooms</h1>
        <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Enter room type or date" required>
            <button type="submit">Search</button>
        </form>
    </div>
</body>
</html>