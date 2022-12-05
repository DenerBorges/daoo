<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stimulus</title>
    @vite(['resources/js/app.js',
            'resources/css/app.css',
            'resources/css/main.css',
            'resources/css/show.css'])
</head>
<body>
    <div>{{$slot}}</div>
</body>
</html>
