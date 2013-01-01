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
include 'facebook/facebook.php';
$app = new acore;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body>
<?php $app->facebook->header();?>

<?php if($app->facebook->info('liked')){?>

	<h1>Liker</h1>
	
	<?php if($app->facebook->authorized()){?>
		<h1>Autorizado</h1>
		<p></p><a href="#" id="save">Salvar usuario</a>
		<?php A::log($app->facebook->user)?>
		<script>
		$('#save').click(function(){
			$.ajax({
				   url: "ajax.php",
				   type: "POST",
				   data: {	session: '<?php echo(session_id());?>'}
				});
			return false;
		});
		</script>
	<?php }else{?>
		<h1>No autorizado</h1>
		<p><a href="#" id="autorizar">Autorizar</a></p>
		<script>
		$('#autorizar').click(function(){
			<?php echo $app->facebook->btn_login("alert(5)","alert(6)",'alert(7)')?>
			return false;
		});
		</script>
	<?php }?>
	
<?php }else{?>
	<h1>No liker</h1>
<?php }?>

<?php $app->facebook->footer();?>	
</body>
</html>