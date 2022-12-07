<?php
session_name('MEINEEIGENESESSION');
session_start(); // Zugriff auf Session geben
$sessioncheck = true;
$sessionlifetime = 20; // 20 Sekunden

// zuerst loginstatus prüfen
if( !isset($_SESSION['isloggedin']) ){
	// achtung, der user ist nicht eingeloggt
	$sessioncheck = false; 
}

$aktuellerUseragent = $_SERVER['HTTP_USER_AGENT'];
if( !isset($_SESSION['useragent']) || $_SESSION['useragent'] !== $aktuellerUseragent ){
	// achtung, der user ist nicht eingeloggt
	$sessioncheck = false; 
}
$aktuelleIP = $_SERVER['REMOTE_ADDR'];
if( !isset($_SESSION['userip']) || $_SESSION['userip'] !== $aktuelleIP ){
	// achtung, der user ist nicht eingeloggt
	$sessioncheck = false; 
}

if( !isset($_SESSION['timestamp']) || $_SESSION['timestamp'] < time()-$sessionlifetime ){
	// session zu alt / zu lange inaktiv
	$sessioncheck = false; 
}

// ist die session ok oder nicht?
if( $sessioncheck == false ){
	// Session ID erneuern
	session_regenerate_id(); 
	
	// session einträge löschen (stattdessen die ganze Session löschen geht auch, aber nur, wenn nicht noch andere Infos drin stehen, die erhalten bleiben sollen, wie z.b. der Warenkorb...)
	unset($_SESSION['isloggedin']);
	unset($_SESSION['useragent']);
	unset($_SESSION['userip']);
	unset($_SESSION['timestamp']);
	
	header("Location: login.php");
	exit(); // script abbrechen
}

// am schluss, wenn sessionprüfung erfolgreich
$_SESSION['timestamp'] = time(); // timestamp erneuern
session_regenerate_id(); // Session ID erneuern
$x = true;

echo '<pre>';
print_r( $_SESSION );
echo '</pre>';
?>
<h3 class="el-title">Willkommen im Geschützen Bereich</h3>    
