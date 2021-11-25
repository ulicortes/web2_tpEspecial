"use strict"
let api = 'http://localhost/web2_tpEspecial/api';


document.addEventListener('DOMContentLoaded', (event) => {
  getComentarios();
});

let contenedor = document.querySelector("#comentarios");
let rol = document.querySelector("#rol").value;

if(rol == 0 || rol == 1){
  let form = document.querySelector('#form');
  let btnEnviar = document.querySelector('#enviarComentario');
  btnEnviar.addEventListener('click', (e)=>{
    e.preventDefault();
    let objeto = {
      'comentario': form.comentario.value,
      'estrellas' : form.estrellas.value,
      'ID_HABITACION' : form.ID_HABITACION.value,
      'id_usuario' : form.id_usuario.value
    }
    crearComentario(objeto);
    form.comentario.value = '';
    form.estrellas.value = undefined;
  })

  async function crearComentario(body) {
    let query = await fetch(api + "/comentarios", {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(body)
    })
        if (query.status == 400) {
          document.querySelector('#error').innerHTML = "Debe ingresar un comentario y un puntaje";
        }
        else if (query.ok){
          console.log(body);
          contenedor.innerHTML = "";
          getComentarios();
        }
        else {
          document.querySelector('#error').innerHTML = query.statusText;
        }
  }
}



async function getComentarios() {
  let response = await fetch(`${api}/comentarios`);
  let comentarios = await response.json();
  renderComentarios(comentarios);
}

function renderComentarios(comentarios) {
  let habitacion = document.querySelector("#habitacion").value;
  
  for (let comentario of comentarios) {
    if (comentario.ID_HABITACION == habitacion) {
      let div_comentario = document.createElement('div');
      div_comentario.classList.add('comentarios_div');
      let nombre_usuario = document.createElement('h5');
      nombre_usuario.classList.add('titulocomentario');
      let comentario_contenido = document.createElement('p');
      nombre_usuario.innerHTML = ` ${comentario.Nombre_del_usuario} dijo:`;
      comentario_contenido.innerHTML = comentario.comentario;
      div_comentario.appendChild(nombre_usuario);
      div_comentario.appendChild(comentario_contenido);
      contenedor.appendChild(div_comentario);
      contenedor.classList.add('contenedorComentarios');
      if (comentario.puntaje == 1) {
        comentario.puntaje = "★";
      } else if (comentario.puntaje == 2) {
        comentario.puntaje = "★★";
      } else if (comentario.puntaje == 3) {
        comentario.puntaje = "★★★";
      } else if (comentario.puntaje == 4) {
        comentario.puntaje = "★★★★";
      } else if (comentario.puntaje == 5) {
        comentario.puntaje = "★★★★★";
      }
      let div_puntaje = document.createElement('div');
      div_puntaje.innerHTML = `Calificacion: <span class="color">${comentario.puntaje}</span>`;
      div_comentario.appendChild(div_puntaje);

      if (rol == 1) {
        let btnBorrar = document.createElement('button');
        let icono = document.createElement("i");
        icono.classList.add("far");
        icono.classList.add("fa-trash-alt");
        icono.classList.add("fa");
        btnBorrar.appendChild(icono);
        div_comentario.appendChild(btnBorrar);
        btnBorrar.addEventListener('click', (event) => eliminarComentario(comentario.id_comentario));
      }
    }
  }
}

async function eliminarComentario(id) {
  fetch(api + "/comentario/" + id, {
    method: 'DELETE',
  })
    .then(function (respuesta) {
      if (!respuesta.ok) {
        console.log("Error");
      }
      else {
        contenedor.innerHTML = "";
        getComentarios();
      }
    })
}



