$(function(){


		alert("Olaa#02");
		var btnClicked = document.getElementsByTagName("button"); 
		var id;
		var name;
		var email;
		for(var i=0;i<btnClicked.length;i++){

				btnClicked[i].addEventListener("click",function(){

						//recupera para edicao:ok
						id =this.getAttribute("codUsu");
						
					alert("O elemento que corresponde ao botão que foi clicado possui o codigo:"+id+"e o pai dele eh:"+pai);
				})
		}

})
