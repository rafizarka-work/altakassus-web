@php($isAr = app()->getLocale() === 'ar')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ $isAr ? 'rtl' : 'ltr' }}">

<head>
    @include('layouts.includes.styles')
</head>

<body class="{{ $isAr ? 'rtl' : 'ltr' }}">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{ asset('img/logos/condation-and-constract.svg') }}" alt="logo" />
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                @include('layouts.includes.navbar-default')
            </div>
        </header>
        <!-- Header Ends -->

        <!-- Banner Starts -->
        <section class="banner banner-blog-post" style="background-image: url('{{ asset($article['image']) }}')">
            <div class="content text-center">
                <div class="text-center top-text">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1>{{ $article['title'] }}</h1>
                    </div>
                    <!-- Main Heading Ends -->
                    <hr>
                    <!-- Meta Starts -->
                    <div class="meta">
                        <span><i class="fa fa-calendar"></i> {{ $article['date'] }}</span>
                        @if(isset($article['author']))
                        <span><i class="fa fa-user"></i> {{ $article['author'] }}</span>
                        @endif
                    </div>
                    <!-- Meta Ends -->
                </div>
            </div>
        </section>
        <!-- Banner Ends -->

        <!-- Section Content Starts -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="content col-xs-12 col-md-8">
                        <!-- Article Starts -->
                        <article>
                            <!-- Figure Starts -->
                            @if(isset($article['image']))
                            <figure>
                                <img class="img-responsive" src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
                            </figure>
                            @endif
                            <!-- Figure Ends -->

                            <!-- Content Starts -->
                            <div class="content-article">
                                {!! nl2br(e($article['content'])) !!}
                            </div>
                            <!-- Content Ends -->
                        </article>
                        <!-- Article Ends -->
                    </div>

                    <!-- Sidebar Starts -->
                    <div class="sidebar col-xs-12 col-md-4">
                        <!-- Latest Posts Widget Starts -->
                        <div class="widget recent-posts">
                            <h3 class="widget-title">{{ __('common.blogs.other_articles') }}</h3>
                            <ul class="unstyled clearfix">
                                @foreach($otherArticles as $other)
                                <!-- Recent Post Widget Starts -->
                                <li>
                                    @if(isset($other['thumbnail']))
                                    <div class="posts-thumb pull-left">
                                        <a href="{{ route('blog.detail', ['locale' => app()->getLocale(), 'slug' => $other['slug']]) }}">
                                            <img alt="{{ $other['title'] }}" src="{{ asset($other['thumbnail']) }}">
                                        </a>
                                    </div>
                                    @endif
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="{{ route('blog.detail', ['locale' => app()->getLocale(), 'slug' => $other['slug']]) }}">{{ $other['title'] }}</a>
                                        </h4>
                                        <p class="post-meta">
                                            <span class="post-date"><i class="fa fa-clock-o"></i> {{ $other['date'] }}</span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <!-- Recent Post Widget Ends -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Latest Posts Widget Ends -->
                    </div>
                    <!-- Sidebar Ends -->
                </div>
            </div>
        </section>
        <!-- Section Content Ends -->

        @include('layouts.includes.footer')
        @include('layouts.includes.whatsapp')

        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    @include('layouts.includes.script')
</body>

</html>
