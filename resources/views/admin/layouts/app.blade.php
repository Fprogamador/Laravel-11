<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Laravel Igor</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-xl">Header Padrão</h1>
        </div>
    </header>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>Footer Padrão</p>
    </footer>

</body>

</html>
