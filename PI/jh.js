
function manage(){
var cs = document.getElementById("senha2").value;
var c = document.getElementById("senha").value;
var idade = document.getElementById("idade").value;
var nome = document.getElementById("nome").value;
var peso = document.getElementById("peso").value;
var altura = document.getElementById("altura").value;
var lbl = document.getElementById("warn");
var lblb = document.getElementById("warnb");
var rb1 = document.getElementById("male");
var rb0 = document.getElementById("female");
var asd = 0;
var das = 0;
var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
var dasa = containsSpecialCharacters(nome,regex);
var das = containsSpecialCharacters(c,regex);
if((rb0.checked == false)&&(rb1.checked==false)){
var kkkkkkkk = 0;
}else{
	var kkkkkkkk = 1;
}
if((das == true)||(dasa==true)){
	lblb.innerHTML = ("Caracteres especiais não são permitidos.");
}else{
	lblb.innerHTML= ("");
}
if((c!=cs)&&(c!='')&&(cs!='')){
	lbl.innerHTML="Senhas não correspondem";
}else{
	lbl.innerHTML="";
	asd = 1;
}
	if ((altura != '')&&(c!='')&&(cs !='')&&(idade !='')&& (nome!='')&&(peso!='')&&(altura!='')&&(asd==1)&&(das==false)&&(dasa==false)&&(kkkkkkkk==1)) {
		   document.getElementById("regbtn").disabled = false;
        }
        else {
            document.getElementById("regbtn").disabled = true;
        }
    }    
	function containsSpecialCharacters(str,regex){
		return regex.test(str);
	}

function pmenu(arg){
	var perfil = document.getElementById("pmenu");
	if(arg=='show'){
		perfil.style.visibility = 'visible';	
	}else{
	perfil.style.visibility = 'hidden';}
}