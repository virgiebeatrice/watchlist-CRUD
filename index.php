<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css?v=<?php echo time(); ?>">
</head>
<body>

    <div class="form-wrapper">
        <h2>Login</h2>
        <form method="POST" action="./php/login.php">

        <div class="form-control">
            <input type="text" name="username" required>
            <label for="username">Username</label>
        </div>

        <div class="form-control">
            <input type="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <button type="submit">Login</button> 
        </form>
    </div>
    
</body>
</html>