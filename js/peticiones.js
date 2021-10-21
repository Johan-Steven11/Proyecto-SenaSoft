const formulario = document.getElementById("registro");
const boton = document.getElementById("guardar");

const guardarElemento = ()=>{
    const datos = new FormData(formulario);

    // 
    fetch("/Proyecto-SenaSoft/inc/servidor/metodosCrud/crudHistorias/guardar.php",{
        method: "POST",
        body: datos
    }).then(res=>res.text())
    .then(data=>{
        console.log(data);
    });
    listarElementos();
}

const listarElementos = ()=>{
    const respuesta = document.getElementById("respuesta");
    fetch("../../Proyecto-SenaSoft/inc/servidor/metodosCrud/crudHistorias/listar.php")
    .then(res=>res.text())
    .then(data=>{
        respuesta.innerHTML = data;
    })
}

window.onload = ()=>{
    listarElementos();
}


formulario.addEventListener("submit",(e)=>{
    e.preventDefault();
    guardarElemento();
})