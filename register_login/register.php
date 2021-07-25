<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_register.css">
    <title>Welcome to Inkflix</title>
</head>
<body>
    <div class="container">
        <div class="block">
            <img src="..\assets\default-monochrome.svg" alt="logo">
            <h2> Sign Up </h2>
            <input type="text" name="firstName" placeholder="First Name" required>
            <input type="text" name="lastName" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="pno" placeholder="Phone no." required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password2" placeholder="Confirm Password" required>
            <input type="submit" value="SUBMIT">
            <a href="login.php">Already have an account? Login in</a>
        </div>
    </div>
</body>
</html>