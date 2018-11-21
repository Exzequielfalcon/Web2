'use strict'
let templateComentario;
document.addEventListener("load", cargar);
document.querySelector(".refresh").addEventListener("click", cargar);

function cargar(){
  fetch('js/template/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templatecomentarios = Handlebars.compile(template);
      getComentarios();
    });
}

function getComentarios() {
    let ID = document.querySelector('#id_prod').getAttribute("data");
    console.log(ID);
    fetch("api/comentarios/"+ID)
    .then(r => r.json())
    .then(jsonO => {
        mostrarComentarios(jsonO);
    })
}
function mostrarComentarios(jsonO){
  let admin = document.querySelector(".admin").getAttribute("data");
     console.log(admin);
     if (admin==="admin") {
       admin = 0;
     }
     else {
       admin = 1;
     }
     console.log(admin);
     let context = {
         comentarios: jsonO,
         esadmin: admin
     }
     let html = templatecomentarios(context);
     document.querySelector("#comentarios").innerHTML = html;
     let b = document.querySelectorAll(".borrar");

     b.forEach(b=> {b.addEventListener("click",function(){borrar(b.getAttribute("data"))});
        });
}
//TENES QUE CAMBIAR LOS AGLO POR TUS COSAS DE LA BBDD
//REVISA URLS PARA TU api
//EN EL TEMPLATE QUYE CREE MIRALO Y CAMBIA POR LO QUE TRAIGAS DE TU BBDD
//TE LA COMES
//CUANDO LO TENGAS HACEMOS EL CREAR, YO TODAVIA EN PROCESO CON ESO
//YA TENES EL DE IMAGENES? TE LO PUEDO ROBAR? NO LO HICE PORQUE NO LO ENTIENDO
