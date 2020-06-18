<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/style/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="container-background">
            <div class="sign-up-info">
                <h2>Don't have an account?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore necessitatibus officia quas quos soluta. Amet, nihil </p>
                <button type="submit" id="register">Sign Up</button>
            </div>
            <div class="login-info">
                <h2>Have an account?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur  </p>
                <button type="submit" id="login">Login</button>
            </div>
        </div>

        <div class="register-popup" id="registerDiv">
            <div class="register-form">
                <div class="logo">
                    <h2>Sign Up</h2>
                    Logo
                </div>
                <div class="form">
                    <?php if(isset($error)) :?>
                        <p class="red"><?php echo $error?></p>
                    <?php endif?>
                    <form action="/register" method="post">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" id="name" name="name">
                        <label for="user-email">Email<span>*</span></label>
                        <input type="email" id="user-email" name="email">
                        <label for="user-password">Password<span>*</span></label>
                        <input type="password" id="user-password" name="password">
                        <div class="buttons">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="login-popup" id="loginDiv">
            <div class="login-form">
                <div class="logo">
                    <h2>Login</h2>
                    Logo
                </div>
                <div class="form">
                    <form action="/login" method="post">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" id="email" name="email">
                        <label for="password">Password<span>*</span></label>
                        <input type="password" id="password" name="password">
                        <div class="buttons">
                            <button type="login">Login</button>
                            <a href="">Forgot?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<!--    <script src="jquery-3.5.1.min.js"></script>-->
    <script>
        var loginBtn = document.getElementById("login");
        var registerBtn = document.getElementById("register");

        loginBtn.onclick = function() {
            document.getElementById("loginDiv").style.display = "flex";
            document.getElementById("registerDiv").style.display = "none"
        };

        registerBtn.onclick = function() {
            document.getElementById("registerDiv").style.display = "flex";
            document.getElementById("loginDiv").style.display = "none"
        };

    </script>
</body>
</html>