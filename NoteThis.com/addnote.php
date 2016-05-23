<?php
session_start();
include("mongoFunct.php");
AddNewNote($_POST["title"],$_POST["note"],$db,$id);
$mongo->close();
header("Location: notesViewer.php");
?>