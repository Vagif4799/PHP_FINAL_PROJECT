@extends('layouts.master')

@section('content')
<header class="main-header " style="background-image: url({{ asset('img/') }}/intro.jpg)">
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title">Fashion Critiques</h1>
            <div class="entry-title-divider">
                <span></span><span></span><span></span>
            </div>
            <h2 class="page-description">Thoughts, reviews and ideas since 1999.</h2>
        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>
<main id="content" class="content" role="main">
    <div class="wraps">
        <img src="{{ asset('img/') }}/shadow.png" class="wrapshadow">
        <div class="grid">
            @foreach($articles as $article)
            <div class="grid-item">
                <article class="post">
                    <div class="wrapgriditem">
                        <header class="post-header">
                            <h2 class="post-title"><a href="{{route('post', $article->slug)}}">{{$article->title}}</a></h2>
                        </header>
                        <section class="post-excerpt">
                            <p>
                                 {!! $article->description !!} <a class="read-more" href="/retro-is-the-new-modern/">&raquo;</a>
                            </p>
                        </section>
                        <footer class="post-meta">
                            <img class="author-thumb" src="{{ asset('img/') }}/gravatar.jpg" alt="David" nopin="nopin"/>
                            <a href="author.html">{{$article->author}}</a>
                            <time class="post-date" datetime="2016-12-18">{{"on ".\Illuminate\Support\Carbon::parse($article->created_at)->format('F j, Y')}}</time>
                        </footer>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <nav class="pagination" role="navigation">
{{--            <span class="page-number">Page 1 of 2</span>--}}
            <a class="older-posts" href="page2.html">{{$articles->links()}} </a>
        </nav>
    </div>
</main>
@endsection
