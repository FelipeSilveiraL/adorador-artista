@extends('layout.master')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="heading-title">Blog</h1>
                        <p class="mb-0">Inspirando músicos cristãos com sabedoria e arte</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Blog</li>
                    @if (administrador($paginaAtual, true) == true)
                        <li class="current"><a href="javascript:">Nova Postagem +</a></li>
                    @endif
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            {{-- LISTA DE POSTAGENS --}}
            <div class="col-lg-8">

                <!-- Category Postst Section -->
                <section id="category-postst" class="category-postst section">

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="row gy-5">

                            {{-- POSTAGENS --}}

                            @if ($dadosPesquisa)
                                <p>Você realizou uma pesquisa por <b>"{{ $dadosPesquisa }}"</b>, porém não encontramos nada!</p>
                                <p>Tente novamente ou <a href="{{ url('blog') }}">volte</a> para o blog</p>
                            @else
                                <div class="col-lg-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('resources/img/blog/blog-post-1.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center">12 Dezembro 2025</li>
                                            </ul>
                                        </div>

                                        <h2 class="title">
                                            <a href="javascript:">Titulo da Postagem</a>
                                        </h2>
                                        <p class="body">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tempore autem
                                            dolor quae, atque voluptas aspernatur omnis adipisci... <a href="javascript:"
                                                title="Continue lendo!"> <i class="bi bi-arrow-right-circle-fill"> </a></i>
                                        </p>

                                    </article>
                                </div><!-- End post list item -->
                            @endif

                        </div><!-- End blog posts list -->

                    </div>

                </section><!-- /Category Postst Section -->

                {{-- PAGINAÇÃO --}}
                {{-- <section id="pagination-2" class="pagination-2 section">

                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </section> --}}

            </div>

            {{-- LISTA DE POSTAGENS LATERAL --}}
            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Pesquisar</h3>
                        <form action="{{ url('pesquisar') }}" method="POST">
                            @csrf
                            <input type="text" name="pesquisar" id="pesquisar" maxlength="40">
                            <button type="submit" title="Pesquisar"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Postagens mais visitadas</h3>

                        <div class="post-item">
                            <img src="{{ asset('resources/img/blog/blog-post-square-1.webp') }}" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="blog-details.html">Titulo da postagem</a></h4>
                                <time datetime="2025-01-12"><i class="bi bi-clock"></i> 12 Dezembro 2025</time>
                            </div>
                        </div>

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>
@endsection
