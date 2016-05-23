<?php
session_start();
include("mongoFunct.php");
//echo $_POST["id"] . "     " . $_POST['noteId'], $db;
DeleteNote($_POST["id"],$_POST["_id"],$db);
$mongo->close();
header("Location: notesViewer.php");
?>