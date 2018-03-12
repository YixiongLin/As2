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
			
			    $.post("servlets/data_ops.php",
			    {
				op: "sumbitPost"
		
				author: author,
				location: msg,
				time: ts, 

			    },
			    function(data, status){
				if(data=="ok"){
					window.location = "inbox.php";
				}else{
					alert("ERROR!");
				}
			    });
		}
	</script>
</head>
<body>

<div class="container">
	<form action ="/list.php">
	Name: <br>
	<input type="author" id="author"> <br />
	Where is Dr.Evil<br>
	<input type="msg" id="msg"> <br />
	<input type="time" id="ts"><br />
	Click to report:
	<button id="btnSubmit" onclick="submitPost()"></button>
	</form>
</div>

</body>
</html> 
