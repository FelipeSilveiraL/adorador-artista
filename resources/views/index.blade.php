@extends('layout.master')

@section('content')
    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="text-center">
                <div class="error-icon mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-exclamation-circle"></i>
                </div>

                <h1 class="error-code mb-4" data-aos="fade-up" data-aos-delay="300">500</h1>

                <h2 class="error-title mb-3" data-aos="fade-up" data-aos-delay="400">Oops! em manutenção</h2>

                <p class="error-text mb-4" data-aos="fade-up" data-aos-delay="500">
                    Se apareceu essa tela estamos enfrentando um pequeno problema ou estamos em manutenção para melhor atende-los.
                </p>

                <div class="error-action" data-aos="fade-up" data-aos-delay="700">
                    <a href="javascript:" class="btn btn-primary">Volta mais tarde!</a>
                </div>
            </div>

        </div>

    </section><!-- /Error 404 Section -->
@endsection
