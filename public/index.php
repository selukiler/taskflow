<?php
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . "Página de Inicio";
$userName="Jose Luis";
$userAge=22;
$premium=true;
?>
<?php
$tasks = [
    [
        'title' => 'Tarea Investigacion',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Tarea Busqueda',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Paso a paso',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Debate',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Investigar la librería de gráficos JS',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>
<?php
include '../app/views/header.php';
?>


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

<main>
    <h2>Tareas Pendientes (<?php echo count(array_filter($tasks, function ($t) {
            return !$t['completed'];
        })); ?>)</h2>
    <ul class="task-list">
        <?php foreach ($tasks as $task) :
            // 1. Declarar e inicializar la clase base
            $taskClasses = 'task-item';

            // 2. Comprobar 'completed' y concatenar
            if ($task['completed']) {
                $taskClasses .= ' completed';
            }

            // 3. Evaluar 'priority' y concatenar
            switch ($task['priority']) {
                case 'alta':
                    $taskClasses .= ' priority-alta';
                    break;
                case 'media':
                    $taskClasses .= ' priority-media';
                    break;
                case 'baja':
                    $taskClasses .= ' priority-baja';
                    break;
            }
            ?>

            <!-- 4. Imprimir la etiqueta <li> con la variable de clases -->
            <li class="<?php echo $taskClasses; ?>">
                <?php echo htmlspecialchars($task['title']); ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h2>Perfil del Usuario</h2>
    <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
    <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
    <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $premium ? "Premium" : "Estándar"; ?></p>
</main>

<?php
include '../app/views/footer.php';
?>

