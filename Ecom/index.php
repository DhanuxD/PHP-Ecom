<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="signup.js"></script>
    
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <!--login-->
            <form id="login" class="input-group">
                <input type="email" class="input-field" placeholder="Enter your email" required><br>

                <input id = "password" type="password" class="input-field" placeholder="Enter your password" required>
                <span onclick="toggle()"><i class="fa fa-eye logeye" aria-hidden="true"></span></i> <br>

                <input type="checkbox" name="checkbox" class="check-box">
                <label for="checkbox" class="label">Remember me</label>
                <button type="submit" class="submit-btn">Login</button>
            </form>

            <!--Register-->
            <form id="register" class="input-group">
                <input id="user_name_id" name="user_name" type="text" class="input-field" placeholder="Enter your name" required><br>
                <input id="user_email_id" type="user_email" class="input-field" placeholder="Enter your email" required><br>

                <input name="user_password" type="password" id = "passwordr" class="input-field" placeholder="Enter your password" required>
                <span onclick="toggler()"><i class="fa fa-eye regieye" aria-hidden="true"></i></span><br><br><br>

              <!--  <input type="checkbox" name="checkbox" class="check-box">  
                <label for="checkbox" class="label">Remember me</label> -->
                <button onclick="userRegister();"class="submit-btn regi">Register</button>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>