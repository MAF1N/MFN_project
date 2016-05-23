<?php
session_start();
session_destroy();
header ("Content-Type: text/html; charset=utf-8");
echo "<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <!-- Le styles -->
    <link href='../bootstrap/css/bootstrap.css' rel='stylesheet'>
    <style type='text/css'>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        background-image: url('upfeathers.png');
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      h2{
        color:green;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type='text'],
      .form-signin input[type='email'],
      .form-signin input[type='password'] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
        <script src='checker.js'></script>
    <link href='../bootstrap/css/bootstrap-responsive.css' rel='stylesheet'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src='../bootstrap/js/html5shiv.js'></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='../bootstrap/ico/apple-touch-icon-144-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='../bootstrap/ico/apple-touch-icon-114-precomposed.png'>
      <link rel='apple-touch-icon-precomposed' sizes='72x72' href='../bootstrap/ico/apple-touch-icon-72-precomposed.png'>
                    <link rel='apple-touch-icon-precomposed' href='../bootstrap/ico/apple-touch-icon-57-precomposed.png'>
                                   <link rel='shortcut icon' href='../bootstrap/ico/favicon.png'>
  </head>

  <body>

    <div class='container'>
      <form class='form-signin' id='form' method='post' action='newUser.php'>
       <h2 class='form-signin-heading'>Register now</h2>
       <p class='text-error'></p>
        <input type='text' class='input-block-level' placeholder='Username' name='username' id='name' onblur='CheckName()'>
        <input type='email' class='input-block-level' placeholder='Email address' name='email' id='email' onblur='CheckEmail()'>
        <input type='password' class='input-block-level' placeholder='Password' id='ps' name='password' pattern='(?=^.{5,15}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$'>
        <input type='password' class='input-block-level' placeholder='Repeat Password' id='rps' name='rpassword' onblur='CheckPasswords()' pattern='(?=^.{5,15}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$''>
        <button class='btn btn-large btn-primary' type='submit' id='subButton' onmouseover='Checker()'>Register</button>
        <hr>
      <h2 align='center' class='form-signin-heading'>OR</h2>
        <hr>
      <a href='login.php' class='input-block-level' align='center'><h2>Log in</h2></a>
        </form>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='../bootstrap/js/jquery.js'></script>
    <script src='../bootstrap/js/bootstrap.js'></script>
    <script src='../bootstrap/js/bootstrap.min.js'></script>
  </body>
</html>";
?>