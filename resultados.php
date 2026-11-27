
<?php
    echo "<style>
        html{
            background-color: #00ccff;
            text-align: center;
        }
    </style>";
    $nombre = $_POST['nombre'] ?? "No ingresaste tu nombre";
    $correo = $_POST['correo'] ?? "No ingresaste tu correo";
    $destino = $_POST['destino'] ?? ["No seleccionaste ningun destino"];
    $actividades = $_POST['Actividad'] ?? ["No seleccionaste ningun actividad"];
    $servicios = $_POST['Servicio'] ?? ["No seleccionaste ningun servicio"];

    echo "<h3>Tu Nombre es: $nombre <br> y tu correo es: $correo</h3>";  

    echo "<h2>Destino seleccionado: </h2>";

    $destinoc = 0;
    $actividadesc = 0;
    $serviciosc = 0;
    $total = 0;

    foreach($destino as $as){
        $destinoc++;
        echo $as . "<br>";
    }
    echo "<br>Haz seleccionado $destinoc destinos";

    echo "<h2>Actividades seleccionadas: </h2>";
    foreach($actividades as $as){
        $actividadesc++;
        echo $as . "<br>";
    }
    echo "<br>Haz seleccionado $actividadesc actividades";

    echo "<h2>Servicios adicionales seleccionados: </h2>";
    foreach($servicios as $as){
        $serviciosc++;
        echo $as . "<br>";
    }
    echo "<br>Haz seleccionado $serviciosc servicios adicionales <br>";

    $total = $destinoc + $actividadesc + $serviciosc;
    echo "<h3>Y haz seleccionado $total elementos en total<h3>";


?>
