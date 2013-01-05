<h1>No autorizado</h1>
<p><a href="#" id="autorizar">Autorizar</a></p>
<script>
$('#autorizar').click(function(){
	<?php echo $app->facebook->btn_login("alert(5)","alert(6)",'alert(7)')?>
	return false;
});
</script>