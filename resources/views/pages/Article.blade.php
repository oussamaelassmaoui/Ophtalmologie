@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Blog et actualité</h2>
            <span>Articles et actualités de la clinique .</span>
        </div>
        <div class="cover">
            <form  class="flex-form" method="get" action="/search_Article">
              <label for="from">
              </label>
              <input type="search" name="search" placeholder="Search here..." value="{{isset($search)? $search : ''}}">
              <input type="submit" value="Search">
            </form>
          </div>
        <section>


            <div class="container-blog">

                <ul class="cards">
                    @foreach ($Articles as $Article)
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__image"><img class="" src="{{ asset('storage/' . $Article->photo) }}"
                                        alt="{{ $Article->photo }}"></div>
                                <div class="card__content">
                                    <div class="card__title">{{ $Article->title }}</div>
                                    <p class="card__text">
                                        {{ $Article->quoted }}
                                    </p>
                                    <a href="{{ route('Blogs.show', $Article) }}"><button>LIRE</button></a>


                                </div>
                            </div>
                        </li>
                    @endforeach
                   
                </ul>
                <div class="emptiness"></div>
                {{ $Articles->links() }}
            </div>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
