function mostrarSaludo(){

  var fecha = new Date(); 
  var hora = fecha.getHours();

  if(hora >= 0 && hora < 12){
    texto = "Buenos Días Estimado Usuario";
    imagen = "assets/img/dia.png";
  }

  if(hora >= 12 && hora < 18){
    texto = "Buenas Tardes Estimado Usuario";
    imagen = "assets/img/tarde.png";
  }

  if(hora >= 18 && hora < 24){
    texto = "Buenas Noches Estimado Usuario";
    imagen = "asset/img/noche.png";
  }

  document.images["tiempo"].src = imagen;

  document.getElementById('txtsaludo').innerHTML = texto;

}