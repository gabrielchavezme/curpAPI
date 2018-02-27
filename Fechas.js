/* ******************************************************************************************* */
function ValidaFecha(dia, mes, anio, mensaje) {
    var fecha = new Date(anio, mes, dia)

    if (fecha.getYear() < 100 || fecha.getYear() >= 2000)
        var tmp_anio = (fecha.getYear() < 100) ? 1900 + fecha.getYear() : fecha.getYear()

    else if (fecha.getYear() >= 100 && fecha.getYear() < 200)
        var tmp_anio = 1900 + fecha.getYear()
    else
        var tmp_anio = fecha.getYear()

    var fecha1 = dia + "/" + mes + "/" + anio
    var fecha2 = fecha.getDate() + "/" + fecha.getMonth() + "/" + tmp_anio

    if (fecha1 != fecha2) {
        alert(mensaje)
        return false
    }
    return true
}
/* ******************************************************************************************* */
function ComparaFechas(dia1, mes1, anio1, dia2, mes2, anio2) {
    var fecha1 = new Date(anio1, mes1, dia1)
    var fecha2 = new Date(anio2, mes2, dia2)

    if (fecha1.getTime() == fecha2.getTime()) {
        return (0)
    } else if (fecha1.getTime() < fecha2.getTime()) {
        return (-1)
    } else {
        return (1)
    }
}


function replaceAll(text, busca, reemplaza) {

    while (text.toString().indexOf(busca) != -1)

        text = text.toString().replace(busca, reemplaza);

    return text;

}