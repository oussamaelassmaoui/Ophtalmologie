@extends('layouts.NavbarAdmin')


@section('content')
    <div class="container">

        @include('sweetalert::alert')
        <section class="section">
            <div class="row">
                @foreach ($Slides as $Slide)
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $Slide->name }}</h5>
                                <span>{{ $Slide->text }}</span>
                                <div class="div-dexcellence-emptiness"></div>
                                <div class="row">

                                    @if (isset(Auth::user()->id) && Auth::user()->id == $Slide->user_id)
                                        <div class="col">
                                            <a href="{{ route('Slides.edit', $Slide->id) }}"
                                                class="btn btn-primary">Modifier</a>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('Slides.destroy', $Slide) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <a type="submit" href="{{ route('Slides.edit', $Slide->id) }}" class="btn btn-primary">Modifier</a> --}}

                                                <input type="submit" value="supprimer" class="btn btn-danger">
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </section>


    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
