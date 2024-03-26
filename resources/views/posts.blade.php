@extends('layouts.main')

@section('conten')
    @include('partials.bread')

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Blog</h2>
                <p>Recent posts form our <?php echo $title; ?></p>
            </header>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('assets/img/b1.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <span class="post-date">By: {{ $post->author }}</span>
                            <h3 class="post-title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <a href="/post/{{ $post->slug }}" class="readmore stretched-link mt-auto"><span>Read
                                    More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Recent Blog Posts Section -->

    @include('partials.footer')
@endsection
