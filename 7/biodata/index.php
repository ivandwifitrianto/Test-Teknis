<center>
<head>
	<title>BPS Kota Bandar Lampung </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>BPS Kota Bandar Lampung</h2></center>
	<img src="logobps.png" alt="BPS" height="72" width="92">
	<br/>
	<div class="login">
	<br/>
		<form action="" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<a href="http://localhost/bpsserver/1/index.php" type="submit">Login</a>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (usernmae != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>