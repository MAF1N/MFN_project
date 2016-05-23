<?php
session_start();
$mongo=new MongoClient("NoteThis.com");
$email=$_POST["email"];
$db=$mongo->test->users;
$pointer=$db->find();
$maxId=0;
foreach ($pointer as $obj) {
  $id=$obj["id"];
  if ($maxId<$id)
    $maxId=$id;
}
$maxId++;
$username=$_POST["username"];
$newUserToAdd=array("id"=>$maxId ,"username"=>$username, "e-mail"=>$email, "password"=>md5($_POST["password"]));
$db->insert($newUserToAdd);
$mongo->close();
header("Location: login.php");
?>