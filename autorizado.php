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