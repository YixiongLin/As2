<?php
	include_once("db.php");

	//common utility
	
	function insertPost($Author, $Post){
		$Author = secure($Author);
		$Post = secure($Post);
		
		$q = "INSERT INTO elvistbl(Author, Post) VALUES ('$Author', '$Post')";
		executeSQL($q);
	}	

	function getPosts(){
		$q = "SELECT * FROM elvistbl";
		$arr = executeSQL($q);
		return $arr;
		
	}

if(1==1){
	insertPost('Elvis', 'in Avalon');
	$arr = getPosts();
	print_r($arr);
}
?>
