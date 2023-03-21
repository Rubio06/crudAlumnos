let btnCheck = document.getElementById("btncheck");
let terminos = document.getElementById("terminos");
function checkBoton() {
    if (terminos.checked == true) {
        btnCheck.disabled = false;
        btnCheck.style.background = "rgba(5, 5, 59, 59)";
    } else {
        btnCheck.disabled = true;
        btnCheck.style.background = "rgba(5, 5, 59, 0.59)";
    }
}

//MODAL
let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function () {
    modal.style.display = 'block';
});
cerrar.addEventListener('click', function () {
    modal.style.display = 'none';
    document.getElementById("nombre").value = "";
    document.getElementById("paterno").value = "";
    document.getElementById("materno").value = "";
    document.getElementById("numero").value = "";
    document.getElementById("dni").value = "";
    document.getElementById("fecha").value = "";
    document.getElementById("email").value = "";
    document.getElementById("comentarios").value = "";
    document.getElementById("carrera").value = "";
    document.getElementById("terminos").checked = "";
});
window.addEventListener('click', function (e) {
    console.log(e.target);
    if (e.target == flex) {
        modal.style.display = 'none';
    }
});
//MANDAAR DATOS
const mandarDatos = () => {
    let nombre = document.getElementById("nombre").value;
    let paterno = document.getElementById("paterno").value;
    let materno = document.getElementById("materno").value;
    let numero = document.getElementById("numero").value;
    let dni = document.getElementById("dni").value;
    let fecha = document.getElementById("fecha").value;
    let comentarios = document.getElementById("comentarios").value;
    let terminos = document.getElementById("terminos").checked;

    
    if (nombre === "" || paterno === "" || materno === "" || numero === "" || dni === "" || fecha === "" || comentarios === "" || terminos === "") {
        document.getElementById("nombre").value;
        document.getElementById("paterno").value;
        document.getElementById("materno").value;
        document.getElementById("numero").value;
        document.getElementById("dni").value;
        document.getElementById("fecha").value;
        document.getElementById("comentarios").value;
        document.getElementById("terminos").checked;
        
        document.getElementById("resultadoDatos").innerHTML = "<div style='margin:10px auto; border:2px solid red; color:red; text-align:center; padding:10px;'>Debes de completar los campos vacios</div>";
        setTimeout(() => {
            document.getElementById("resultadoDatos").innerHTML = "";
        }, 3000);
        
    } else {
        let btnCheck = document.getElementById("btncheck");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cuerpotabla").innerHTML = this.response;
                document.getElementById("nombre").value = "";
                document.getElementById("paterno").value = "";
                document.getElementById("materno").value = "";
                document.getElementById("numero").value = "";
                document.getElementById("dni").value = "";
                document.getElementById("fecha").value = "";
                document.getElementById("email").value = "";
                document.getElementById("comentarios").value = "";
                document.getElementById("carrera").value = "";
                document.getElementById("terminos").checked = "";
                btnCheck.disabled = true;
                btnCheck.style.background = "rgba(5, 5, 59, 0.59)";
            }
        };
        xmlhttp.open("POST", "./consulta.php", true);
        data = new FormData();
        data.append("nombre", document.getElementById("nombre").value);
        data.append("paterno", document.getElementById("paterno").value);
        data.append("materno", document.getElementById("materno").value);
        data.append("numero", document.getElementById("numero").value);
        data.append("dni", document.getElementById("dni").value);
        data.append("fecha", document.getElementById("fecha").value);
        data.append("email", document.getElementById("email").value);
        data.append("comentarios", document.getElementById("comentarios").value);
        data.append("carrera", document.getElementById("carrera").value);
        data.append("op", "insertar");
        xmlhttp.send(data);
        location.reload();
    }
    
}
//MOSTRAR DATOS
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tablabody").innerHTML = this.response;
        selectedRow();
        // document.getElementById("tablabody").innerHTML = "Cargando tabla perro espera ..";        
        //     window.onload = () => {
        //         setTimeout(() => {
        //         if (document.getElementById("buscar").value === "") {
        //             document.getElementById("tablabody").innerHTML = this.response;
        //             selectedRow();

        //         } else {
        //             buscar();
        //         }
        //     }, 3000);
            
        // }
    }
}
xmlhttp.open("POST", "./consulta.php", true);
data = new FormData();
data.append("op", "mostrartabla");
xmlhttp.send(data);

