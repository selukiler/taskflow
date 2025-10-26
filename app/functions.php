<?php
function obtenerClasePrioridad(array $task,  &$clases)
{
    // CORRECCIÓN: Se cambió $task['priority'] a $task['prioridad'] para coincidir con el array en index.php
    switch ($task['prioridad']) {
        case 'alta':
            $clases .= ' priority-alta';
            break;
        case 'media':
            $clases .= ' priority-media';
            break;
        case 'baja':
            $clases .= ' priority-baja';
            break;
    }
}
function renderizarTarea(array $tarea)
{

    $clasesTarea = 'task-item';
    if ($tarea['completado']) {
        $clasesTarea .= ' completed';
    }
    obtenerClasePrioridad($tarea, $clasesTarea);
    return '<li class="' . $clasesTarea . '">' . htmlspecialchars($tarea['titulo']) . '</li>';
}
