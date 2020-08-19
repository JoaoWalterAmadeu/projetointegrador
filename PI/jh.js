
function manage(){
var cs = document.getElementById("senha2").value;
var c = document.getElementById("senha").value;
var idade = document.getElementById("idade").value;
var nome = document.getElementById("nome").value;
var peso = document.getElementById("peso").value;
var altura = document.getElementById("altura").value;
var lbl = document.getElementById("warn");
var asd = 0;
if((c!=cs)&&(c!='')&&(cs!='')){
	lbl.innerHTML="Senhas não correspondem";
	
}else{
	lbl.innerHTML="";
	asd = 1;
}
	if ((altura != '')&&(c!='')&&(cs !='')&&(idade !='')&& (nome!='')&&(peso!='')&&(altura!='')&&(asd==1)) {
		   document.getElementById("regbtn").disabled = false;
        }
        else {
            document.getElementById("regbtn").disabled = true;
        }
    }    
