<h1>No autorizado</h1>
<p><a href="#" id="autorizar">Autorizar</a></p>
<script>
$('#autorizar').click(function(){
	<?php echo $app->facebook->btn_login("fb_cancel()","fb_cancel_permisions()","fb_succes()")?>
	return false;
});

function fb_cancel(){
	alert('Cancelo autorización');
}
function fb_cancel_permisions(){
	alert('Cancelo permisos');
}
function fb_success(){
	alert('Todo bien');
}
</script>