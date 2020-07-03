<?php

	session_start();

//	print_r($_SESSION['user']);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div>
			<img src="<?php $_SESSION['user']['picture']; ?>" class="" id=""  width=50 height=50>
		</div>
		<div>

			<p><strong>User Name:<?php echo $_SESSION['user']['name']; ?></strong></p>
			<p><strong>Email:<?php $_SESSION['user']['email']; ?></strong></p>
			<p><strong>Gender:<?php $_SESSION['user']['gender']; ?></strong></p>
			<p><strong>Link:<?php $_SESSION['user']['pagelink']; ?></strong></p>

		</div>
		<div>
			<a href="logout.php">Logout</a>
		</div>


	</div>

</body>
</html>