<?php
include("mongoFunct.php");
echo $notes->count()." notes found".'<br/>';
createNotes($notes);
?>