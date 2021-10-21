const formulario = document.getElementById("registro");
const boton = document.getElementById("guardar");

const guardarElemento = ()=>{
    const datos = new FormData(formulario);

    fetch("/Proyecto-SenaSoft/inc/crudHistorias.php",{
        method: "POST",
        body: datos
    }).then(res=>res.json())
    .then(data=>{
        console.log(data);
    });
}


formulario.addEventListener("submit",(e)=>{
    e.preventDefault();
    guardarElemento();
})