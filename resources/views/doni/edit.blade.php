<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Cities Edit</title>
</head>
<body>
    <ul>
        <li>Dibuat : {{ $city->created_at }}</li>
        <li>Diubah : {{ $city->updated_at }}</li>
    </ul>
    <form action="{{ url("doni/{$city->id}") }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" value="{{ $city->name }}" />
        <button type="submit">Submit</button>
    </form>
</body>
</html>