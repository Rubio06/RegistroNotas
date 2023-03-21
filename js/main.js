
// MODAL
let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function () {
    modal.style.display = 'block';
});
cerrar.addEventListener('click', function () {
    modal.style.display = 'none';
});
window.addEventListener('click', function (e) {
    console.log(e.target);
    if (e.target == flex) {
        modal.style.display = 'none';
    }
});

datos = [];

condicion = "";
id = 1;
function enviar() {
    let profesor = document.getElementById('profesor').value.toUpperCase();
    nombreProfesor= document.getElementById('profesor').value=profesor;

    let curso = document.getElementById('curso').value.toUpperCase();
    let nota1 = document.getElementById('nota1').value;
    let nota2 = document.getElementById('nota2').value;
    let nota3 = document.getElementById('nota3').value;
    let nota4 = document.getElementById('nota4').value;

    // document.getElementById("nomProfesor").disabled = true;
    document.getElementById("nomProfesor").innerHTML = `NOMBRE DEL ALUMNO: <label style='color:green; font-weight:bold;'> ${profesor} </label>`;
    document.getElementById("nomCurso").innerHTML = `NOMBRE DEL CURSO: <label style='color:red; font-weight:bold;'> ${curso}</label>`;
    //PROMEDIO PARCIAL

    if(curso != "" && nota1 != "" && nota2 != "" && nota3 != "" && nota4 != ""){
        if(nota1 <= 20 && nota2 <= 20 && nota3 <= 20 && nota4 <= 20){
            promedioP = 0;
            nota_1 = parseFloat(nota1);
            nota_2 = parseFloat(nota2);
            promedioP = (nota_1 + nota_2) / 2;
            //PROMEDIO FINAL
            promedioF = 0;
            nota_3 = parseFloat(nota3);
            nota_4 = parseFloat(nota4);
            promedioF = (nota_3 + nota_4) / 2;
            //NOTA FINAL DEL CICLO
            notaFC = 0;
            notaFC = (promedioP + promedioF) / 2;
            // condicion = "";
            datos.push([id, curso, nota_1, nota_2, promedioP, nota_3, nota_4, promedioF, notaFC, condicion]);

            hacertabla();
            modal.style.display = 'none';
            // modal.close();  
            document.getElementById('curso').value = "";
            document.getElementById('nota1').value = "";
            document.getElementById('nota2').value = "";
            document.getElementById('nota3').value = "";
            document.getElementById('nota4').value = "";

        }else{
            alert("LA NOTA DEBE SER MENOR A 20");
        }
    }else{
        alert("ALGUNO DE LOS CAMPOS ESTAN VACIOS, INGRESE NUEVAMENTE");
    }
}
function hacertabla() {
    tablaLlena = "";
    for (let i = 0; i < datos.length; i++) {
        condicion = datos[i][8];
        if (condicion >= 11) {
            datos[i][9] = "<td style='color:blue; font-weight: bold;'> APROBADO </td>";
            tablaLlena += `<tr><td>${datos[i][0]} </td><td> ${datos[i][1]} </td><td> ${datos[i][2]} </td><td> ${datos[i][3]} </td><td> ${datos[i][4]} </td><td> ${datos[i][5]} </td><td> ${datos[i][6]} </td><td>${datos[i][7]}</td><td> ${datos[i][8]} </td> ${datos[i][9]} </tr>`;
        } else {
            datos[i][9] = "<td style='color:red; font-weight: bold;'> DESAPROBADO </td>";
            tablaLlena += `<tr><td>${datos[i][0]} </td><td> ${datos[i][1]} </td><td> ${datos[i][2]} </td><td> ${datos[i][3]} </td><td> ${datos[i][4]} </td><td> ${datos[i][5]} </td><td> ${datos[i][6]} </td><td>${datos[i][7]}</td><td> ${datos[i][8]} </td> ${datos[i][9]} </tr>`;
        }
        if (i == 0) {
            contador = datos[i][8];
            document.getElementById("mostrarPF").innerHTML = `EL PROMEDIO FINAL DEL CURSO ES: ${contador}`;
        }else{
            contador += datos[i][8];
            division = ((contador)/(i+1)).toFixed(2);
            document.getElementById("mostrarPF").innerHTML = `EL PROMEDIO FINAL DEL CURSO ES: ${division}`;
        }
    }
    id ++;
    document.getElementById("cargar-datos").innerHTML = tablaLlena;
}


