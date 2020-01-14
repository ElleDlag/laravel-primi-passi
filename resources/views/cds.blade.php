<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        @include('header')
        <div class="cds-container">
            @foreach ($datas as $data)
                <div class="{{ $data['class'] }}">
                    <img src="{{ $data['img'] }}"/>
                    <h3>{{ $data['title'] }}</h3>
                    <small>{{ $data['artist'] }}</small>
                    <strong>{{ $data['year'] }}</strong>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>