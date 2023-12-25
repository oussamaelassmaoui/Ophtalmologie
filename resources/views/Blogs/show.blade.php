@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Blog Details</h2>
        </div>
        <!-- Blog-details Section - Blog Details Page -->
        <section id="blog-details" class="blog-details">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="article">

                            <div class="post-img">
                                <img class="img-fluid" src="{{ asset('storage/' . $blog->photo) }}"
                                    alt="{{ $blog->photo }}">
                            </div>

                            <h2 class="title">{{ $blog->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>{{ $blog->user->name }}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ $blog->updated_at }}
                                    </li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <span>
                                    {{ $blog->text }}
                                </span>

                            </div><!-- End post content -->



                            <div class="comments">
                                <div class="reply-form">
                                    <livewire:comments :model="$blog" />


                                </div>

                            </div><!-- End blog comments -->

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebare">

                            <div class="sidebar-item search-form">

                                <form action="/search" class="mt-3" method="get">
                                    <input type="text" name="search">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->


                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">ARTICLES RÉCENTS</h3>
                                @foreach ($ARTICLES as $ARTICLE)
                                    <div class="post-item">
                                        <img class="flex-shrink-0" src="{{ asset('storage/' . $ARTICLE->photo) }}"
                                            alt="{{ $ARTICLE->photo }}">

                                        <div>
                                            <h4><a href="{{ route('Blogs.show', $ARTICLE) }}">{{ $ARTICLE->title }}</a></h4>
                                            <time>{{ $ARTICLE->updated_at }}</time>
                                        </div>
                                    </div><!-- End recent post item-->
                                @endforeach
                                <div class="emptiness"></div>
                                {{ $ARTICLES->links() }}
                            </div><!-- End sidebar recent posts-->
                        </div><!-- End Sidebar -->

                    </div>

                </div>

            </div>

        </section><!-- End Blog-details Section -->
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
