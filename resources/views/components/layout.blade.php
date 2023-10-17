<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.menu')
    <div class="container-fluid">
        <div class="main-panel">
            <div class="row justify-content-center">

                <div class="col"></div>

                <div class="col text-center">
                    <a
                        href="http://chamados.forma.arq"
                        target="_blank"
                        class="btn btn-primary"
                        >Sistema de chamados</a
                    >
                </div>

                <div class="col"></div>
            </div>

            <main class="container">

                <div class="row mt-3">
                    <div class="col"></div>

                    <div class="col text-center">
                        <h2>@yield('title')</h2>
                    </div>

                    <div class="col"></div>
                </div>

                	@yield('content')

            </main>

            @include('components.footer')
        </div>
    </div>
</body>
</html>
