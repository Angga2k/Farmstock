<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../../style/log-reg-style.css">
</head>
<body>
    <div class="container">
        <div class="regis">
            <div class="flex-row">
                <div class="flex-col">
                    <div class="header">
                        <div class="work-sans title">Get Started✌</div>
                        <div class="poppins-light sub-title">Login to your account? <span><a href="./LoginPage.php" class="link-sign-in poppins-bold">Sign In</a></span></div>
                    </div>
                    <div class="sign-up-form">
                        <form action="register.php" method="post">
                            <div class="form-group">
                                <div class="flex-col">
                                    <label for="username" class="poppins-regular" style="font-size: 14px;">username:</label>
                                    <input type="text" name="username" id="username" class="form-input" placeholder="jhon dean">
                                </div>
                                <div class="flex-col">
                                    <label for="email" class="poppins-regular" style="font-size: 14px;">email:</label>
                                    <input type="email" name="email" id="email" class="form-input" placeholder="jhon@mail.com">
                                </div>
                                <div class="flex-col">
                                    <label for="password" class="poppins-regular" style="font-size: 14px;">password:</label>
                                    <input type="password" name="password" id="password" class="form-input" placeholder="********">
                                </div>
                            </div>
                            <button type="submit" class="button-sign-up poppins-bold">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="image-reg">
                <img src="../../Assets/Regis.jpg" alt="" class="regis-img">
            </div>
        </div>
    </div>
</body>
</html>