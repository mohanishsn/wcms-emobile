<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Speed</title>
</head>
<body>
	<input type="email" id="email_area" />
	<input type="submit" id="done" value="Check" />

	<script type="text/javascript">

		var email = document.getElementById("email_area");
		var dontbtn = document.getElementById("done");

		email.focus();

		var lengthOfEmail = 0;
		var start_time = 0;
		var end_time = 0;

		email_area.onkeyup = function() {
			//alert(lengthOfEmail);
			lengthOfEmail++;
			if (lengthOfEmail==1)
				start_time = new Date();
			else
				end_time = new Date().getTime() - start_time;
		}

		dontbtn.onclick = function() {
			alert("Email Length: "+lengthOfEmail);
			alert("Time: "+end_time+" ms");
		}
	</script>
</body>
</html>