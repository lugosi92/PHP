<?php
xhttp = new XMLHttpRequest();

// Primera solicitud (Síncrona, no recomendada)
xhttp.open("GET", "hora_servidor.php", false); // Espacio eliminado
xhttp.send();

if (xhttp.status == 200) {
    console.log("OK");
} else {
    console.log("Error");
}
console.log(xhttp.responseText);

// Segunda solicitud (Asíncrona, recomendada)
xhttpAsync = new XMLHttpRequest();
xhttpAsync.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
    }
};
xhttpAsync.open("GET", "hora_servidor.php", true);
xhttpAsync.send();
