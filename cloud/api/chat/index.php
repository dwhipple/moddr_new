<?php

	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/main/index.php');

	Function addGetChat($userN, $mes){

		dbQuery("INSERT INTO chat (username, message) VALUES ('$userN', '$mes')");
		$chatHistory = dbMassData("SELECT * FROM chat ORDER BY timestamp DESC LIMIT 10")
		$resp = array("status"=>"success", "reason"=> "chat added", "data"=>chatHistory)

		return($resp);
	}
?>