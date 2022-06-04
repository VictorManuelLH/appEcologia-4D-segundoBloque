function EsNumero(Dato) {
    var CadenaNumeros = "0123456789";
    var EsteCaracter;
    var Contador = 0;
    for (var i = 0; i < Dato.length; i++) {
        EsteCaracter = Dato.substring(i, i + 1);
        if (CadenaNumeros.indexOf(EsteCaracter) != -1) Contador++;
    }
    if (Contador == Dato.length) return true;
    else return false;
}

function wc(form) {
    var wc1var = form.wc1cam.value;
    var wc2var = form.wc2cam.options[form.wc2cam.selectedIndex].value;
    var wc3var = form.wc3cam.value;
    if (EsNumero(wc1var)) {
        if (wc1var != "" && wc2var != "") {
            form.wc3cam.value = Math.round((wc1var * wc2var) * 365);
            if (wc1var > 5) document.forms["Resultado"].wccisterna.value = "1";
            else document.forms["Resultado"].wccisterna.value = "0";
            if (wc2var == "10") document.forms["Resultado"].wcsistema.value = "1";
            else document.forms["Resultado"].wcsistema.value = "0";
        }
    } else {
        form.wc3cam.value = "";
        alert("Recuerda que los campos solo leen números");
    }
}

function inicializaWc(form) {
    form.wc1cam.value = "";
    form.wc2cam.selectedIndex = 1;
    form.wc3cam.value = "";
}

function ducha(form) {
    var ducha1var = form.ducha1cam.value;
    var ducha2var = form.ducha2cam.value;
    var ducha3var = form.ducha3cam.value;
    var ducha4var = form.ducha4cam.options[form.ducha4cam.selectedIndex].value;
    var ducha5var = form.ducha5cam.value;
    var ducha6var = form.ducha6cam.value;
    var ducha7var = form.ducha7cam.value;
    var ducha8var = form.ducha8cam.options[form.ducha8cam.selectedIndex].value;
    if (EsNumero(ducha1var) && EsNumero(ducha2var) && EsNumero(ducha3var) && EsNumero(ducha5var) && EsNumero(ducha6var) && EsNumero(ducha7var)) {
        if (ducha1var != "" && ducha2var != "" && ducha3var != "" && ducha4var != "" && ducha5var != "" && ducha6var != "" && ducha7var != "" && ducha8var != "") {
            form.ducha9cam.value = Math.round(((ducha4var * (ducha1var / 7) * ducha2var * 365) - + -(200 * ducha3var)) - + -(((ducha5var * 3 * 365) - + -(ducha6var * 2 * 365) - + -(ducha7var * 5 * 12)) * ducha8var));
            if (ducha2var > 5) document.forms["Resultado"].duchatiempo.value = "1";
            else document.forms["Resultado"].duchatiempo.value = "0";
            if (ducha3var > 10) document.forms["Resultado"].duchabano.value = "1";
            else document.forms["Resultado"].duchabano.value = "0";
            if (ducha4var == "9") document.forms["Resultado"].duchasistema.value = "1";
            else document.forms["Resultado"].duchasistema.value = "0";
            if (ducha8var == "1.5") document.forms["Resultado"].duchagrifo.value = "1";
            else document.forms["Resultado"].duchagrifo.value = "0";
        }
    } else {
        form.ducha9cam.value = "";
        alert("Recuerda que los campos solo leen números");
    }
}

function inicializaDucha(form) {
    form.ducha1cam.value = "";
    form.ducha2cam.value = "";
    form.ducha3cam.value = "";
    form.ducha4cam.selectedIndex = 1;
    form.ducha5cam.value = "";
    form.ducha6cam.value = "";
    form.ducha7cam.value = "";
    form.ducha8cam.selectedIndex = 1;
    form.ducha9cam.value = "";
}

function cocina(form) {
    var cocina1var = (form.cocina1cam.options[form.cocina1cam.selectedIndex].value);

    if (cocina1var != "") {
        form.cocina2cam.value = (cocina1var);

        if (cocina1var == "8000") document.forms["Resultado"].cocinalavavajillas.value = "1";

        else {
            if (cocina1var == "7200") document.forms["Resultado"].cocinalavavajillas.value = "2";
            else document.forms["Resultado"].cocinalavavajillas.value = "0";
        }
    }
}

function inicializaCocina(form) {
    form.cocina1cam.selectedIndex = 0;
    form.cocina2cam.value = "";
}

