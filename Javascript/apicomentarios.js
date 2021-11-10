"use strict"
window.addEventListener('DOMContentLoaded', (event) => {
   getComentarios(7);
});
async function getComentarios(id){
    let response = await fetch(`/api/comentarios/${id}`);
    let comentarios= await response.json();
    div_comentarios = document.getElementById("comentarios");
    div_comentarios.innerHTML="";

    comentarios.forEach(comentario => {
        div_comentarios.innerHTML+=`
        <p>${comentario.Nombre_del_usuario}</p>
        <p>${comentario.comentario}</p>
        `;
    });
}