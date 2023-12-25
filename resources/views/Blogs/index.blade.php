@extends('layouts.NavbarAdmin')

@section('content')
    <div class="container">
        
        <div class="cover">
            <form  class="flex-form" method="get" action="/search">
              <label for="from">
              </label>
              <input type="search" name="search" placeholder="Search here..." value="{{isset($search)? $search : ''}}">
              <input type="submit" value="Search">
            </form>
          </div>
        <section>


            <div class="container-blog">

                <ul class="cards">
                    @foreach ($blogs as $blog)
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__image"><img class="" src="{{ asset('storage/' . $blog->photo) }}"
                                        alt="{{ $blog->photo }}"></div>
                                <div class="card__content">
                                    <div class="card__title">{{ $blog->title }}</div>
                                    <p class="card__text">
                                        {{ $blog->quoted }}
                                    </p>
                                    <a href="{{ route('Blogs.show', $blog) }}"><button>LIRE</button></a>

                                    @if (isset(Auth::user()->id) && Auth::user()->id == $blog->user_id)
                                        <a href="{{ route('Blogs.edit', $blog->id) }}"><button>edit</button></a>

                                        <form action="{{ route('Blogs.destroy', $blog) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="X" class="btn btn-danger btn-sm px-3">
                                        </form>
                                    @endif

                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
                <div class="emptiness"></div>
                {{ $blogs->links() }}
            </div>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
