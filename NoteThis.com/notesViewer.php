<?php 
session_start();
if($_SESSION["email"]==null||$_SESSION["email"]==""){
  session_destroy();
  header("Location: index.php");
}
include("mongoFunct.php");                     
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>NoteThis.com</title>
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
      .imgbutt{
        margin-right: 0;
        padding: 1px;
        float:  right;
      }
      .noteLM{
       font-size: 10px; 
      }
      .noteText{
        max-width: 220px;
      }
      .ntitle{
        text-align: center;
        color: #1C1F5D;
      }
      .noteTitle{
        margin: 0;
        padding: 0;
        float: center;
      }
      .noteContent{
        background: #lightgrey;
        border:1px solid #e5e5e5; 
      }
      .note{ 
        max-width: 260px;
        padding: 10px 10px 10px;
        margin: 0 auto 5px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
        display: inline-block;
      }
      #user{
        width: 100px;
        float:left;
        color:white;
        font-size: 16px;
      }
      .notescreating{
        float:center;
      }
      .headerIcon,
      .notes{
        margin:20px;
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
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .navBar{
        position:fixed;
        top:0;
        right: 0;
        background: black;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
        width: 100%;
        padding: 0;
        margin: 0;
      }
      #crt{
      }
      #chng{
        float:right;
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
    <link href='../bootstrap/css/bootstrap-responsive.css' rel='stylesheet'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src='../bootstrap/js/html5shiv.js'></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='../bootstrap/ico/apple-touch-icon-144-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='../bootstrap/ico/apple-touch-icon-114-precomposed.png'>
      <link rel='apple-touch-icon-precomposed' sizes='72x72' href='../bootstrap/ico/apple-touch-icon-72-precomposed.png'>                <link rel='apple-touch-icon-precomposed' href='../bootstrap/ico/apple-touch-icon-57-precomposed.png'>
    <link rel='shortcut icon' href='../bootstrap/ico/favicon.png'>
  </head>

  <body>
    <div class="navBar">
      <p id='user'><?echo $user?></p>
      <a href="login.php" class="btn btn-primary" id="chng">Change User</a>
      <a href="index.php" class="btn btn-primary" id="chng">EXIT</a>
    </div>
    <div class='container'>
      <div class="notescreating">
        <div class="headerIcon">
          <img id="iconNoteThis_com" src="notethis_com.png">
        </div>
        <form method="post" action="addnote.php">
          <input type='text' class='input-block-level' placeholder="title" name="title" required>
          <textarea class='input-block-level' name="note"></textarea> 
          <button class='btn btn-large btn-primary' id="crt" type='submit' >Create</button>
        </form>
      </div>
        <?php CreateNotes($notes) ?>
    </div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='../bootstrap/js/jquery.js'></script>
    <script src='../bootstrap/js/bootstrap.js'></script>
    <script src='../bootstrap/js/bootstrap.min.js'></script>


  </body>
</html>;