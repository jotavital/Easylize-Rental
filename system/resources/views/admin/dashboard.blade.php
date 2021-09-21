<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easylize Rental - Dashboard</title>
</head>

<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="text" name="option" value="yes">
        <button type="submit">logout</button>
    </form>
</body>

</html>