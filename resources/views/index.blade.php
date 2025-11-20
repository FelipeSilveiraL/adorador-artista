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
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image" loading="lazy">
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
                                <img src="{{ asset('resources/img/blog/blog-post-square-3.webp') }}" alt="Blog Image" loading="lazy">
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

                        <p>Machine learning algorithms analyze vast amounts of patient data to recommend personalized
                            treatment plans. By considering genetic factors, medical history, lifestyle choices, and
                            treatment responses from similar cases, AI systems can suggest optimal therapeutic approaches.
                        </p>
                    </section>

                    <section id="monitoring" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-file-earmark-person-fill"></i> Author Profile</h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis asperiores molestias tenetur nam sapiente a laboriosam labore odit quam cupiditate, fugit, ea deleniti? Vel quos omnis sapiente eligendi, ab facere.</p>

                        <div class="featured-articles mt-2">
                            <h4>Eventos / Agendas</h4>
                            <div class="row g-4">

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                    <article class="article-card">
                                        <div class="article-img">
                                            <img src="{{ asset('resources/img/blog/blog-post-1.webp') }}" alt="Article"
                                                class="img-fluid">
                                        </div>
                                        <div class="article-details">
                                            <div class="post-category">Technology</div>
                                            <h5><a href="#">The Future of AI in Everyday Computing</a></h5>
                                            <div class="post-meta">
                                                <span><i class="bi bi-clock"></i> Jan 15, 2024</span>
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
                                            <div class="post-category">Privacy</div>
                                            <h5><a href="#">Understanding Digital Privacy in 2024</a></h5>
                                            <div class="post-meta">
                                                <span><i class="bi bi-clock"></i> Feb 3, 2024</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
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
                                </div>

                            </div>
                        </div>
                    </section>

                    <section id="challenges" class="content-block" data-aos="fade-up">
                        <h2><i class="bi bi-globe2"></i> Apoiamos essa causa</h2>

                        <div class="content-with-media">
                            <div class="media-element">
                                <img src="{{ asset('resources/img/health/logo_preto_png.png') }}" alt="AI Diagnostic Tools"
                                    class="content-image" loading="lazy">
                            </div>

                            <div class="text-content">
                                <p>Missão Polônia</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat similique sunt sint rem doloremque quae molestiae amet vero, ipsam voluptates distinctio labore eligendi illum architecto tempora, temporibus excepturi voluptatem nisi.</p>
                            </div>
                        </div>
                    </section>

                </main>
            </div>
        </div>
    </section><!-- /Blog Details Section -->
@endsection
