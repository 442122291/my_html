<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">


    <title>我的博客</title>

    <!-- Bootstrap core CSS -->
    <link href="/my_html/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/my_html/Public/css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/my_html/Public/css/blog.css" rel="stylesheet">



    <script src="/my_html/Public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <form class="form-signin" role="form" action='<?php echo U("User/doLogin");?>' method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input                  name="Username" class="form-control" placeholder="Username/Email" required autofocus>
        <input type="Password" name="Password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me

            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" name="dl"  type="submit">Sign in</button>
        <div class="btn-group pull-left" ><a class="btn" href='<?php echo U("User/register");?>'>register</a></div>


    </form>

</div> <!-- /container -->