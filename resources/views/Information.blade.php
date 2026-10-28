<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/help') }}">Help</a>
        <a href="{{ url('/information') }}">Information</a>
    </nav>

    <h1>Information</h1>
    
    <p>
        {{$informationDes}}
    </p>

</body>
</html>