//COLOREAR REGISTROS CLIKEADOS
function selectedRow() {
    var index,
        tabla = document.getElementById("tabla");

    for (let i = 0; i < tabla.rows.length; i++) {
        tabla.rows[i].onclick = function () {
            if (typeof index !== "undefined") {
                tabla.rows[index].classList.toggle("selecionar");
            }
            console.log(typeof index);
            //get the selected row index
            index = this.rowIndex;
            //add class selected
            this.classList.toggle("selecionar");
            console.log(typeof index);
        };
    }
}

function cargarDatos() {
    alert("Se ah cargado los datos correctamente");
}

// const buscar = () => {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("tablabody").innerHTML = this.response;
//             selectedRow();
//         }
//     };
//     xmlhttp.open("POST", "./consulta.php", true);
//     data = new FormData();
//     data.append("buscar", document.getElementById("buscar").value);
//     data.append("op", "busqueda");
//     xmlhttp.send(data);
// }
let buscar = document.getElementById("buscar");
buscar.addEventListener("keyup",()=>{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tablabody").innerHTML = this.response;
            selectedRow();
        }
    };
    xmlhttp.open("POST", "./consulta.php", true);
    data = new FormData();
    data.append("buscar", document.getElementById("buscar").value);
    data.append("op", "busqueda");
    xmlhttp.send(data);
});

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("carrera").innerHTML = this.response;

    }
};
xmlhttp.open("POST", "./consulta.php", true);
data = new FormData();
data.append("op", "selectCarrera");
xmlhttp.send(data);



var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("resultRegistros").innerHTML = this.response;
    }
};
xmlhttp.open("POST", "./consulta.php", true);
data = new FormData();
data.append("op", "totalregistros");
xmlhttp.send(data);

function Enviardatos(id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mostrarInputs").innerHTML = this.response;
        }
    };
    xmlhttp.open("POST", "./consulta.php", true);
    data = new FormData();
    data.append("id", id);
    data.append("op", "mostrarInputs");
    xmlhttp.send(data);
    console.log(id);

}
function actualizar() {
    if (confirm("¿Desea actualizar el registro " + document.getElementById("datosid").value + " ?")) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultActualizar").innerHTML = this.response;
            // document.getElementById("tablabody").innerHTML = this.response;
            limpiarCampos();
        }
    };
    xmlhttp.open("POST", "./consulta.php", true);
    data = new FormData();
        data.append("datosid", document.getElementById("datosid").value);
        data.append("datosnombre", document.getElementById("datosnombre").value);
        data.append("datospaterno", document.getElementById("datospaterno").value);
        data.append("datosmaterno", document.getElementById("datosmaterno").value);
        data.append("datosnumero", document.getElementById("datosnumero").value);
        data.append("datosdni", document.getElementById("datosdni").value);
        data.append("datosfecha", document.getElementById("datosfecha").value);
        data.append("datosemail", document.getElementById("datosemail").value);
        data.append("datoscomentarios", document.getElementById("datoscomentarios").value);
        data.append("carrera_id", document.getElementById("carrera_id").value);
        data.append("op", "actualizar");
        xmlhttp.send(data);
    }
    location.reload();
    alert("Se han actualizado los datos correctamente");

}
function eliminar() {
    if (confirm("¿Seguro que desea elimiar el registro " + document.getElementById("datosid").value + " ?")) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("eliminarDatos").innerHTML = this.response;
            }
        };
        xmlhttp.open("POST", "./consulta.php", true);
        data = new FormData();
        data.append("datosid", document.getElementById("datosid").value);
        data.append("op", "eliminar");
        xmlhttp.send(data);
    }
    location.reload();
    alert("Los datos se han eliminados correctamente");

}
function limpiarCampos() {
    // document.getElementById("datosid").value = "";
    document.getElementById("datosnombre").value = "";
    document.getElementById("datospaterno").value = "";
    document.getElementById("datosmaterno").value = "";
    document.getElementById("datosnumero").value = "";
    document.getElementById("datosdni").value = "";
    document.getElementById("datosfecha").value = "";
    document.getElementById("datosemail").value = "";
    document.getElementById("datoscomentarios").value = "";
    document.getElementById("carrera_id").value = "";

}
window.onload = () => {
    setInterval(() => {
        document.getElementById("tablabody");
    }, 3000)
}