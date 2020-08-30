function err(){
    var ec = window.location.search;
if(ec=="?login"){
    var lcp = document.getElementById("lcp");
        lcp.style.visibility = 'visible';
} if(ec=="?err"){
    var lcp = document.getElementById("lcp");
        lcp.style.visibility = 'visible';
    var poperr = document.getElementById("poperr");
    poperr.style.visibility = 'visible';
}else{
    var poperr = document.getElementById("poperr");
    poperr.style.visibility = 'hidden';
}
if(ec=="?uar"){
    var freg = document.getElementById("regform");
    freg.style.visibility = 'visible';
    var errc = document.getElementById("poperr3");
    errc.style.visibility='visible'
}
    return ec
}
function clcp(){
        lcp.classList.remove("w3-animate-opacity");
        lcp.style.visibility = 'hidden';
        var poperr = document.getElementById("poperr");
    poperr.style.visibility = 'hidden';return true
}
function sreg(a){
       if(a==1){
        var freg = document.getElementById("regform");
    freg.style.visibility = 'hidden'
       }else{
        clcp();
        var freg = document.getElementById("regform");
        freg.classList.add("w3-animate-opacity");
    freg.style.visibility = 'visible'
       }
}
function clrf(){
        var freg = document.getElementById("regform");
        freg.style.visibility = 'hidden';
        freg.classList.remove("w3-animate-opacity");
        var errc = document.getElementById("poperr3");
        errc.style.visibility = 'hidden';
        return true
}
function aaaaa(){
    var errc = document.getElementById("poperr3");
          errc.style.visibility='hidden'
    var freg = document.getElementById("regform");
    freg.style.visibility = 'hidden';
    var lcp = document.getElementById("lcp");
        lcp.style.visibility = 'hidden';
    var form = document.getElementById("updateform");
       form.style.visibility='hidden';
}


function manage(){
var regex = /[!@#$%^&~*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
var regexs = /[ !#$%^&~*()+\=\[\]{};':"\\|,<>\/?]/g;
var cs = document.getElementById("rsenha2").value;
var c = document.getElementById("rsenha").value;
//var idade = document.getElementById("idade").value;
var nomes = document.getElementById("rnome").value;
//var peso = document.getElementById("peso").value;
//var altura = document.getElementById("altura").value;
var lblb = document.getElementById("warn2");
var lbl = document.getElementById("warn");
var rb1 = document.getElementById("male");
var efd = document.getElementById("mailcc").value;
var rb0 = document.getElementById("female");
var asd = 0;
var das = 0;
var dasa = containsSpecialCharacters(nomes,regex);
var dass = containsSpecialCharacters(efd,regexs);
var das = containsSpecialCharacters(c,regex);
if((rb0.checked == false)&&(rb1.checked==false)){
var kkkkkkkk = 0;
}else{
	var kkkkkkkk = 1;
}
if((das == true)||(dasa==true)||(dass==true)){
	lblb.innerHTML = ("Caracteres especiais não são permitidos.");
}else{
	lblb.innerHTML= ("");
}
if((c!=cs)&&(c!='')&&(cs!='')){
	lbl.innerHTML = "Senhas não correspondem";
	
}else{
	lbl.innerHTML = "";
	asd = 1;
}

if((c!='')&&(cs !='')&&(nome!='')&&(das==false)&&(dasa==false)&&(dass==false)&&(kkkkkkkk==1)&&(c==cs)){
	document.getElementById("regbtn").disabled = false;
}else{
	document.getElementById("regbtn").disabled = true;
}

}
function containsSpecialCharacters(str,regex){	
	return regex.test(str);
	}

function pmenu(arg){
	var perfil = document.getElementById("pmenu");
	if(arg=='show'){
		perfil.classList.add("w3-animate-opacity");
		perfil.style.visibility = 'visible';	
	}else{
		perfil.classList.remove("w3-animate-opacity");
	perfil.style.visibility = 'hidden';}
}
function vf(){
	var regex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
	var cs = document.getElementById("nome").value;
	var c = document.getElementById("senha").value;
	var dasa = containsSpecialCharacters(cs,regex);
	var das = containsSpecialCharacters(c,regex);
	if((das == true)||(dasa==true)){
		lblb.innerHTML = ("Caracteres especiais não são permitidos.");
	}else{
		lblb.innerHTML= ("");
	}
	if ((c!='')&&(cs !='')&&(das==false)&&(dasa==false)) {
		document.getElementById("log").disabled = false;
	return false
	 }
	 else {
		 document.getElementById("log").disabled = true;
		 return true
	 }
 }    
function atualizar_dados(action){
    var form = document.getElementById("updateform");
    if(action=="show"){ 
        GetUserName('close');
        form.classList.add("w3-animate-opacity");
        form.style.visibility='visible';
    }else{
        form.classList.remove("w3-animate-opacity");
        form.style.visibility='hidden';
    }
} 
function gimg(ehash){
    var pimg = document.getElementById("pimg");
    pimg.src="https://www.gravatar.com/avatar/"+ehash;
}

function updtformc(p2){
    var pw = valor_cookie('senha')
 if(pw==p2){
    var cwarn = document.getElementById("cwarn");
    var csform = document.getElementById("csform");
    var adform = document.getElementById("adform");
    csform.style.visibility="hidden";
    adform.style.visibility="visible";
    cwarn.innerHTML="";

   
 }else{
     var cwarn = document.getElementById("cwarn");
     cwarn.innerHTML="Senha incorreta.";
   
 }
}
function cria_cookie(nome, valor) {
     var data = new Date;
     data= data.getTime + 86400000;
     data = data.toUTCString;
     valor = encodeURI(valor);
     document.cookie = nome + '=' + valor + '; expires=' + data + '; path=/' +';SameSite=None; Secure';
     return data
}
function valor_cookie(nome_cookie) {
    var cname = nome_cookie;
    var cookies = document.cookie;
    if (cookies.indexOf(cname) == -1) {
        return false;
    }
    cookies = cookies.substr(cookies.indexOf(cname), cookies.length);
    if (cookies.indexOf(';') != -1) {
        cookies = cookies.substr(0, cookies.indexOf(';'));
    }
    cookies = cookies.split('=')[1];
    return decodeURI(cookies);
}
function logout(){
 apaga_cookie('senha');
 apaga_cookie('PHPSESSID');
 window.location.href = "logout.php";
}
function apaga_cookie(nome){
    var data = new Date(2010,0,01);
    data = data.toUTCString();
    document.cookie = nome + '=; expires=' + data + '; path=/';
}
