<?php
	include_once("db.php");

	
	
	function insertPost($Author, $Post){
		$Author = secure($Author);
		$Post = secure($Post);


		$q = "INSERT INTO elvistbl(author,msg) VALUES ('$Author','$Post')";
		executeSQL($q);
	}	

	function getPost(){
		$q = "SELECT * FROM elvistbl";
		$arr = executeSQL($q);
		return $arr;
		
	}
	
if(1==1){
	insertPost("Anika", "Evil in HOfstra");
	$array = getPost();
	print_r($array);
}
?>
