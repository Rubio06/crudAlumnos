let button = document.getElementById("btn-registrar");

button.addEventListener("click", ()=>{
    let usuario = document.getElementById("logearse_usuario").value;
    let clave = document.getElementById("logearse_usuario").value;
    let foto = document.getElementById("imagen").value;
    
    // let validarUsuario = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if (usuario === "" || clave ==="" || foto === "") {
        Swal.fire(
            'ESPACIOS EN BLANCO',
            'Debe de agregar datos',
            'question'
          )
    } else {
        let fd = new FormData();
        fd.append("logearse_usuario", document.getElementById("logearse_usuario").value);
        fd.append("logearse_contrasena", document.getElementById("logearse_contrasena").value);
        fd.append("imagen", document.getElementById("imagen").files[0]);
        fd.append("op","registrarme")
    
        fetch("./consulta.php", {
            method: "POST",
            body: fd
        })
        .then(resultado => {
            return resultado.json();
        })
        .then(data =>{
            if (data > 0) {
                location.href = "index.php";
            } else {
                console.log(data);
                Swal.fire(
                    'DATOS IGUALES',
                    'Usuario contraseña o foto ya existen',
                    'error'
                  )
                limpiarDatos();
            }
        })
    }
})

function limpiarDatos() {
    document.getElementById("logearse_usuario").value = "";
    document.getElementById("logearse_contrasena").value = "";
    document.getElementById("imagen").value = "";
}

function previewImage(event, querySelector){
	//Recuperamos el input que desencadeno la acción
	const input = event.target;
    console.log(input);
	//Recuperamos la etiqueta img donde cargaremos la imagen
	$imgPreview = document.querySelector(querySelector);
	// Verificamos si existe una imagen seleccionada
	if(!input.files.length) return
	//Recuperamos el archivo subido
	file = input.files[0];
	//Creamos la url
	objectURL = URL.createObjectURL(file);
	//Modificamos el atributo src de la etiqueta img
	$imgPreview.src = objectURL;
                
}
//VALIDAR CLAVEW
// function validarClave() {
//     let usuario = document.getElementById("logearse_contrasena").value;
//     let validarUsuario = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
//     if (validarUsuario.test(usuario)) {
//         alert("Debe ingresar su usuario con el formato solicitado");
//     } 
// }

