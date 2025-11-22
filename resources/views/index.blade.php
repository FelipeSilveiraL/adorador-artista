@extends('layout.master')

@section('content')
    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

        <div class="container-fluid p-0" data-aos="fade">

            <div class="blog-hero-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 1000,
                    "effect": "fade",
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": 1,
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    }
                    }
                </script>

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-hero-item">
                            <img src="{{ asset('resources/img/blog/blog-hero-1.webp') }}" alt="Blog Hero Image"
                                class="img-fluid">
                            <div class="blog-hero-content">
                                {{-- <span class="category"><a href="blog-details.html" class="read-more">Continue Reading <i
                                            class="bi bi-arrow-right"></i></a></span> --}}

                            </div>
                        </div>
                    </div><!-- End slide item -->
                    <div class="swiper-slide">
                        <div class="blog-hero-item">
                            <img src="{{ asset('resources/img/blog/blog-hero-2.webp') }}" alt="Blog Hero Image"
                                class="img-fluid">
                            <div class="blog-hero-content">
                                {{-- <span class="category"><a href="blog-details.html" class="read-more">Continue Reading <i
                                            class="bi bi-arrow-right"></i></a></span> --}}

                            </div>
                        </div>
                    </div><!-- End slide item -->

                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

        </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Postagens em Destaque</span>
            <h2>Postagens em Destaque</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-posts-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 4500
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 40,
                    "centeredSlides": true,
                    "breakpoints": {
                        "768": {
                        "slidesPerView": 1.5,
                        "spaceBetween": 30
                        },
                        "1200": {
                        "slidesPerView": 2.2,
                        "spaceBetween": 40
                        }
                    },
                    "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                    }
                    }
                </script>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image"
                                    loading="lazy">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                        eiusmod</a></h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                <div class="blog-footer">
                                    <div class="reading-time">
                                        <i class="bi bi-clock"></i>
                                        <span>1, Janeiro 2025</span>
                                    </div>
                                    <a href="{{ url('blog-details', ['id' => 1]) }}" class="btn-read-more">
                                        <span>Continue Lendo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image"
                                    loading="lazy">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                        eiusmod</a></h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                <div class="blog-footer">
                                    <div class="reading-time">
                                        <i class="bi bi-clock"></i>
                                        <span>1, Janeiro 2025</span>
                                    </div>
                                    <a href="{{ url('blog-details', ['id' => 1]) }}" class="btn-read-more">
                                        <span>Continue Lendo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image"
                                    loading="lazy">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                        eiusmod</a></h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                <div class="blog-footer">
                                    <div class="reading-time">
                                        <i class="bi bi-clock"></i>
                                        <span>1, Janeiro 2025</span>
                                    </div>
                                    <a href="{{ url('blog-details', ['id' => 1]) }}" class="btn-read-more">
                                        <span>Continue Lendo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image"
                                    loading="lazy">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                        eiusmod</a></h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                <div class="blog-footer">
                                    <div class="reading-time">
                                        <i class="bi bi-clock"></i>
                                        <span>1, Janeiro 2025</span>
                                    </div>
                                    <a href="{{ url('blog-details', ['id' => 1]) }}" class="btn-read-more">
                                        <span>Continue Lendo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image"
                                    loading="lazy">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                        eiusmod</a></h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                <div class="blog-footer">
                                    <div class="reading-time">
                                        <i class="bi bi-clock"></i>
                                        <span>1, Janeiro 2025</span>
                                    </div>
                                    <a href="{{ url('blog-details', ['id' => 1]) }}" class="btn-read-more">
                                        <span>Continue Lendo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div><!-- End slide item -->
                </div>


                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Featured Posts Section -->

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
        <div class="container" data-aos="fade-up">

            <div class="article-body">

                <div class="sidebar-navigation" data-aos="fade-right">
                    <div class="nav-sticky">
                        <h3><i class="bi bi-list-ul"></i> Contéudo</h3>
                        <ul class="content-nav">
                            <li><a href="#diagnostics">Mídia Digital</a></li>
                            <li><a href="#treatment">Nossa missão</a></li>
                            <li><a href="#monitoring">Author Profile</a></li>
                            <li><a href="#challenges">Apoiamos essa causa</a></li>
                        </ul>
                    </div>
                </div>

                <main class="main-content">

                    <section id="diagnostics" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-file-earmark-slides-fill"></i> Mídia Digital</h2>

                        <div class="content-with-media">
                            <div class="media-element">
                                <img src="{{ asset('resources/img/health/health.png') }}" alt="AI Diagnostic Tools"
                                    class="content-image" loading="lazy">
                                <div class="image-caption">
                                    <a href="https://www.youtube.com/watch?v=XPe3cVBGDnk" target="_blank"
                                        rel="noopener noreferrer">
                                    </a>
                                </div>
                            </div>

                            <div class="text-content">
                                <p>A música é uma das formas mais profundas de adoração. Quando cantamos para Deus, abrimos
                                    nossa alma e permitimos que Ele transforme nosso coração. Cada letra, acorde e melodia
                                    tem o poder de alcançar vidas, curar emoções e despertar um relacionamento mais íntimo
                                    com o Criador.</p>

                                <div class="challenges-grid">
                                    <div class="challenge-card">
                                        <div class="challenge-header">
                                            <i class="bi bi-file-earmark-music"></i>
                                            <h3><a href="https://onerpm.link/238942128486" target="_blank"
                                                    rel="noopener noreferrer">ONERPM</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="challenges-grid">
                                    <div class="challenge-card">
                                        <div class="challenge-header">
                                            <i class="bi bi-youtube"></i>
                                            <h3><a href="https://www.youtube.com/watch?v=XPe3cVBGDnk" target="_blank"
                                                    rel="noopener noreferrer">YoutTube</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="treatment" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-book-half"></i> Nossa missão</h2>
                        <h3>Inspirando músicos cristãos com sabedoria e arte</h3>
                        <p>
                            Desde 2009, o Senhor Jesus plantou no coração de Dayane Cristina o desejo de se capacitar
                            ministerialmente na área da música, com o propósito de discipular, inspirar e apoiar adoradores
                            e artistas no desenvolvimento de seus talentos sob a ótica da cosmovisão bíblica.
                        </p>
                        <p>
                            Ao longo dessa caminhada, por meio das redes sociais e dos conteúdos publicados — incluindo
                            artigos do antigo blog <i>Meu Devocional com Cristo</i> — este ministério tem alcançado e fortalecido
                            milhares de adoradores no Brasil e em diversas partes do mundo.
                        </p>
                        <p>
                            Nosso compromisso é continuar servindo, ensinando e edificando vidas através da música, da
                            Palavra e da adoração genuína.
                        </p>
                    </section>

                    <section id="monitoring" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-file-earmark-person-fill"></i> Author Profile</h2>
                        <h3>Dayane Cristina</h3>

                        <p>
                            Dayane Cristina, paulista e primogênita de três irmãos, atua como ministra de louvor há mais de
                            15 anos e é representante no Brasil dos missionários poloneses: Thomasz e Margaret Dykałowicz.
                            Aos 17 anos iniciou sua jornada como compositora, escrevendo canções de adoração nascidas de
                            seus momentos de oração e devocional, em parceria com seu irmão, Josué Júnior, do ministério Rio
                            das Nações (@riodasnacoes).
                        </p>
                        <p>
                            Ao longo de sua formação espiritual e musical, foi profundamente influenciada por seminários com
                            líderes como Pr. Antônio Cirilo, David Quinlan e Casa de Davi. Sua primeira composição autoral,
                            <i>Sacrifício de Amor</i>, marcou o início de sua carreira solo e foi lançada oficialmente em 2023 no
                            YouTube e nas plataformas de áudio.
                        </p>
                        <p>
                            Sua trajetória vocal começou na igreja onde conheceu a Cristo, lugar onde se desenvolveu como
                            solista, compositora e adoradora. Casada com o guitarrista Felipe Silveira e mãe de duas
                            meninas, Dayane sentiu-se chamada a compartilhar e ensinar tudo o que o Senhor tem lhe ensinado
                            ao longo de sua caminhada ministerial.
                        </p>
                        <p>
                            Desde 2016, ela tem alcançado adoradores por meio do blog <i>Meu Devocional com Cristo</i>, e agora se
                            prepara para lançar seu primeiro livro, voltado especialmente para ministros de música que
                            desejam servir com excelência, profundidade e adoração genuína.
                        </p>

                        <div class="featured-articles mt-5">
                            <h4>Eventos / Agendas</h4>
                            <div class="row g-4">

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <article class="article-card">
                                        <div class="article-img">
                                            <img src="{{ asset('resources/img/blog/blog-post-1.webp') }}" alt="Article"
                                                class="img-fluid">
                                        </div>
                                        <div class="article-details">
                                            <div class="post-category">Recital de alunos - <a href="https://www.instagram.com/isa.voice/" target="_blank" rel="noopener noreferrer"> ISA VOICE</a></div>
                                            <div class="post-meta">
                                                <span><i class="bi bi-clock"></i> Novembro, 2024</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                    <article class="article-card">
                                        <div class="article-img">
                                            <img src="{{ asset('resources/img/blog/blog-post-2.webp') }}" alt="Article"
                                                class="img-fluid">
                                        </div>
                                        <div class="article-details">
                                            <div class="post-category">Lançamento do single</div>
                                            <div class="post-meta">
                                                <span><i class="bi bi-clock"></i> Maio, 2023</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                {{-- <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                                    <article class="article-card">
                                        <div class="article-img">
                                            <img src="{{ asset('resources/img/blog/blog-post-2.webp') }}" alt="Article"
                                                class="img-fluid">
                                        </div>
                                        <div class="article-details">
                                            <div class="post-category">Privacy</div>
                                            <h5><a href="#">Understanding Digital Privacy in 2024</a></h5>
                                            <div class="post-meta">
                                                <span><i class="bi bi-clock"></i> Feb 3, 2024</span>
                                            </div>
                                        </div>
                                    </article>
                                </div> --}}

                            </div>
                        </div>
                    </section>

                    <section id="challenges" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-globe2"></i> Apoiamos essa causa</h2>

                        <div class="content-with-media">
                            <div class="media-element">
                                <img src="{{ asset('resources/img/health/logo_preto_png.png') }}"
                                    alt="AI Diagnostic Tools" class="content-image" loading="lazy">
                            </div>

                            <div class="text-content">
                                <p class="destaque-texto">Missão Polônia</p>
                                <p>Cremos que o Brasil é o berço do último grande avivamento que o Senhor prometeu derramar
                                    sobre a Terra. E o nosso coração arde para que a Polônia não fique de fora desse
                                    movimento, para que muitos sejam alcançados pelo Evangelho transformador de Jesus
                                    Cristo.
                                </p>
                            </div>
                        </div>
                        <div class="text-content">
                            <p class="destaque-texto" style="font-size: 25px"><i class="bi bi-asterisk"></i> Como você
                                pode fazer parte desse
                                movimento?</p>
                        </div>
                        <div class="content-with-media">
                            <div class="text-left">

                                <p><i class="bi bi-check-all dourado"></i> <span class="destaque-texto">Ore pelos
                                        <a href="https://www.instagram.com/avivamentopolonia/" target="_blank" rel="noopener noreferrer"> missionários nativos Tomasz e
                                        Malgorzata</a></span></br>
                                    Interceda pela vida, fortalecimento e provisão deles, bem como pelo avanço da obra
                                    missionária em solo polonês.
                                </p>
                                <p><i class="bi bi-check-all dourado"></i> <span class="destaque-texto">Contribua com seus
                                        talentos</span></br>
                                    Doe seu tempo na produção de devocionais bíblicos, cartas de encorajamento e materiais
                                    que edificam os novos convertidos.
                                </p>
                                <p><i class="bi bi-check-all dourado"></i> <span class="destaque-texto">Contribua
                                        financeiramente</span></br>
                                    Sua oferta nos ajuda com os custos de deslocamento e discipulado, devido às longas
                                    distâncias entre os pequenos grupos que estão sendo formados.
                                </p>
                            </div>
                            <div class="text-right">
                                <p><i class="bi bi-check-all dourado"></i> <span class="destaque-texto"> Chaves PIX para
                                        contribuição:</span></p>
                                <p class="destaque-texto">🇧🇷 PIX Brasil: avivamentopolonia@gmail.com - Nubank</p>
                                <p>
                                    (Conta em nome da coordenadora brasileira, Dayane Cristina, responsável por repassar
                                    todas as arrecadações.)
                                </p>
                                <p class="destaque-texto">
                                    🇪🇺 PIX Europa:
                                </p>
                                <p>
                                    PL 93 1140 2004 0000 3502 7553 5771</br>
                                    Conta Revolut: 14 2910 0006 2469 8002 0809 5964</br>
                                </p>
                            </div>

                        </div>
                        <div class="text-content">
                            <p class="destaque-texto" style="font-size: 25px"><i class="bi bi-asterisk"></i> Nosso
                                propósito!</p>
                        </div>
                        <p>
                            Além do discipulado presencial e acompanhamento contínuo dos novos
                            convertidos, sonhamos em estabelecer a primeira rádio evangélica da Polônia, com
                            programação em russo e polonês, para alcançar ainda mais vidas com a mensagem da
                            Cruz.
                        </p>
                        <p>
                            Faça parte do que Deus está fazendo na Polônia! Quando você ora, serve ou contribui,
                            você se torna corresponsável pelo avanço do Reino entre as nações.
                        </p>
                    </section>
                </main>
            </div>
        </div>
    </section>
@endsection