function lavado(form) {
    var lavado1var = form.lavado1cam.options[form.lavado1cam.selectedIndex].value;
    var lavado2var = form.lavado2cam.options[form.lavado2cam.selectedIndex].value;
    var lavado3var = form.lavado3cam.options[form.lavado3cam.selectedIndex].value;
    var lavado4var = form.lavado4cam.value;
    var lavado5var = form.lavado5cam.value;
    if (EsNumero(lavado4var) && EsNumero(lavado5var)) {
        if ((lavado1var != "") && (lavado2var != "") && (lavado3var != "") && (lavado4var != "") && (lavado5var != "")) {
            form.lavado6cam.value = Math.round((lavado4var / lavado5var) * 65 * 52 * lavado1var * lavado2var * lavado3var);
            if (lavado1var == "1.2") document.forms["Resultado"].lavadolavadora.value = "1";
            else document.forms["Resultado"].lavadolavadora.value = "0";
            if (lavado2var == "1.2") document.forms["Resultado"].lavadollena.value = "1";
            else document.forms["Resultado"].lavadollena.value = "0";
            if (lavado3var == "1.5") document.forms["Resultado"].lavadoprograma.value = "1";
            else document.forms["Resultado"].lavadoprograma.value = "0";
            if (lavado4var > 2) document.forms["Resultado"].lavadonumero.value = "1";
            else document.forms["Resultado"].lavadonumero.value = "0";
        }
    } else {
        form.lavado6cam.value = "";
        alert("Recuerda que los campos solo leen números");
    }
}

function inicializaLavado(form) {
    form.lavado1cam.selectedIndex = 0;
    form.lavado2cam.selectedIndex = 0;
    form.lavado3cam.selectedIndex = 1;
    form.lavado4cam.value = "";
    form.lavado5cam.value = "";
    form.lavado6cam.value = "";
}

function plantas(form) {
    var plantas1var = (form.plantas1cam.options[form.plantas1cam.selectedIndex].value);
    var plantas2var = (form.plantas2cam.value);
    var plantas3var = (form.plantas3cam.options[form.plantas3cam.selectedIndex].value);
    var plantas4var = (form.plantas4cam.options[form.plantas4cam.selectedIndex].value);
    if (EsNumero(plantas2var)) {
        if (plantas1var != "" && plantas2var != "" && plantas3var != "" && plantas4var != "") {
            form.plantas5cam.value = Math.round((plantas2var * plantas3var * plantas4var) - + -plantas1var);
            if (plantas2var > 60) document.forms["Resultado"].plantasmetros.value = "3";
            else {
                if (plantas2var > 20) document.forms["Resultado"].plantasmetros.value = "2";
                else {
                    if (plantas2var > 4) document.forms["Resultado"].plantasmetros.value = "1";
                    else document.forms["Resultado"].plantasmetros.value = "0";
                }
            }
            if (plantas3var == "1200") document.forms["Resultado"].plantasfrecuencia.value = "1";
            else document.forms["Resultado"].plantasfrecuencia.value = "0";

            if (plantas4var == "1.5") {
                if (plantas2var > 60) document.forms["Resultado"].plantaseconomizador.value = "2";
                else document.forms["Resultado"].plantaseconomizador.value = "1";
            } else document.forms["Resultado"].plantaseconomizador.value = "0";
        }
    } else {
        form.plantas5cam.value = "";
        alert("Recuerda que los campos solo leen números");
    }
}

function inicializaPlantas(form) {
    form.plantas1cam.selectedIndex = 0;
    form.plantas2cam.value = "";
    form.plantas3cam.selectedIndex = 0;
    form.plantas4cam.selectedIndex = 0;
    form.plantas5cam.value = "";
}

function total(form) {
    var wc3var = form.wc3cam.value;
    var ducha9var = form.ducha9cam.value;
    var cocina2var = form.cocina2cam.value;
    var lavado6var = form.lavado6cam.value;
    var plantas5var = form.plantas5cam.value;
    var totalvar = form.totalcam.value;
    var total2var = form.total2cam.value;
    var total3var = form.total3cam.value;
    if (wc3var != "" && ducha9var != "" && cocina2var != "" && lavado6var != "" && plantas5var != "") {
        form.totalcam.value = Math.round(wc3var - + -ducha9var - + -cocina2var - + -lavado6var - + -plantas5var - + -11000);
        form.total2cam.value = Math.round(wc3var - + -ducha9var - + -cocina2var - + -lavado6var - + -plantas5var - + -11000 - 60000);
        form.total3cam.value = Math.round(((wc3var - + -ducha9var - + -cocina2var - + -lavado6var - + -plantas5var - + -11000) * (100)) / 60000);
        form.total4cam.value = Math.round(((wc3var - + -ducha9var - + -cocina2var - + -lavado6var - + -plantas5var - + -11000) / (1000)) * 2.15);
    } else {
        alert("Para brindarte un calculo general debes llenar todos los campos anteriores. :)");
    }
}

function analisis(form) {
    var porcentajevar = document.forms["Calculo"].total3cam.value;
    if (porcentajevar == "") {
        alert("Para conocer el análisis de tu caso debes realizar el cálculo general.");
    } else {
        if (porcentajevar > 180) form.consumoagua.value = 5;
        else {
            if (porcentajevar > 120) form.consumoagua.value = 4;
            else {
                if (porcentajevar > 80) form.consumoagua.value = 3;
                else {
                    if (porcentajevar > 50) form.consumoagua.value = 2;
                    else {
                        form.consumoagua.value = 1;
                    }
                }
            }
        }
        document.forms["Resultado"].submit();
    }
}