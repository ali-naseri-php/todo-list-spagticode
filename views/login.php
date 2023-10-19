<?php
include '../bootstrop/init.php'

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo login;?></title>
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body id="body1">
<form action="../libs/new-log.php" method="post">
<div class="form-structor" style="margin-left: 400px">
	<div class="signup">
		<h2 class="form-title" id="signup">new login</h2>
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name"name="name" />
			<input type="email" class="input" placeholder="Email" name="email"/>
			<input type="password" class="input" placeholder="Password" name="pass"/>
		</div>
		<button class="submit-btn" type="submit">start</button>
	</div></form>
<form action="../libs/login-old.php" method="post">
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span></span>Log in</h2>
			<div class="form-holder">
				<input type="email" class="input" placeholder="Email" name="email"/>
				<input type="password" class="input" placeholder="Password" name="pass"/>
			</div>
			<button class="submit-btn" type="submit" >Log in</button>
		</div>
	</div>
</div>
</form>

  <script  src="../assets/js/script.js"></script>

</body>
</html>
