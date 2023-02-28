<?php 
    ini_set('display_errors', 'on');
	ini_set("auto_detect_line_endings", true);

	require('../actions/users/loginAction.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body>
<!-- LOGIN NAVBAR -->
<nav class="navbar navbar-dark bg-dark">  <!-- Navbar content -->
<div class="container">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Welcome Dear</a>
    </div>
  </nav>
</div>
</nav>

<br></br>
    <!-- LOGIN FORM -->
	<form class="container" method="POST">

		<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

		<div class="mb-3">
			<label for="exampleInputPseudo" class="form-label"><p>Pseudo</p></label>
			<input type="text" class="form-control" name="pseudo">
		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label"><p>Password</p></label>
			<input type="password" class="form-control" name="mdp">
		</div>

	<button type="submit" class="btn btn-primary" name="validate">Log in</button><br></br>

    <!-- SUBSCRIBE REDIRECTION -->
	<a href="signup.php"><p>You don't have any account ? Create one by clicking on this link</p></a>
	</form>

</body>
<br>
<?php include '../includes/footer.php'; ?>
</html>
