//Funções da pagina Index
function FuncIndex(){
    $("#btnLongin").click(function(){
        window.location.href = "view/pages/login.php";
    })
}


 
function FuncLogin(){
	$("#btnEntrar").click(function(){
		let check = "";
		let user =	$("#campuser").val();
		let senha = $("#campsenha").val();
		$("#validationServer03Feedback").css({"display":"none"});
		if($("#checkLembrarMim").is(':checked')){check="sim";}else{check="nao";}
		if(user && senha !=""){
			 $.ajax({
            	url: "../../controller/login.php?f=login",
            	data: "user="+user+"&senha="+senha+"&check="+check, 
            	type: "POST",
            	cache: false,
            	beforeSend: function(){
                  
            	},
            	success: function(response){
                	if(response == "Error: Login ou senha não encontrado!"){
						$("#validationServer03Feedback").css({"display":"block"});
                	}else if(response == "Logado"){
                        window.location.href = "home.php";
                    }else{
                		alert(response);
            		}
            	}
       	 	});
		}
		
	});

}
function funcCadastro (){
    maskTelefone();

    $(".btnCadastro").click(function(){
        if(VerificarCampCadastro()){

        }
    })

}

function funcNovoEvento(){
    $("#inputTipoEvento").change(function(){
        if($(this).val() == "CR"){
            $(".labelNomeDele").text("Nome do papai");
            $(".labelNomeDela").text("Nome da mamãe");
            $(".divNomeBebe").show();
            $(".NovoEventoConteudo").show();
            $('#novoEventoConvite').css("padding-top", "215px"); 
            $('#novoEventoConvite').css("background-image", "url(../../img/chaRevelecao.png)");
            ConfigTenaNovoEventoChaRevelacao();
        }else{
            $(".NovoEventoConteudo").hide();
            $(".divNomeBebe").hide();
        }
    })
   

   
}


function ConfigTenaNovoEventoChaRevelacao(){
    $("#inputNomeDele,#inputNomedoBebe,#inputNomeDele,#inputNomeDela").keydown(function(){
        $("#conteudoEventoConvite").html(
            '<center>'+
                '<h1 class="fontPadraoSite">CHÁ REVELAÇÃO</h1>'+
                '<p class="width90">Estamos ansiosos para saber o sexo do nosso bebê, convidamos você para esse momento tao especial onde saberemos se é um menino ou menina!</p>'+
                '<p>os nomes ja sabemos será:'+$("#inputNomedoBebe").val()+'</p>'+
                '<h2 class="fontPadraoSite">NO DIA</h2>'+
                '<h1 class="fontPadraoSite"></h1>'+
                '<p>Os papais: '+$("#inputNomeDela").val()+' && '+$("#inputNomeDele").val()+' </p>'+
                '<p>contam com a sua presença</p>'+
            '</center>'
        );
       
    })
}

function VerificarCampCadastro(){
    
    inputNome
inputEmail
inputuser
inputPassword
inputPassword4
inputNasminto
inputTelefone
inputSexo
}

//Classs mascara de telefone
function maskTelefone(){
    $(".telefoneMask").mask("(99) 9999-9999?9").focusout(function(event){
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-999?9");  
        } else {  
            element.mask("(99) 9999-9999?9");  
        }  
    });
}
     