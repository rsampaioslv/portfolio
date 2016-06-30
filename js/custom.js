$('document').ready(function(){
	$("#logar").click(function(){
		var data = $("#login-form").serialize();
		$.ajax({
			type: 'POST';
			url: 'login.php';
			data: data;
			dataType: 'json';
			beforeSend: function(){
				$("#logar").html('Validando...');
			},
			success: function(response){
				if(response.codigo == "1"){
					$("#logar").html('Entrar');
					window.location.href = "logado.php";
				}else{
					$("#logar").html('Entrar');
					$("#mensagem").html('<strong>ERRO!</strong>'+response.mensagem);
				}
			}
		});
	});
});