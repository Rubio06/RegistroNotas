<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div id="miModal" class="modal">
        <div class="flex" id="flex">
            <div class="contenido-modal">
                <div class="modal-header flex">
                    <h2>INGRESO DE NOTAS</h2>
                    <span class="close" id="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="profesor">
                        <label for="" style="text-align:center;">NOMBRE DEL ALUMNO</label>
                        <input type="text" id="profesor" placeholder="NOMBRE DEL PROFESOR" class="nomProfe"></input>
                    </div><br>
                    <div class="profesor">
                        <label for="" style="text-align:center;">NOMBRE DEL CURSO</label>
                        <input type="text" id="curso" placeholder="NOMBRE DEL PROFESOR"></input>
                    </div><br>
                    <div class="container2">
                        <div>
                            <label for="">NOTA 1</label>
                            <input type="text" id="nota1" name="nota1">
                        </div>
                        <div>
                            <label for="">NOTA 2</label>
                            <input type="text" id="nota2" name="nota2">
                        </div>
                        <div>
                            <label for="">NOTA 3</label>
                            <input type="text" id="nota3" name="nota3">
                        </div>
                        <div>
                            <label for="">NOTA 4</label>
                            <input type="text" id="nota4" name="nota4">
                        </div>
                    </div><br>
                    <div class="boton">
                        <button onclick="enviar()">INGRESAR DATOS</button>
                    </div>
                </div>
                <div class="footer">
                    <h3>Hecho pro Enoc Rubio &copy;</h3>
                </div>
            </div>
        </div>

        <script>
            bloquearInput = ()=>{
                 document.getElementById("profesor").disabled = true;
            }
            document.getElementById("profesor").addEventListener('change',bloquearInput);
        </script>
    </div>
</body>

</html>