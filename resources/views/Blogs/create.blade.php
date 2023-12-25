@extends('layouts.NavbarAdmin')

@section('content')
    <div class="container">
        @include('sweetalert::alert')
       
        <section>
            <form action="{{ route('Blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required  autofocus>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Quoted</label>
                    <input type="text" name="quoted" value="{{ old('Quoted') }}" class="form-control @error('Quoted') is-invalid @enderror" required  autofocus>
                    @error('quoted')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Text</label>
                    <textarea class="form-control" placeholder="Text" id="text" name="text" style="height: 100px"
                        class="form-control @error('text') is-invalid @enderror" required autofocus>{{ old('text') }}</textarea>
                    @error('text')
                        <div class="text-danger">{{ $message }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bootstrap-file"
                        class="d-flex flex-column align-items-center justify-content-center w-100 h-20  border-black border-dashed rounded cursor-pointer bg-white hover:bg-gray">
                        <div class="d-flex flex-column align-items-center justify-content-center pt-2 pb-6">
                            <div class="div-dexcellence-emptiness"></div>
                            <p class="text-xs text-black"> <svg class=" text-black" xmlns="http://www.w3.org/2000/svg"
                                    height="16" width="20"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                </svg>

                                SVG, PNG, JPG or GIF (MAX. 745x372px)
                            </p>
                            <div class="div-dexcellence-emptiness"></div>
                        </div>
                        <input id="bootstrap-file" type="file"  name="photo" value="{{ old('photo') }}" class="d-none form-control @error('photo') is-invalid @enderror" required  autofocus/>
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                </div>

                <div class="d-grid my-2">
                    <button type="submit" class="btn btn-primary ">Créer un article</button>
                </div>
            </form>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
