<?php
	include_once("common.php");

//REMOVE ABOVE LATER
	$op = $_POST["op"];
	if ($op == "getPosts"){
		$arr = getPost();
		$s = JSON_encode($arr);
		print($s);
	}
	if ($op == "submitPost"){
		$author = $_POST["author"];
		$msg = $_POST["msg"];
		$arrSum = insertPost($author, $msg);
		$p = JSON_encode($arrSum);
		print($p);
	}

		
		

?>


