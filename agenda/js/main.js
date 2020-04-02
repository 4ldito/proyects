
const formularioContactos = document.querySelector("#contacto");

eventListeners();

function eventListeners() {
    // cuando el formulario de editar o crear se ejecuta
    formularioContactos.addEventListener("submit", leerFormulario);
}


function leerFormulario(e) {
    e.preventDefault();
    // leer datos inputs 

    const nombre = document.querySelector("#nombre").value,
          empresa = document.querySelector("#empresa").value,
          tel = document.querySelector("#telefono").value,
          accion = document.querySelector("#accion").value;


    if (nombre === "" || empresa === "" || tel === "") {
        // texto y clase
        mostrarNotificacion("Todos los campos son obligatorios.", "error");
    } else {
        // pasa la validación, y crea el llamado a AJAX
        const infoContacto = new FormData();
        infoContacto.append("nombre", nombre);
        infoContacto.append("empresa", empresa);
        infoContacto.append("tel", tel);
        infoContacto.append("accion", accion);

        if (accion === "crear") {
            // crear el contacto

            insertarDB(infoContacto);
            
        } else {
            // editar el contacto
        }

    }
}
// inserta a la base de datos via Ajax
function insertarDB(datos) {
    
}


function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement("div");
    notificacion.classList.add(clase, "notificacion", "sombra");
    notificacion.textContent = mensaje;

    formularioContactos.insertBefore(notificacion, document.querySelector("form legend"));

    setTimeout(() => {

        notificacion.classList.add("visible");

        setTimeout(() => {
            notificacion.classList.remove("visible");

            setTimeout(() => {
                notificacion.remove();
            }, 600);
        }, 3000);
    }, 100);
}