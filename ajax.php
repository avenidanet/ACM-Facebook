<?php
/**
 * ACM (facebook) Modulo para crear apps en Facebook.
 *
 * @author Brian Salazar [Avenidanet]
 * @link http://www.avenidanet.com
 * @copyright Brian Salazar 2006-2013
 * @license http://mit-license.org
 *
 */
if(isset($_POST["session"])){
	session_id($_POST["session"]);
	session_start();
}
include 'acore/acore.php';
include 'facebook/facebook.php';
$app = new acore();

if($app->facebook->authorized()){
	//User authorized
	A::log($app->facebook->user);
}else{
	echo "User not authorized.";
}
?>