<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6901f7f8d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="box">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h2>Login</h2>
        <form action="/Test/login.php" method="post">
            <div class="inputbox">
              <i class="fa fa-user-circle"></i>
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="inputbox">
                <i class="fa fa-key" ></i>
                <input type="password" name="password" required>
                <label>Password</label>

            </div>
            
           <button class="sighup" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>Login
            </button>
        </form>
    </div>
</body>

</html>