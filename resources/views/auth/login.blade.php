<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Iniciar sesion</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="email">Correo</label>
        <input type="email" name="email" id="">
        <br>
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <label for="password">Contraceña </label>
        <input type="password" name="password" id="">
        <br>

        
        <input type="checkbox" name="recuerdame" id="">
        <label for="recuerdame">Recuerdame</label>
        <br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>