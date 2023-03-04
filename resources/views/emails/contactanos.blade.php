<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p>Nombre: {{ $contacto['name']}}</p>
    <p>Correo: {{ $contacto['email']}}</p>
    <p>asunto: {{ $contacto['subject']}}</p>
    <br>
    <p>
        {{ $contacto['content']}}
    </p>
</body>
</html>