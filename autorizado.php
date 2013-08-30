<h1>Autorizado</h1>
<p>Llamado asíncronico</p>
<a href="#" id="save">Salvar usuario</a>
<hr />
<p>Usuario:</p>
<?php A::log($app->facebook->user)?>
<hr />
<p>Botones de compartir</p>
<a href="#" id="btn_invite">Invitar</a> | <a href="#" id="btn_share">Compartir</a>
<script>
$('#save').click(function(){
	$.ajax({
		   url: "ajax.php",
		   type: "POST",
		   data: {	session: '<?php echo(session_id());?>'}
		});
	return false;
});

$('#btn_invite').click(function(){
	FB.ui({method: 'apprequests',
		message: 'Texto de la invitacion'
	}, callback_invite);
	return false;
});

function callback_invite(response){
	alert(response);
}

$('#btn_share').click(function(){
    var obj = {
            method: 'feed',
            link: 'link',
            picture: 'imagen',
            name: 'name',
            caption: 'caption',
            description: 'description'
          };
	FB.ui(obj, callback_share);
	return false;
});

function callback_share(response){
	alert(response);
}
</script>