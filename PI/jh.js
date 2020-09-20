var ehe;
var pwk =0;
var ewk = 0;
var ppw = 0;
var paw=0;
function err(){
   if((valor_cookie("senha")=="")){  
    var ec = window.location.search;
 if(ec=="?err"){
    var poperr = document.getElementById("poperr");
    poperr.innerHTML = "Usuário não encontrado";
    poperr.style.visibility = 'visible';
}else{
    var poperr = document.getElementById("poperr");
    poperr.style.visibility = 'hidden';
}
if(ec=="?uar"){
    var errc = document.getElementById("poperr3");
    errc.style.visibility='visible'
}
    return ec
}
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
          var errca = document.getElementById("poperr");
          errca.style.visibility='hidden'
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
var lblb = document.getElementById("poperr");
var lbl = document.getElementById("poperr");
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
    lblb.style.visibility="visibility";
	lblb.innerHTML = ("Caracteres especiais não são permitidos.");
}else{
    lblb.style.visibility="hidden";
	lblb.innerHTML= ("");
}
if((c!=cs)&&(c!='')&&(cs!='')){
    lbl.style.visibility="visibility";
	lbl.innerHTML = "Senhas não correspondem";
	
}else{
    lbl.style.visibility="hidden";
	lbl.innerHTML = "";
	asd = 1;
}

if((c!='')&&(cs !='')&&(nome!='')&&(das==false)&&(dasa==false)&&(dass==false)&&(kkkkkkkk==1)&&(c==cs)){
	document.getElementById("regbtn").disabled = false;
}else{
	document.getElementById("regbtn").disabled = true;
}
return lbl
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
     var lblb = document.getElementById("poperr"); 
	if((das == true)||(dasa==true)){
        lblb.innerHTML = ("Caracteres especiais não são permitidos.");
        lblb.style.visibility = "visible";
	}else{
        lblb.innerHTML= ("");
        
        lblb.style.visibility = "hidden";
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

function gimg(ehash){
   
    var pimg = document.getElementById("pimg");
    pimg.src="https://www.gravatar.com/avatar/"+ehash;
    var pimg2 = document.getElementById("pimg2");
    pimg2.src="https://www.gravatar.com/avatar/"+ehash;
    var pimg3 = document.getElementById("pimg3");
    pimg3.src="https://www.gravatar.com/avatar/"+ehash+"?s=20";
}

function updtformc(p2){
    var pw = valor_cookie('senha');
    var cwarn = document.getElementById("cwarn");
 if(pw==p2){
    var csform = document.getElementById("csform");
    var adform = document.getElementById("adform");
    cwarn.style.visibility = "hidden";
    csform.style.visibility="hidden";
    adform.style.visibility="visible";
    cwarn.innerHTML="";
    ehe=1;
   
 }else{
     
     cwarn.style.visibility = "visible";
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
  async function getapi() { 
      
    const response = await fetch(window.location.pathname); 
      var apidata = await response; 
      console.log(apidata); 
        sleep(250);
      if (response) { 
          hideSpinner(); 
       
          if(window.location.pathname=="pi/produtos.php"){
          slider();
        }
          err();
          return window.location.pathname
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
        document.getElementById('corpo').classList ="corpo w3-animate-opacity";
        document.getElementById('corpo').style.visibility ="visible";
    }  
    function slider(){
        var slide1 = document.getElementsByClassName("carousel-item");
        slide1[0].classList += " active";
        return slide1[0];
    }

    function sliderc(action){
        if(action == "close"){
            document.getElementsByClassName("carousel-caption")[1].classList +=" hidden";
            document.getElementsByClassName("carousel-caption")[0].classList +=" hidden";
            document.getElementsByClassName("carousel-indicators")[0].classList +=" hidden";
        }else{
            document.getElementsByClassName("carousel-caption")[1].classList.remove("hidden");
            document.getElementsByClassName("carousel-caption")[0].classList.remove("hidden");
            document.getElementsByClassName("carousel-indicators")[0].classList.remove("hidden");
        }
    }
    function msgbv(){
        document.getElementById("jumbo").classList += " hidden";
    }