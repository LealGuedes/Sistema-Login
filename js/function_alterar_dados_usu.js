$(function(){

	var array =[];
	function RedirecionaPaginaEdicao(array){

			window.location.href="login.inc.php?id="+array[]"";		
	}
	$("#altera-dados").click(function(){

			var email =$(this).attr("email-logado");

			$.ajax({

				type:"post",
				data:"email="+email,
				url:"../actions/lista-dados-edicao.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor....os dados passados foram"+email);
				},
				success:function(data){

						alert(" "+data);
						if(data.indexOf("not") != -1){// se encontrou 
							alert("Voce será redirecionado para a pagina de edicao dos dados!!!");
							array["id"] =data[0];
							array["name"] =data[1];
							array["email"] =data[2];
							array["password"] =data[3];
							RedirecionaPaginaEdicao(array);
						}else if(data.indexOf("not")= -1){ //encontrou

							alert("Nao foi encontrado os dados para realizar a edição!");
						}

				}

			});

			
	});
	

})
