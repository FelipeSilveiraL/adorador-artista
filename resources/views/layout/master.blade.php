<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Adorador Artista</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('resources/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('resources/img/logo.png') }}" rel="logo">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('resources/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('resources/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('resources/img/logo.png') }}" alt="">
                {{-- <h1 class="sitename">Adorador Artista</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ $paginaAtual == 'index' ? 'active' : '' }}">Sobre </a>
                    </li>
                    <li><a href="{{ url('blog') }}"
                            class="{{ $paginaAtual == 'blog' || $paginaAtual == 'blog-details' ? 'active' : '' }}">Blog</a>
                    </li>
                    {{-- <li><a href="author-profile.html">Loja</a></li> --}}
                    <li><a href="#footer">Contato</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="https://www.facebook.com/profile.php?id=61577621965663" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/adoradoraartista/#" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>

                <a href="https://www.youtube.com/watch?v=XPe3cVBGDnk" target="_blank" aria-label="YouTube"><i
                        class="bi bi-youtube"></i></a>
                @if ($paginaAtual == 'blog' || $paginaAtual == 'blog-details')

                    @if (!Auth::check())
                        {{-- Usuário NÃO está logado --}}
                        <a href="javascript:" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-person" title="Administrador"></i>
                        </a>
                    @else
                        {{-- Usuário logado --}}
                        <span style="font-size: 12px;">
                            Olá, {{ Auth::user()->name ?? Auth::user()->username }}
                            <a href="{{ url('logout') }}"> [Sair]</a>
                        </span>
                    @endif

                @endif

            </div>

        </div>
    </header>

    <main class="main">

        @yield('content')

    </main>

    <!-- Modal login-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login / Criar Conta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('login') }}" method="post">
                    @csrf
                    <div class="modal-body">

                        <p style="font-size: 12px">Caso queira trocar o formulário para criação, basta clicar no
                            checkbox abaixo, caso contrario
                            irá apenas logar no sistema!</p>
                        <div class="row">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="E-mail" name="user"
                                    aria-label="email" required>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Senha" name="password"
                                    aria-label="Senha" required>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" id="CriarConta" type="checkbox" name="criarConta">
                                <label for="form-check-input">Criar Conta</label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                        <!-- adicionando um id ao botão -->
                        <button type="submit" class="btn btn-primary" id="btnLogin">Logar</button>
                    </div>
                </form>

                <script>
                    document.getElementById('CriarConta').addEventListener('change', function() {
                        const botao = document.getElementById('btnLogin');

                        if (this.checked) {
                            botao.textContent = 'Salvar';

                            // Trocar cor: primary -> success
                            botao.classList.remove('btn-primary');
                            botao.classList.add('btn-success');

                        } else {
                            botao.textContent = 'Logar';

                            // Voltar cor: success -> primary
                            botao.classList.remove('btn-success');
                            botao.classList.add('btn-primary');
                        }
                    });
                </script>

            </div>
        </div>
    </div>

    <footer id="footer" class="footer light-background">

        <div class="footer-main">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget footer-about">
                            <a href="index.html" class="logo">
                                <span class="sitename">Adorador Artista</span>
                            </a>
                            <p>"Um espaço criado para inspirar adoradores e artistas a viverem uma jornada mais profunda
                                com Deus. Aqui compartilhamos reflexões, músicas, artes e conteúdos que edificam e
                                apontam para Cristo."</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h5>Conecte conosco</h5>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61577621965663" target="_blank"
                                    class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/adoradoraartista/#" target="_blank"
                                    aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/watch?v=XPe3cVBGDnk" target="_blank"
                                    aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h4>Informações de contato</h4>
                            <div class="footer-contact">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Curitiba - Paraná - Brasil</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <span>adoradorartista@gmail.com</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-clock"></i>
                                    <span>Segunda a sexta 9h às 18h - Sábados 9h às 16h
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="credits mt-1">
                            Desenvolvido por <a href="https://cloudsolutionsltda.com/" target="_blank">Cloud Solutions
                                LTDA</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    {{-- <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}

    <div class="container">
        <a href="https://chat.whatsapp.com/FWyeZnJv5LD3FpMWqJwIoW" target="_blank"
            class="scroll-top d-flex align-items-center justify-content-center active"><i
                class="bi bi-whatsapp"></i></a>
    </div>


    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resources/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('resources/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('resources/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('resources/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('resources/js/main.js') }}"></script>
    {{-- <script src="{{ asset('resources/js/seg.js') }}"></script> --}}

</body>

</html>
