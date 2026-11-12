<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lista da ordem das entregas</h1>
<ul>
@foreach ($entregas as $entrega)
<li>{{ $entrega['destinatario'] }} — {{ $entrega['cidade'] }}</li>
@endforeach
</ul>
</body>
</html>