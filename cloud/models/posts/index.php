<?php
	

	function getPosts(){
		$resp = file_get_content("http://simple-wjin.rhcloud.com/posts.json");
		return($resp);
	}

?>