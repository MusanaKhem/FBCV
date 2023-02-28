<?php
session_start();
require('../actions/database.php');

// Forms validate SignupAction
if(isset($_POST['validate'])){
		
	//We verify if the user have correctly complete all reserved spaces
	if(!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['middlename']) AND !empty($_POST['nationality']) AND !empty($_POST['pseudo']) AND !empty($_POST['emailaddress']) AND !empty($_POST['occupation']) AND !empty($_POST['city']) AND !empty($_POST['nativelanguage']) AND !empty($_POST['mdp'])){

		//Here user's data enter by user to sign up on website
		$user_lastname = htmlspecialchars($_POST['lastname']);
		$user_firstname = htmlspecialchars($_POST['firstname']);
		$user_middlename = htmlspecialchars($_POST['middlename']);
		$user_nationality = htmlspecialchars($_POST['nationality']);
		$user_pseudo = htmlspecialchars($_POST['pseudo']);
		$user_emailaddress = htmlspecialchars($_POST['emailaddress']);
		$user_occupation = htmlspecialchars($_POST['occupation']);
		$user_city = htmlspecialchars($_POST['city']);	
		$user_nativelanguage = htmlspecialchars($_POST['nativelanguage']);
		$user_password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	
		
		//We verify if the user already exists in the website database
		$checkIfUserAlreadyExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
		$checkIfUserAlreadyExists->execute(array($user_pseudo));

		//Verify if data were correctly getted
		if($checkIfUserAlreadyExists->rowCount() == 0){

			// Insert user (new user's data) in BDD
			$insertUserOnWebsite = $bdd->prepare('INSERT INTO users(lastname, firstname, middlename, nationality, pseudo, emailaddress, occupation, city, nativelanguage, mdp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$insertUserOnWebsite->execute(array($user_lastname, $user_firstname, $user_middlename, $user_nationality, $user_pseudo, $user_emailaddress, $user_occupation, $user_city, $user_nativelanguage, $user_password));

			// Recover user's infos (user who is already on the database)
			$getInfosOfThisUserReq = $bdd->prepare('SELECT id, lastname, firstname, middlename, nationality, pseudo FROM users WHERE emailaddress = ? AND  lastname = ? AND  firstname = ? AND  middlename = ? AND nationality = ? AND pseudo = ?');
			$getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_middlename, $user_nationality, $user_pseudo));

			// Authenticate user on website and recover his data in global's variables
			$usersInfos = $getInfosOfThisUserReq->fetch();

			//Authenticate user on website and recover his data from the website database
			$_SESSION['auth'] = true;
			$_SESSION['id'] = $usersInfos['id'];
			$_SESSION['lastname'] = $usersInfos['lastname'];
			$_SESSION['firstname'] = $usersInfos['firstname'];
			$_SESSION['middlename'] = $usersInfos['middlename'];
			$_SESSION['nationality'] = $usersInfos['nationality'];
			$_SESSION['pseudo'] = $usersInfos['pseudo'];

			// Redirected user to the home page
			header('Location: ../index.php');

		// Error message if new user "X" choose a same pseudo of another user "Y" (when user "Y" is already register in the database)
		}else{
			$errorMsg = "This user already exists on the website";
		}

	// Error message if new user didn't complete all fields
	}else{
		$errorMsg = "Please complete all fields ...";
	}
}
