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
    <link rel="stylesheet" href="/admin/Assets/js/plugins/trumbowyg/ui/trumbowyg.min.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <title>Login</title>
</head>
<body>


<header class="main_header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 header_left">LOGO</div>
            <div class="col-md-9 header_right">
                <nav>
                    <ul class="main_menu">
                        <a href="/admin"><li><i class="fa fa-home" aria-hidden="true"></i><?= $lang->dashboardMenu['home'] ?></li></a>
                        <a href="/admin/pages"><li><i class="fa fa-file-text" aria-hidden="true"></i><?= $lang->dashboardMenu['pages'] ?></li></a>
                        <a href="/admin/posts"><li><i class="fa fa-pencil" aria-hidden="true"></i><?= $lang->dashboardMenu['posts'] ?></li></a>
                        <a href="/admin/settings"><li><i class="fa fa-cog" aria-hidden="true"></i><?= $lang->dashboardMenu['settings'] ?></li></a>
                    </ul>
                    <div class="admin_logout">
                        <a href="/admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>