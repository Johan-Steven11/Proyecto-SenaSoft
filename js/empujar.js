const empujar = () => {
    const boton = document.getElementById("boton");

    const formulario = document.getElementById("formulario-contenedor");

    boton.addEventListener("click", () => {
        formulario.classList.toggle('active');
    })
}





function cambio() {
    window.location.href = "index.php";
}

const empujarLista = () => {
    const boton = document.getElementById("boton");

    const tabla = document.getElementById("respuesta");

    const form = document.getElementById("formulario-filtrar");

    boton.addEventListener("click", () => {
        tabla.classList.toggle('active');
        form.classList.toggle('active');
    })
}





