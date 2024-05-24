<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="views/style/log-reg-style.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="flex-row">
                <div class="image-log">
                    <img src="views/assets/Regis.jpg" alt="" class="login-img">
                </div>
                <div class="flex-col">
                    <div class="header">
                        <div class="work-sans title">Welcome!✌</div>
                        <div class="poppins-light sub-title">Don't have an account? <span><a href="/Farmstock/register" class="link-sign-in poppins-bold">Sign Up</a></span></div>
                    </div>
                    <div class="sign-up-form">
                        <form action="login" method="post">
                            <div class="form-group">
                                <div class="flex-col">
                                    <label for="email" class="poppins-regular" style="font-size: 14px;">Email:</label>
                                    <input type="email" name="email" id="email" class="form-input" placeholder="jhon@mail.com">
                                </div>
                                <div class="flex-col">
                                    <label for="password" class="poppins-regular" style="font-size: 14px;">Password:</label>
                                    <input type="password" name="password" id="password" class="form-input" placeholder="********">
                                </div>
                            </div>
                            <a href="../../Dashboard/DashboardPage.php">
                                <button type="submit" class="button-sign-up poppins-bold">Sign In</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>