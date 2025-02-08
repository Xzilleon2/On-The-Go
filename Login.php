<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginStyles.css">
    <title>ON THE GO</title>
</head>
<body>
    <header>
        <div class="banner">
            <label><h1>LOGO</h1></label>
            <label><a href="">Help</a></label>
            <label><a href="">Contact Us</a></label>
            <label><a href="">About Us</a></label>
            <label><a href="">Sign up</a></label>
            <label>Icon</label>
        </div>
    </header>
        <div class="wrapper">
            <div class="form">
                <H1>WELCOME BACK!</H1>
                <label for="">Don't have an account? <a href="">Sign up</a></label>
                <form action="" class="container" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                    <div class="remember">
                        <label id="remember me">
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </label>
                        <a href="">Forgot Password?</a>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="image">
                <label for="">IMAGE</label>
            </div>
        </div>   
</body>
</html>