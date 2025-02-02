<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Forget Password Form</title>
    <link rel="stylesheet" href="forgotpass.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title">
                Forgot Password
            </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="reset_password.php" method="post" class="forgot-password">
                    <div class="field">
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="field btn">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
