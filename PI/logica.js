function gdiaria(objetivo, peso, altura, idade, sexo, pe){
  var cci=0;
if(sexo == 0){
      var tmb =  (((6.25* altura) + (10 * peso) - (5 * idade))-161);
      if(pe==1){
        var tmb1 = tmb * 2.25;
        tmb = tmb1;
      }

}else {
  var tmb = (((6.25* altura) + (10 * peso) - (5 * idade))+5);
  if(pe==1){
    var tmb1 = tmb * 2.25;
    tmb = tmb1;
  }
}
if(objetivo == 1){
    var cci = tmb-250;
  }
  if(objetivo==2){
    var cci = tmb;
  }
  if(objetivo == 3){
    var cci = tmb +250;
  }
  return (cci)

}
