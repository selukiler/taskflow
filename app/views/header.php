<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle;?></title>

    <style>
        .task-list {
            list-style: none;
            padding: 0;
            font-family: sans-serif;
        }
        .task-item {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border-left: 5px solid gray; /* Base color */
            background-color: #f9f9f9;
            color: #333;
        }

        /* Clases de Prioridad (Reemplaza border-left) */
        .priority-alta { border-left-color: red; }
        .priority-media { border-left-color: orange; }
        .priority-baja { border-left-color: green; }

        /* Clase de Completado (Reemplaza color y tachado) */
        .completed {
            text-decoration: line-through;
            background-color: #e6ffe6;
            color: #888;
            opacity: 0.7;
        }
    </style>
</head>
<body>
<h1>Bienvenido a Mi web</h1>
