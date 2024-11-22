<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Tareas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td {
            color: #555;
        }
    </style>
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
            @foreach ($taskData as $index => $task)
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
            @endforeach
        </tbody>
    </table>
</body>
</html>
