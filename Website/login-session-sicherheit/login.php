<?php
session_name('MEINEEIGENESESSION'); // vom standard abweichen
session_start(); // Zugriff auf Session geben
echo session_name();

$username = 'terry@bytekultur.net';
$passwort = 'test1234';

// formular abgeschickt?
if ( isset($_POST['username']) && isset($_POST['password']) ) {
	if( $_POST['username'] == $username && $_POST['password'] == $passwort ){
		// Loginstatus speichern
		$_SESSION['isloggedin'] = true;
		$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION['userip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['timestamp'] = time();
		
		echo 'du bist eingeloggt';
	}else{
		$errormessage = 'Benutzername oder passwort nicht korrekt';
		echo $errormessage;
	}
}

?>
<h3 class="el-title">Login</h3>    
<form id="login-form-16" action="" method="post">
	<div class="uk-margin">
		<input class="uk-input" type="text" name="username" size="18" placeholder="Benutzername">
	</div>
	<div class="uk-margin">
		<input class="uk-input" type="password" name="password" size="18" placeholder="Passwort">
	</div>
	<div class="uk-margin">
		<button class="uk-button uk-button-primary" value="Einloggen" name="Submit" type="submit">Einloggen</button>
		<a href="registration.php" class="uk-button uk-button-primary">Registrieren</a>
	
	</div>
</form>