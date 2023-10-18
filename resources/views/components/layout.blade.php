<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <script
            type="text/javascript"
            src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"
        ></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", "node_modules/bootstrap/dist/js/bootstrap.js",])
</head>
<body>
    <x-menu />
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
                        <h2>{{ $title }}</h2>
                    </div>

                    <div class="col"></div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                	{{ $slot }}

            </main>

            <x-footer />
        </div>
    </div>
</body>
</html>
