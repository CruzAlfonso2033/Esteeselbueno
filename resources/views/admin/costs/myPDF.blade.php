<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>{{$title}}</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Element</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
        @foreach ($costs as $cost)
        <tr>
            <td>{{ $cost->id }}</td>
            <td>{{ $cost->element }}</td>
            <td>{{ $cost->date }}</td>
            <td>{{ $cost->price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>