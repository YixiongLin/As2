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
		function submitPost(){
			var author = $("#author").val();
			var msg = $("msg").val();
			
			    $.post("servlets/db_ops.php",
			    {
				op: "sumbitPost"

		
				author: author,
				location: msg,
				 

			    });
		}
	</script>
</head>
<body>

<div class="container" action ="list.php">
	Name: <br>
	<input type="author" id="author"> <br />
	Where is Dr.Evil<br>
	<input type="msg" id="msg"> <br />
	Click to report:
	<button id="btnSubmit" onclick="document.getELementById('author', 'msg').innerHTML=submitPost()">Click to report</button>
	
</div>

</body>
</html> 
