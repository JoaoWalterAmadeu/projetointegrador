var ehe;
var pwk =0;
var ewk = 0;
var ppw = 0;
var paw=0;
function err(){
   if((valor_cookie("senha")=="")){
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
}}
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
    var form2 = document.getElementById("adform");
    if(action=="show"){ 
        GetUserName('close');
        form.classList.add("w3-animate-opacity");
        form.style.visibility='visible';
        if(ehe==1){
            form2.style.visibility='visible';
        }
    }else{
        form.classList.remove("w3-animate-opacity");
        form.style.visibility='hidden';
        form2.style.visibility='hidden';
    }
} 
function gimg(ehash){
    var pimg = document.getElementById("pimg");
    pimg.src="https://www.gravatar.com/avatar/"+ehash;
    var pimg2 = document.getElementById("pimg2");
    pimg2.src="https://www.gravatar.com/avatar/"+ehash;
    var pimg3 = document.getElementById("pimg3");
    pimg3.src="https://www.gravatar.com/avatar/"+ehash+"?s=30";
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
    ehe=1;
   
 }else{
     var cwarn = document.getElementById("cwarn");
     cwarn.innerHTML="Senha incorreta.";
   
 }
}
function cria_cookie(nome, valor) {
     valor = encodeURI(valor);
     document.cookie =nome + '=' + valor +';SameSite=None; Secure;'+ '; path=/' 
     return  document.cookie
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
function actupdt(){
    var csen2 = document.getElementById("csen").value;
    var p2 = md5(md5(csen2));
     updtformc(p2); 
     return p2;
}
function uli(inn){
 if(inn=="email"){
    var rem = ewk%2;
     var cem = document.getElementById("mail");
     if(rem==1){
        cem.disabled=true;
        ewk++;
        cem.required = false;
     }else{
    ewk++;
    cem.disabled=false;
    cem.required = true;
}
return ewk
 }

 if(inn=="pw"){
    var mpw = pwk%2;
    var pw=document.getElementById("cpwc");
    var pwc=document.getElementById("cpw");

    if(mpw==1){
        pw.disabled="disabled";
        pwc.disabled="disabled";
        pw.value="";
        pwc.value="";
        pw.required = false;
        pwc.required = false;
        pwk++;
    }
    else{
    pw.disabled = false;
    pwc.disabled = false;
    pw.required = true;
    pwc.required = true;
     pwk++;
    }
    return pwk
 }
  if(inn=="peso"){
    var mpw = ppw%2;
    var pw=document.getElementById("peso");
    if(mpw==1){
        pw.disabled="disabled";
        pw.value="";
        ppw++;
        pw.required = false;
    }
    else{
    pw.disabled = false;
     ppw++;
     pw.required = true;
    }
    return ppw
 }
 if(inn=="altura"){
    var mpw = paw%2;
    var pw=document.getElementById("altura");
   
    if(mpw==1){
        pw.disabled="disabled";
        pw.value="";
        paw++;
        pw.required = false;
    }
    else{
    pw.disabled = false;
     paw++;
     pw.required = true;
    }
    return paw
 }

}
function updtmng(){
    var mpw = pwk%2;
    var pw=document.getElementById("cpwc").value;
    var pwc=document.getElementById("cpw").value;
    var upbtn = document.getElementById("upbtn");
    var cwarn = document.getElementById("cwarn");
    if((pw!=pwc)&&(mpw==1)){
        cwarn.style.visibility="visible";
        cwarn.innerHTML="As senhas precisam ser iguais";
        upbtn.disabled=true;
    }else{
        cwarn.style.visibility="hidden";
        cwarn.innerHTML="";
        upbtn.disabled=false;
    }
}
function dropdown() {
    var x = document.getElementById("dropdown");
    var ddb = document.getElementById("dda");
    var dda = document.getElementById("ddb");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.className +=' w3-animate-top';
      dda.className -=" fas fa-caret-down hvr-icon";
      dda.className +=" fas fa-caret-up hvr-icon";
      ddb.className -= " fwd w3-btn  hvr-icon-hang ";
      ddb.className +=" fwd w3-btn  hvr-icon-bob ";
    } else { 
      x.className = x.className.replace(" w3-show", "");
      sleep(200);
      ddb.className = ddb.className.replace(" fwd w3-btn hvr-icon-bob ", " fwd w3-btn fas hvr-icon-hang ");
      dda.className = dda.className.replace(" fas fa-caret-up hvr-icon", " fas fa-caret-down hvr-icon ");
      x.className = x.className.replace(" w3-animate-top", "");
    }
  }
  async function getapi() { 
    const response = await fetch("index.php"); 
      var apidata = await response; 
      console.log(apidata); 
        sleep(250);
      if (response) { 
          hideSpinner(); 
          err();
      } 
    }
    function sleep(milliseconds) {
      const date = Date.now();
      let currentDate = null;
      do {
        currentDate = Date.now();
      } while (currentDate - date < milliseconds);
    }
    function hideSpinner() { 
        document.getElementById('spinner').style.display = 'none';
        document.getElementById('overlay').classList ="carregado";
        document.getElementById('corpo').classList ="w3-blue-grey w3-animate-opacity";
        document.getElementById('corpo').style.visibility ="visible";
    }  