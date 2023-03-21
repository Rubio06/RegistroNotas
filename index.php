
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("modal.php");
?>
    <div class="container">
        <div>
            <h1 class="titulo">NOTAS UNIVERSIDAD NORBERT WIENER</h1><br>
            <div class="datos">
                <h3 id="nomProfesor">NOMBRE DEL ALUMNO: </h3><br>
                <h3 id="nomCurso">NOMBRE DEL CURSO: </h3>
            </div>
        </div><br>
        <div class="botton">
            <button id="abrir">INGRESAR NOTAS Y CURSOS</button>
        </div>
        <br>
        <div style="margin:auto; border:2px solid black; width: 95%;">
            <table border="2" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" style="	background: rgb(212, 229, 255);">NRO.</th>
                        <th rowspan="2" style="	background: rgb(212, 229, 255);">CURSO</th>
                        <th colspan="3" style="background: rgb(238, 216, 92);">PRIMERA FASE DE EVALUACION 40%</th>
                        <th colspan="3" style="background: rgb(238, 216, 92);">SEGUNDA FASE DE EVALUACION 40%</th>
                        <th rowspan="2" style="background: rgb(68, 109, 241);">NOTA FINAL DEL CICLO</th>
                        <th rowspan="2" style="background: rgb(68, 109, 241);">CONDICION</th>
                    </tr>
                    <tr>
                        <th style="background: rgb(212, 229, 255);">UND1</th>
                        <th style="background: rgb(212, 229, 255);">UND2</th>
                        <th style="background: rgb(68, 109, 241);">PROMEDIO PARCIAL</th>
                        <th style="background: rgb(212, 229, 255);">UND3</th>
                        <th style="background: rgb(212, 229, 255);">UND4</th>
                        <th style="background: rgb(68, 109, 241);">PROMEDIO FINAL</th>
                    </tr>
                </thead>
                <tbody id="cargar-datos">
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div style="width: 90%; margin:auto;">
        <div id="mostrarPF" style="text-align:right;"></div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>