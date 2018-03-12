<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function getControl(author,msg,ts){
			var newCtrl = $(<div class= 'row'><span id = 'author'></span> <span id = 'ts'> </span><br /> <span id = 'msg'></span></div> );
			newCtrl.find("#author").html(author);
			newCtrl.find("#ts").html(ts);
			newCtrl.find("#msg").html(msg);
			return newCtrl;
		}
		function displayPosts(arrPosts){
			for (var i =0; i<arrPosts.length;i++){
				var post = arrPosts[i];
				var author = post["author"];
				var msg = post["msg"];
				var ts = post["ts"];
				var newCtrl = getControl(author,msg,ts);
				$("#container").append(newCtrl);
				}
								
			}
		function retrievePosts(){
							
			    $.post("servlets/db_ops.php",
			    {
				op: "getPosts"
			    },
			    function(data, status){
				var arrPosts = JSON.parse(data);
				displayPosts(arrPosts);
			    });
		}
		retrievePosts();
	</script>
</head>
<body>

<div class ="container" id = "container">
LIST.php
</div>

</body>
</html> 
