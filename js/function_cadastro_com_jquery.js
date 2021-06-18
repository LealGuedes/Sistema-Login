$(function(){

	var dados=[];
	function RedirecionaPaginaInicial(){
			
		window.location.href="login.inc.php";		
	}
	function realizaCadastro(dados){

				alert("Foi disparado a função que realiza o cadastro.");
				var n =dados["name"];
				var e= dados["email"];
				var pwd= dados["password"];
				var b = dados["btn"];
				$.ajax({

				type:"post",
				data:"name="+n+"&email="+e+"&password="+pwd+"&btn="+b,
				url:"../actions/cadastra.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servido");
				},
				success:function(data){

						alert(" "+data);
						if(data.indexOf("ok") != -1){//encontrou
							alert("cadastro realizado com sucesso!!Voce será redirecionado para a Tela de Login");
								RedirecionaPaginaInicial();
						}else if(data.indexOf("not")!= -1){//encontrou
							alert("Não foi possivel realizar o cadastro!");

						}else if(data.indexOf(0)!= -1){//encontrou

							alert("HOVE algum erro de execução da INSTRUCAO SQL!!");
						}

				}

			});

	}
	$("#btn-cad").click(function(){

			alert("cliquei no botao para Cadastrar...");
			var name = $("#name").val();
			var email=$("#email").val();
			var password=$("#password").val();
			var b=$(this).attr("name");

			//var btnLogin = $(this).attr("name");

			$.ajax({

				type:"post",
				data:"email="+email,
				url:"../actions/valida.php",
				dataType:"json",
				beforeSend:function(){

						alert("Aguardando um retorno do servidor....os dados passados foram"+email);
				},
				success:function(data){

						alert(" "+data);
						if(data.indexOf("ok") != -1){//encontrou
							alert("Email ja está em uso, informe outro para realizar o cadastro");
						}else if(data.indexOf("not")!= -1){//encontrou
							
							dados["name"]=name;
							dados["email"]=email;
							dados["password"]=password;
							dados["btn"]=b;

							realizaCadastro(dados);

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
						if(data.indexOf("ok") != -1){//!=-1 :encontrou, ==-1:nao encontrou
							alert("Voce será redirecionado para a pagina inicial!!!");
							RedirecionaPaginaInicial();
						}else if(data.indexOf("not")!= -1){//!=-1 :encontrou, ==-1:nao encontrou
							alert("Erro ao tentar sair da pagina!")

						}
				}

			});

	});
});