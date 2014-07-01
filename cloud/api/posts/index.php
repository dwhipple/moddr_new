<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/models/blog/index.php');

	$resp = getPosts();
	echo($resp);

?>