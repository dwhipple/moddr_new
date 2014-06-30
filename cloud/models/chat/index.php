<?php
	//include functionality from model
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/chat/index.php');

	extract($_REQUEST); 

	if(!isset($userN)){

		$resp = array("status"=>"fail", "reason"=>"please send userN request header parameter")
		echo(json_encode($resp));
		return;  
	}

	if(!isset($mes)){

		$resp = array("status"=>"fail", "reason"=>"please send message request header parameter")
		echo(json_encode($resp));
		exit;  
	}

	if(!isset($action)){

		$resp = array("status"=>"fail", "reason"=>"please send action request header parameter")
		echo(json_encode($resp));
		exit; 

		switch($action){

			case "addGet";
				addGetChat($userN, $mes);

				
			break;
	
			default: 
				$resp = array("status"=>"fail", "reason"=>"please send userN request header parameter")
				echo(json_encode($resp));
				return;   

	}

?>