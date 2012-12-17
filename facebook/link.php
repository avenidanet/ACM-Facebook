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

include '../acore/acore.php';
$app = new acore(1);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ACM (facebook) | ACore Simple framework php</title>
	<style>
	* {margin: 0; padding: 0}
	body {font-family: Arial}
	a {text-decoration: none;display: block; width: 200px; height: 30px; line-height: 30px; text-align: center; background: #ddd;-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px; color: #666; margin: 40px auto}
	a:hover {background: #eee; }
	</style>
</head>
<body>
	<div id="container">
	<?php echo $app->facebook->install();?>
	</div>
</body>
</html>