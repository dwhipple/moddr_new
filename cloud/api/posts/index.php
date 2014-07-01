<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/models/posts/index.php');
 
	$resp = getPosts();
	echo($resp);

?>