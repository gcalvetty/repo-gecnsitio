<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Received</title>
</head>
<body>
    <p>Reciviste un email de: {{ $mensajeEmail['name'] }} - {{ $mensajeEmail['email'] }}</p>
    <p><strong>Telf.:</strong> {{ $mensajeEmail['phone'] }}</p>
    <p><strong>Asunto:</strong> {{ $mensajeEmail['message'] }}</p>
</body>
</html>