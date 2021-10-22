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

// const filtrarElementos = ()=>{
//     const respuesta = document.getElementById("respuesta");
    
//     const fecha = document.getElementById("fecha").value;
//     fetch("../../Proyecto-SenaSoft/inc/servidor/metodosCrud/crudHistorias/filtrar.php?fechanacimiento="+fecha,{
//         method:"POST"
//     })
//     .then(res=>res.text())
//     .then(data=>{
//         respuesta.innerHTML = data;
//     })
// }


