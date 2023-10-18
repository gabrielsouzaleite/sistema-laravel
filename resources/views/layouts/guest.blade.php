<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login</title>

        <!-- Scripts -->
        @vite(['resources/css/signin.css', "resources/css/root.css", "resources/css/alerts.css"])

    </head>
    <body>
        <main class="page">
            <img src="{{ asset('resources/img/Logo.png') }}" alt="Logo da Forma Arquitetura Legal" />

                {{ $slot }}

        </main>
    </body>
</html>
