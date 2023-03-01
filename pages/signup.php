<?php	
	ini_set('display_errors', 'on');
	ini_set("auto_detect_line_endings", true);

	require('../actions/users/signupAction.php');
	    $errorMsgColor = '#aqua';
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body>
<!-- SIGNUP NAVBAR -->
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

    <!-- SIGN UP FORM -->
	<form class="container" method="POST">

		<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

		<div class="mb-3">
			<label for="exampleInputLastname" class="form-label"><p>Lastname</p></label>
			<input type="text" class="form-control" name="lastname">
		</div>

		<div class="mb-3">
			<label for="exampleInputFirstname" class="form-label"><p>Firstname</p></label>
			<input type="text" class="form-control" name="firstname" id="exampleInputFirstname">
		</div>  

		<div class="mb-3">
			<label for="exampleInputMiddlename" class="form-label"><p>Middlename</p></label>
			<input type="text" class="form-control" name="middlename" id="exampleInputMiddlename">
		</div>  

		<div class="mb-3">
			<label for="exampleInputNationality" class="form-label"><p>Nationality</p></label>
			<input type="text" class="form-control" name="nationality" id="exampleInputNationality">
		</div>

		<div class="mb-3">
			<label for="exampleInputPseudo" class="form-label"><p>Pseudo</p></label>
			<input type="text" class="form-control" name="pseudo">
		</div>

		<div class="mb-3">
			<label for="exampleInputEmail" class="form-label"><p>Mail address</p></label>
			<input type="email" class="form-control" name="emailaddress">
		</div>		

		<div class="mb-3">
			<label for="exampleInputOccupation" class="form-label"><p>Occupation</p></label>
			<input type="text" class="form-control" name="occupation">
		</div>
		
		<div class="mb-3">
			<label for="exampleInputCity" class="form-label"><p>City</p></label>
			<input type="text" class="form-control" name="city">
		</div>

		<div class="mb-3">
			<label for="exampleInputNativeLanguage" class="form-label"><p>Native Language</p></label>
			<input type="text" class="form-control" name="nativelanguage">
		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label"><p>Password</p></label>
			<input type="password" class="form-control" name="mdp">
		</div>		

	<button type="submit" class="btn btn-primary" name="validate">Subscribe</button><br></br>

    <!-- SUBSCRIBE REDIRECTION -->
	<a href="login.php"><p>I already have an account. I register now</p></a>
	</form>

</body>
<br>
<?php include '../includes/footer.php'; ?>
</html>