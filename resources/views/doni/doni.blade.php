<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Belajar</title>
</head>
<body>
    <style>
        .text-left {
            text-align: left;
        }
    </style>
    <div>
        <a href="{{ url('doni/create') }}">Create City</a>
        <table style="width: 50%" class="text-left">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $keyCity => $city)
                    <tr>
                        <td>{{ $keyCity + 1 }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ url("doni/{$city->id}/edit") }}">Edit City</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>