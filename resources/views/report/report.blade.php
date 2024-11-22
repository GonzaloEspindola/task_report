<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Tareas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Índice</th>
                <th>Nombre completo de recurso</th>
                <th>Nro de proyecto</th>
                <th>Fecha de la orden</th>
                <th>Nro de tarea</th>
                <th>Precio unitario</th>
                <th>Cantidad</th>
                <th>Monto</th>
                <th>Nro de orden</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($taskData as $index => $task)
                <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $task['resource_name'] }}</td>
                <td>{{ $task['project_id'] }}</td>
                <td>{{ $task['work_order_date'] }}</td>
                <td>{{ $task['task_number'] }}</td>
                <td>{{ number_format($task['unit_price'], 2) }}</td>
                <td>{{ number_format($task['quantity'], 2) }}</td>
                <td>{{ number_format($task['amount'], 2) }}</td>
                <td>{{ $task['work_order_number'] }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="9" class="no-results">No se encontraron resultados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
