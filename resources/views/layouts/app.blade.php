<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title>@yield('titulo')</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="post-index-url" content="{{ route('post.index') }}">
        @stack('styles')
        @stack('scripts')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <header class="shadow py-3">
            <div class="flex justify-between items-center container mx-auto">
                <h1 class="text-4xl font-bold"><a href="/">InsanoGram</a></h1>
                <nav>
                    <ul class="flex gap-5">
                        @auth
                        <li class="text-orange-800">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit">Log out</button>
                            </form>
                           
                        </li>
                        @endauth
                        @guest
                            <li class="text-orange-800"><a href="{{route('login')}}">Login</a></li>
                            <li class="text-orange-800"><a href="{{route('register')}}">Crear Cuenta</a> </li>
                        @endguest
                        
                    </ul>
                </nav>
            </div>

            
        </header>
        <main class="bg-slate-100">
            @yield('contenido')
        </main>

       
        <footer class="flex justify-center font-semibold py-3">
            <p>InsanoGram - Todos los derechos reservados {{now()->year}}</p>
        </footer>
    </body>
</html>
