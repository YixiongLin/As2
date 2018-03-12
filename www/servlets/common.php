<?php
	include_once("db.php");

	
	
	function insertPost($Author, $Post){
		$Author = secure($Author);
		$Post = secure($Post);


		$q = "INSERT INTO elvistbl(author,Post ) VALUES ('$author','$Post')";
		executeSQL($q);
	}	

	function getPost(){
		$q = "SELECT * FROM elvistbl";
		$arr = executeSQL($q);
		return $arr;
		
	}
	
if(1==1){
	insertPost("m2", "mini me");
	$array = getPost();
	print_r($array);
}
?>
