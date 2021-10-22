const empujar = () => {
    const boton = document.getElementById("boton");

    const formulario = document.getElementById("formulario-contenedor");

    boton.addEventListener("click", () => {
        formulario.classList.toggle('active');
    })
}

empujar();

function cambio() {
    window.location.href = "Registrarme.php";
}

function Volver() {
    window.location.href = "index.php";
}