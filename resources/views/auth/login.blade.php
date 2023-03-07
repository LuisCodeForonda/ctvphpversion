<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="login__container w-full h-screen flex flex-row justify-center items-center ">
        <div class="text-white">
            <h1 class=" text-center text-4xl font-bold mb-2">Iniciar sesion</h1>
            <form action="/login" method="POST" class="from-color w-96 p-4 font-semibold rounded-xl">
                @csrf
                <label for="email">Correo</label>
                <input type="email" name="email" id="" class="w-full p-2 text-gray-900">
                <br>
                @error('email')
                    <small>*{{ $message }}</small>
                @enderror
                <br>
                <label for="password">Contraceña </label>
                <input type="password" name="password" id="" class="w-full p-2 mb-2 text-gray-900">
                <br>
    
    
                <input type="checkbox" name="recuerdame" id="" class="my-4">
                <label for="recuerdame">Recuerdame</label>
                <br>
                <input type="submit" value="Login" class="w-full rounded bg-blue-500 text-white p-2 cursor-pointer text-xl hover:bg-blue-600">
            </form>
        </div>
    </div>
    


</body>

</html>
