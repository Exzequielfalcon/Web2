'use strict';
let templateComentario;
//document.addEventListener("load", cargar);
document.querySelector(".refresh").addEventListener("click", cargar);
document.querySelector(".comentar").addEventListener("click", comentar);


function cargar(){
  console.log("entrso ");
  fetch('js/template/comentario.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentario = Handlebars.compile(template);
      getComentarios();
    });
}

function getComentarios() {
    let ID = document.querySelector('.id_prod').getAttribute("data");
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
         useradmin: admin
     }
     let html = templateComentario(context);
     document.querySelector("#comentarios").innerHTML = html;
     let b = document.querySelectorAll(".borrar");

     b.forEach(b=> {b.addEventListener("click",function(){borrar(b.getAttribute("data"))});
        });
}

function borrar(id){
  console.log("borrar");
  console.log("Id comentarios" +id);
  fetch("api/comentarios/"+id,  {
                   method: 'DELETE',
                    headers: {'Content-Type': 'application/json'},
                    })
                    .then(r => cargar())
    }

  function comentar(){
  let ID = document.querySelector('.id_prod').getAttribute("data");
  let crearComentario = {
    "comentario": document.querySelector(".comentario").value,
    "id_producto": ID,
    "id_usuario": document.querySelector(".admin").getAttribute("data-id")
  }
  console.log(crearComentario);
  fetch("api/comentarios/"+ID,  {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(crearComentario)
              })
              .then(r => load())
              .catch(error => console.log("error"));
}
//TENES QUE CAMBIAR LOS AGLO POR TUS COSAS DE LA BBDD
//REVISA URLS PARA TU api
//EN EL TEMPLATE QUYE CREE MIRALO Y CAMBIA POR LO QUE TRAIGAS DE TU BBDD
//TE LA COMES
//CUANDO LO TENGAS HACEMOS EL CREAR, YO TODAVIA EN PROCESO CON ESO
//YA TENES EL DE IMAGENES? TE LO PUEDO ROBAR? NO LO HICE PORQUE NO LO ENTIENDO
