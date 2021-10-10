<?php

$aRegistro = array();

$datosPA = array();
$datosPA ["nombre"] = "Sebastian";
$datosPA ["apellido"] = "Rondon";
$datosPA ["edad"] = 21;
$datosPA ["email"] = "sebasrondon21@gmail.com";
$datosPA ["dni"] = 01010101;

$datosPB = array();
$datosPB ["nombre"] = "Alejandro";
$datosPB ["apellido"] = "Rodriguez";
$datosPB ["edad"] = 45;
$datosPB ["email"] = "Alejo1@gmail.com";
$datosPB ["dni"] = 02020202;

$datosPC = array();
$datosPC ["nombre"] = "Maria";
$datosPC ["apellido"] = "Carmen";
$datosPC ["edad"] = 22;
$datosPC ["email"] = "carmen12@gmail.com";
$datosPC ["dni"] = 03030303;

$datosPD = array();
$datosPD ["nombre"] = "Luis";
$datosPD ["apellido"] = "Sosa";
$datosPD ["edad"] = 47;
$datosPD ["email"] = "Sosal@gmailcom";
$datosPD ["dni"] = 04040404;

$datosPE = array();
$datosPE ["nombre"] = "Julio";
$datosPE ["apellido"] = "vallejo";
$datosPE ["edad"] = 16;
$datosPE ["email"] = "vallejoj@gmail.com";
$datosPE ["dni"] = 05050505;

$aRegistro[0] = $datosPA;
$aRegistro[1] = $datosPB;
$aRegistro[2] = $datosPC;
$aRegistro[3] = $datosPD;
$aRegistro[4] = $datosPE;

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>registros</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 text-center mt-5">
                <h3>Tabla de registro</h3>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 text-center mt-5">
                <table class="table"> <!-- CREAMOS TABLA CON BOOTSTRAP -->
                    <thead class="table-dark"> <!-- TITULOS DEL CONTENIDO DE LA TABLA -->
                        <tr> <!--   LÍNEA DEL CONTENIDO DE LA TABLA -->
                            <th>Nombre</th> <!-- TH PARA CONTENIDO DE LA TABLA PERO EN NEGRITA -->
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Email</th>
                            <th>DNI</th>
                        </tr>
                    </thead>
                    <?php //ABRIMOS PHP DENTRO DE LA TABLA
                        foreach($aRegistro as $registro){ //ABRIMOS BUCLE FOREACH
                            echo ' 
                                <div class="tbody">
                                    <tr>
                                        <td> ' . $registro["nombre"] . ' </td>
                                        <td> ' . $registro["apellido"] . ' </td>
                                        <td> ' . $registro["edad"] . ' </td>
                                        <td> ' . $registro["email"] . ' </td>
                                        <td> ' . $registro["dni"] . ' </td>
                                    </tr>
                                </div>
                            '; 
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>