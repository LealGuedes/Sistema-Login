$(function(){

	function RedirecionaPaginaInicial(){

				
		window.location.href="login.inc.php";		
	}
	function RedirecionaPaginalogado(){

			window.location.href="pagina01.inc.php";
	}
	$("#btnLogin").click(function(){

			alert("cliquei no botao para logaaarrrr....");
			var email=$("#email").val();
			var password=$("#password").val();
			//var btnLogin = $(this).attr("name");

			$.ajax({

				type:"post",
				data:"email="+email+"&password="+password,
				url:"../actions/valida_login.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor....os dados passados foram"+email+""+password);
				},
				success:function(data){

						alert("O retorno foiii...... "+data);
						if(data.indexOf("ok") != -1){//encontrou
							alert("Voce será redirecionado para a pagina!!!");
							RedirecionaPaginalogado();
						}else if(data.indexOf("not")!= -1){//encontrou
							alert("NAO foi encontrado nenhum usuario com esses dados!Tente Novamente!")

						}else if(data.indexOf("error")!= -1){//encontrou

							alert("HOVE algum erro de execução da SQL!!");
						}

				}

			});


	});

	$("#btn-sair").click(function(){

			alert("cliquei no botao para sair...");
			var btnSair=$("#btn-sair").attr("name");
			$.ajax({

				type:"post",
				data:"btn-sair="+btnSair,
				url:"../actions/logout.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor!"+btnSair);
				},
				success:function(data){

						alert(" "+data);
						if(data.indexOf("ok") != -1){//encontrou
							alert("Voce será redirecionado para a pagina inicial!!!");
							RedirecionaPaginaInicial();
						}else if(data.indexOf("not")!= -1){//encontrou
							alert("Erro ao tentar sair da pagina!")

						}
				}

			});


	});
});