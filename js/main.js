'use strict'
let templateAlgo;

fetch('js/templates/algo.handlebars')
.then(response => response.text())
.then(template => {
    templateAlgo = Handlebars.compile(template); // compila y prepara el template

    getAlgo();
});

function getAlgo() {
  let ID = document.querySelector(".ALGOID")
    fetch("api/Algo"+ID)
    .then(response => response.json())
    .then(jsonAlgo => {
        mostrarAlgo(jsonAlgo);
    })
}

function mostrarAlgo(jsonAlgo){
  let context = { // como el assign de smarty
        algo: jsonAlgo,
        otra: "admin"
    }
    let html = templateTareas(context);
    document.querySelector("#jsonAlgo-container").innerHTML = html;
}
//TENES QUE CAMBIAR LOS AGLO POR TUS COSAS DE LA BBDD
//REVISA URLS PARA TU api
//EN EL TEMPLATE QUYE CREE MIRALO Y CAMBIA POR LO QUE TRAIGAS DE TU BBDD
//TE LA COMES
//CUANDO LO TENGAS HACEMOS EL CREAR, YO TODAVIA EN PROCESO CON ESO
//YA TENES EL DE IMAGENES? TE LO PUEDO ROBAR? NO LO HICE PORQUE NO LO ENTIENDO
