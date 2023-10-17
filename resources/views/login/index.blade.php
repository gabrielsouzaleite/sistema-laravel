<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />

        <title>Login</title>
        {{-- <link
            rel="icon"
            type="image/png"
            href="{{URL}}/assets/img/fav-icon.png"
        /> --}}

        {{-- <link href="{{URL}}/assets/css/root.css" rel="stylesheet" />
        <link href="{{URL}}/assets/css/alerts.css" rel="stylesheet" />
        <link href="{{URL}}/assets/css/signin.css" rel="stylesheet" /> --}}

            @vite(['resources/css/signin.css', "resources/css/root.css", "resources/css/alerts.css"])
    </head>

    <body>
        <main class="page"><img src="{{ asset('resources/img/Logo.png') }}" alt="Logo da Forma Arquitetura Legal" />

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="POST" id="login-intranet">
    @csrf
    <fieldset>
        <div class="input-wrapper">
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Login"
                required
            />
        </div>
        <div class="input-wrapper">
            <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Senha"
                required
            />
        </div>
    </fieldset>
</form>
<footer>
    <input
        class="login-button"
        value="ENTRAR"
        type="submit"
        form="login-intranet"
    />
</footer>
</main>
    </body>
</html>
