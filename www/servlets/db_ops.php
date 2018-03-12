<?php
	include_once("common.php");
//TEST CODE
	$_POST["op"] = "submitPost";
	$_POST["author"] = "evil";
	$_POST["msg"] = "lksjflksjdf";
//REMOVE ABOVE LATER
	$op = $_POST["op"];
	if ($op == "getPosts"){
		$arr = getPosts();
		$s = JSON_encode($arr);
		print($s);
	}
	if ($op == "submitPost"){
		$author = $_POST["author"];
		$msg = $_POST["msg"];
		$arrSum = submitPost($author, $msg);
		$p = JSON_encode($arrSum);
		print($p);
	}

		
		

?>


