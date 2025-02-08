<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignupStyles.css">
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
                <H1>SIGN UP</H1>
                <label for="">Already got an account? <a href="Login.php">Login</a></label>
                <form action="" class="container" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                    <label for="classification">Classification</label>
                    <div class="classification">
                        <label for="Visitor">
                            <input type="radio" id="Visitor" name="classification" value="Visitor">Visitor
                        </label>
                        <label for="Owner">
                            <input type="radio" id="Owner" name="classification" value="Owner">Owner
                        </label>
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