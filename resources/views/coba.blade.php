<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Coba</title>
</head>

<body>
    <h1>Ini view coba laravel</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini perulangan menggunakan blade</h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/foto.jpg') }}" width="400" alt="">
</body>

</html>
