<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/admin/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/Assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/Assets/css/login.css">
    <link rel="stylesheet" href="/admin/Assets/css/animate.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <title>Login</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="login_wrapper">
            <form action="/admin/auth" method="post" class="form_login col-md-12 animated fadeInDown">
                <div class="label_wrapper"><div class="form_label"><h5>Login form</h5></div><div id="triangle-up"></div></div>
                <label for="login"><i class="fa fa-user icon_user" aria-hidden="true"></i></label>
                <input id="login" type="text" name="login" class="login" placeholder="Login">
                <label for="password"><i class="fa fa-lock icon_lock" aria-hidden="true"></i></label>
                <input id="password" type="password" name="password" class="password" placeholder="Password">
                <div class="remember_box">
                    <input type="checkbox" name="remember" class="remember" id="remember" value="remember">
                    <label class="remember_text" for="remember">Remember me .</label>

                </div>
                <input type="submit" name="login_submit" value="Enter" class="login_submit">
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
</body>
</html>
