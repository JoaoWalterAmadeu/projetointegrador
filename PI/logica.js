function gdiaria(objetivo, peso, altura, idade, sexo, pe){
  var cci=0, tmb=0;
if(sexo == 0){
      var tmb = 655,1 + (1,8* altura) + (9,5 * peso) + (4,7 * idade);
      if(pe==1){
        var tmb1 = tmb * 0,3;
        tmb = tmb + tmb1;
      }

}else{
  var tmb = 66,5 + (5*altura) + (13,8 * peso) +(6,8* idade);
  if(pe==1){
    var tmb1 = tmb * 0,3;
    tmb = tmb + tmb1;
  }
}
  if(objetivo == 0){
    var cci = tmb - 250;
  }
  if(objetivo==1){
    var cci = tmb;
  }
  if(objetivo == 2 ){
    var cci = tmb +250;
  }
  document.getElementById('tmbp').innerhtml = tmb;
  document.getElementById('ccip').innerhtml = cci;
}
