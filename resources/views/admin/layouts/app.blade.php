<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Laravel Igor</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Adicionei o favicon para dar um toque profissional --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="bg-gray-100 text-gray-800 antialiased">

    {{-- Header atualizado com flexbox e melhorias visuais --}}
    <header class="bg-blue-600 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Laravel Igor</h1>
            {{-- Você pode adicionar um menu ou links de navegação aqui --}}
            <nav>
                <a href="{{ route('users.index') }}" class="text-white hover:text-blue-300 px-4">Home</a>
                <a href="/about" class="text-white hover:text-blue-300 px-4">Sobre</a>
                <a href="/contact" class="text-white hover:text-blue-300 px-4">Contato</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-10 px-4 lg:px-0">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; {{ date('Y') }} Laravel Igor. Todos os direitos reservados.</p>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-blue-400 px-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" class="text-white hover:text-blue-400 px-2"><i class="fab fa-twitter"></i> GitHub</a>
                <a href="#" class="text-white hover:text-blue-400 px-2"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            </div>
        </div>
    </footer>

</body>

</html>
