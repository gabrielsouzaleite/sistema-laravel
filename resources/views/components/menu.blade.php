<header class="d-flex justify-content-center py-3">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
            </path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
            </path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
            </path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
            </path>
        </symbol>
    </svg>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <h1 class="navbar-brand">
                <a href="{{ url('/home') }}">
                    <img class="logo" style="margin: 10px 0" src="{{ asset('http://localhost/resources/img/Logo.png') }}" alt="Logo da Forma" />
                </a>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-md-center">
                    <li class="dropdown nav-item">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle nav-link">Cultura</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/5') }}">Código de Cultura</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/12') }}">Código de Ética</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/6') }}">Linha do Tempo</a>
                            </li>
                            <li>
                                <a class="dropdown-item" target="_blank"
                                    href="https://formaarquiteturalegal.com.br/#jornada">O que Fazemos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" target="_blank"
                                    href="https://formaarquiteturalegal.com.br/">Quem somos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" target="_blank"
                                    href="https://www.youtube.com/watch?v=HGSMweHpbyM&t=7s">Vídeos Institucionais</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle nav-link">RH</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('/ouvidoria') }}">Canal de Ouvidoria</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/2') }}">Cardápio de Benefícios</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/3') }}">Manual do Colaborador</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/1') }}">Organograma</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/passaporte-formidavel') }}">Passaporte Formidável</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/4') }}">Protocolo Sanitário</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/vagas') }}">Vagas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/nosso_time') }}">Nosso Time</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle nav-link">Acontece na Forma</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('/publicacoes/4') }}">Boletim de Radar</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/calendario_servicos_externos') }}">Calendário de
                                    Serviços Externos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/publicacoes/3') }}">Dicas da Sofia</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/publicacoes/2') }}">Feed Geral</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/publicacoes/1') }}">Forma Comunica</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="http://192.168.2.49/intranet/gallery-publications.php">Galeria de Fotos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/nossos_clientes') }}" class="nav-link">Nossos Clientes</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle nav-link">Qualidade</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item"
                                    href="http://192.168.2.49/intranet/adm/arquivos/Emails_especiais.xlsx">E-mails
                                    especiais</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/faq') }}">FAQ</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/lista_documentos/8') }}">Instruções de Trabalho</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/links') }}">Links Mais Acessados</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/9') }}">Manual da Qualidade</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/lista_documentos/7') }}">Modelos e Requisições</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/documentos/10') }}">Política de Comunicação</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/lista_documentos/11') }}">Treinamentos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle nav-link">Editar</a>
                        <ul class="dropdown-menu" role="menu">
                            {{-- {{item-menu-editar}} --}}
                            <li>
                                <a class="dropdown-item" href="{{ url('/editar/calendario') }}">Eventos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/editar/publicacoes') }}">Publicações</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/editar/perfil') }}">Editar meu Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/logout') }}">Sair da Intranet</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button
                            class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                            id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                            data-bs-display="static">
                            <svg class="bi my-1 theme-icon-active">
                                <use href="#moon-stars-fill"></use>
                            </svg>
                            <span class="d-lg-none ms-2">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="bd-theme">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="light">
                                    <svg class="bi me-2 opacity-50 theme-icon">
                                        <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="dark">
                                    <svg class="bi me-2 opacity-50 theme-icon">
                                        <use href="#moon-stars-fill"></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="auto">
                                    <svg class="bi me-2 opacity-50 theme-icon">
                                        <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </li>
                    <form class="d-flex" role="busca">
                        <input type="text" class="form-control me-2" placeholder="O que você procura?" />
                        <button type="submit" class="btn btn-primary">
                            Buscar
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <br />

</header>
