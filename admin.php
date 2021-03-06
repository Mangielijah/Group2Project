<!DOCTYPE html>
<html>
<head>
	<title>Group 2 project</title>
	<link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header id="main-header">
	<div class="container-fluid">
		<div class="row center-md center-xs center-sm center-lg">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 end-lg end-md end-sm end-xs">
				<img src="images/logo.png" class="logo of site" alt="logo of site">
			</div>
		</div>
	</div>
	<div class="container" id="login-box">
		<div class="row center-md center-xs center-sm center-lg">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div id="login-section" class="">
					<form method="post" action="login.php">
						<div class="input-field">
							<div class="field">
								<span class="fa fa-envelope"></span>
								<input type="text" name="username" placeholder="username or e-mail" required>
							</div>
							<div class="field">
								<span class="fa fa-lock"></span>
								<input type="password" name="password" placeholder="password..." required>
							</div>
						</div>
						<p class="forgot end-xs end-sm end-md end-lg">forgotten password?</p>
						<div class="submit-field">
							<button type="submit" class="login-button"><? echo'LOG IN'; ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 center-xs center-sm center-md center-lg">
					<p class="footer-text">&copy; <?php echo '2018 - CSC 214 GROUP 2' ?></p>
					<p style="font-size:10px;"><?php echo 'Albert, Romaric, Wilson, Romario, Tipa, Elijah, Steve, Marius, Elenor'?></p>
				</div>
			</div>
		</div>
	</footer>
</header>
</body>
</html>