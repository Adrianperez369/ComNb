<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computo en la Nube</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Instituto Tecnológico de Matehuala</h1>
        <h2>Presentación del Alumno</h2>
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

            // Mostrar datos del alumno
            echo "<p><strong>Alumno:</strong> $alumno</p>";
            echo "<p><strong>Número de Control:</strong> $numero_control</p>";
            echo "<p><strong>Carrera:</strong> $carrera</p>";

            // Mostrar datos de la escuela
            echo "<p><strong>Campus:</strong> $campus</p>";
            echo "<p><strong>Ubicación:</strong> $ubicacion</p>";
            echo "<p><strong>Total de Estudiantes:</strong> $total_estudiantes</p>";
            echo "<p><strong>Total de Docentes:</strong> $total_docentes</p>";
        ?>
    </div>
</body>
</html>

