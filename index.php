<?php
    // Datos del alumno
    $alumno = "Angel Adrian Pérez Villanueva";
    $numero_control = "19660201";
    $carrera = "Ingeniería en Sistemas Computacionales";
    // Datos de la escuela
    $campus = "TecNM Campus Matehuala";
    $ubicacion = "Carretera 57 Km 5, Matehuala, San Luis Potosí, México, C.P. 78746";
    $total_estudiantes = 1550;
    $total_docentes = 60;

    // Obtener fecha y hora actual
    $fecha_actual = date("d/m/Y");
    $hora_actual = date("H:i:s");

    // Mostrar datos del alumno
    echo "<p><strong>Alumno:</strong> $alumno</p>";
    echo "<p><strong>Número de Control:</strong> $numero_control</p>";
    echo "<p><strong>Carrera:</strong> $carrera</p>";

    // Mostrar datos de la escuela
    echo "<p><strong>Campus:</strong> $campus</p>";
    echo "<p><strong>Ubicación:</strong> $ubicacion</p>";
    echo "<p><strong>Total de Estudiantes:</strong> $total_estudiantes</p>";
    echo "<p><strong>Total de Docentes:</strong> $total_docentes</p>";

    // Mostrar fecha y hora actual
    echo "<p><strong>Fecha:</strong> $fecha_actual</p>";
    echo "<p><strong>Hora:</strong> $hora_actual</p>";
?>
