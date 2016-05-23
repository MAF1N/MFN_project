<?php
session_start();
$mongo=new MongoClient('NoteThis.com');
$db=$mongo->test;
$email=$_POST["email"];
$userColl=$db->users->findOne(array("e-mail"=>$email));
if ($userColl==null) echo "null";
else if (md5($_POST['password']) == $userColl['password'])
{
  $_SESSION['username'] = $userColl['username'];
  $_SESSION['email'] = $userColl['e-mail'];
  if (isset($_POST['remember']))
  {
    setcookie('username',$userColl['username'],time() + 86400 , '/');
    setcookie('email',$userColl['e-mail'],time() + 86400 , '/');
  }
  header("Location: notesViewer.php");
}
else
{
  $_SESSION['logMsg']='Wrong password';
  header("Location: login.php");
}
$mongo->close();
?>