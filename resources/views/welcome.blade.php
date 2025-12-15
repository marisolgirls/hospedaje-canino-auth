<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center bg-white p-8 rounded shadow">
        <h1 class="text-2xl mb-4">Bienvenido a Hospedaje Canino</h1>

        <p class="mb-6">Inicia sesión o regístrate para continuar</p>

        <a href="{{ route('login') }}" class="mr-4 underline">
            Login
        </a>

        <a href="{{ route('register') }}" class="underline">
            Register
        </a>
    </div>
</body>
</html>
