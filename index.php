<?php
/**
 * Demo ACM (facebook) Modulo para crear apps en Facebook.
 *
 * @author Brian Salazar [Avenidanet]
 * @link http://www.avenidanet.com
 * @copyright Brian Salazar 2006-2013
 * @license http://mit-license.org
 *
 */

include 'acore/acore.php';
include 'facebook.php';
$app = new acore;
$config = Settings::Init();
?>
<!doctype html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php A::script('jquery,angular');?>
</head>
<body>
<?php 
$app->facebook->header();

if($app->facebook->info('liked')){
	
	$fb = new Facebook(array(
		'appId'  => $config->fb_apikey,
		'secret' => $config->fb_secret
	));

	if($app->facebook->authorized($fb)){
		include 'autorizado.php';
 	}else{
		include 'no_autorizado.php';
 	}
}else{
	include 'no_liker.php';
}

$app->facebook->footer();?>	
</body>
</html>