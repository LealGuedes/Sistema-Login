$(function(){


	function redirecionarPaginaCadastro(){

			window.location.href="cadastro.inc.php";	
	}
	$("#btnAlterar").click(function(e){

			alert("cliquei no botao para Alterar os dados do usuario");
			e.preventDefault();
			var idHidden=$("#idHidden").val();
			var name = $("#name").val(); 
			var email=$("#email").val();
			var password=$("#password").val();
			var btnAlterar = $(this).attr("name");

			//debugger
			$.ajax({

				type:"post",
				data:"email="+email+"&password="+password+"&name="+name+"&idHidden="+idHidden+"&btnAlterar="+btnAlterar,
				url:"../actions/alterar_remover.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor....os dados passados foram"+email+""+password+""+name+""+idHidden+""+btnAlterar);
				},
				success:function(data){

						if(data.indexOf("ok") != -1){//encontrou
							
							alert("Dados Alterados com sucesso!!!");
							
						}else if(data.indexOf("not")!= -1){//encontrou
							alert("NAO foi possivel Alterar os dados");

						}else if(data.indexOf("error")!= -1){//encontrou

							alert("HOVE algum erro de execução da SQL!!");
						}

				}

			});

		});
	$("#btnDelete").click(function(e){

			alert("cliquei no botao para EXCLUIR os dados do usuario");
			e.preventDefault();
			var idHidden=$("#idHidden").val();
			var btnDelete = $(this).attr("name");

			//debugger

			$.ajax({

				type:"post",
				data:"idHidden="+idHidden+"&btnDelete="+btnDelete,
				url:"../actions/alterar_remover.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor....os dados passados foram"+idHidden);
				},
				success:function(data){

						if(data.indexOf("ok") != -1){//encontrou
							
							alert("Dados EXCLUIDOS com sucesso!Voce será redirecionado para a pagina de cadastro!");
							redirecionarPaginaCadastro();
							
						}else if(data.indexOf("not")!= -1){//encontrou
							alert("NAO foi possivel EXCLUIR os dados"+data);

						}else if(data.indexOf("error")!= -1){//encontrou

							alert("HOVE algum erro de execução da SQL!!"+data);
						}

				}

			});

		});
});