<?php
session_start();
$mongo=new MongoClient('NoteThis.com');
$db=$mongo->test;
$email=$_SESSION["email"];
$userColl=$db->users->findOne(array("e-mail"=>$email));
$user=$userColl['username'];
$id=$userColl['id'];
$notes=$mongo->test->notes->find(array("id"=>$id));
function AddNewNote($title, $note, $db, $id){
	$date=date('d.m.Y H:i:s');
	$db->notes->insert(array("id"=>intval($id),"title"=>$title, "datem"=>$date,  "note"=>$note));
}
function DeleteNote($id,$noteId,$db){
	$db->notes->remove(array("id"=>intval($id), "_id"=>new MongoId($noteId)));
}
function createNotes($notes){
	if ($notes->count()>0){
	foreach ($notes as $obj) { 
	    $arr[] = "
	    <div class='note'>
	    	<div class='noteTitle'> 
			    <form method='post' action='deleteNote.php'>
			    	<input type='text' style='display: none' name='id' value='".$obj['id']."'>
			    	<input type='text' style='display: none' name='_id' value='".$obj['_id']."'>
			    	<button class='imgbutt' type='submit'><img src='delete-icon.jpg'></button>
			    </form>	
	    	</div> 
			<div class='noteContent'>
				<p class='ntitle'> ". $obj['title'] ."</p>
				<p align='right' class='noteLM'>last-modified:  ". $obj['datem'] ." </p> 
		    	<textarea class='noteText' readonly>" . $obj['note'] . "</textarea>
		    </div>
	    </div>"; 
	}
	foreach($arr as $obj)
	{
		echo $obj;
	}
}
}
$mongo->close();
?>