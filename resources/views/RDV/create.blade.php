@extends('layouts.NavbarAdmin')

@section('content')
<div class="container">
    @include('sweetalert::alert')
<div class="justify-content">
    <div class="content-4">
        <form action="{{route('RDV.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
             <label for="nom_complet">nom complet</label>
             <input type="text" name="nom_complet" placeholder="nom complet" value="{{old('nom_complet')}}" class="form-control @error('nom_complet') is-invalid @enderror" required  autofocus/>
             {{-- message de error --}}
             @error('nom_complet')
                 <div class="text-danger">{{$message}} </div>
             @enderror
             <label for="Date_de_naissance">Date de naissance</label>
             <input type="date" name="Date_de_naissance" placeholder="Date de naissance" value="{{old('Date_de_naissance')}}" class="form-control @error('Date_de_naissance') is-invalid @enderror" required  autofocus  max="<?= date('Y-m-d'); ?>"/>
             @error('Date_de_naissance')
             <div class="text-danger">{{$message}} </div>
             @enderror
             <label for="Téléphone">Téléphone</label>
             <input type="text" name="Téléphone" placeholder="Téléphone" value="{{old('Téléphone')}}" class="form-control @error('Téléphone') is-invalid @enderror" required  autofocus/>
             @error('Téléphone')
             <div class="text-danger">{{$message}} </div>
             @enderror
             <label for="Email">Email</label>
             <input type="Email" name="Email" placeholder="Email" value="{{old('Email')}}" class="form-control @error('Email') is-invalid @enderror" required autocomplete="email" autofocus/>
             @error('Email')
             <div class="text-danger">{{$message}} </div>
             @enderror
             <label for="CIN">CIN/N°Passeport</label>
             <input type="text" name="CIN" placeholder="CIN/N°Passeport" value="{{old('CIN')}}" class="form-control @error('CIN') is-invalid @enderror" required  autofocus/>
             @error('CIN')
             <div class="text-danger">{{$message}} </div>
             @enderror
             <label for="Date_rendez_vous">Date de rendez-vous souhaité</label>
             <input type="date" name="Date_rendez_vous" placeholder="Date de rendez-vous souhaité" value="{{old('Date_rendez_vous')}}" class="form-control @error('Date_rendez_vous') is-invalid @enderror" required  autofocus min="<?= date('Y-m-d'); ?>"/>
             @error('Date_rendez_vous')
             <div class="text-danger">{{$message}} </div>
             @enderror
            </div>
            <button>ENVOYER</button>
        </form>
    </div> 
</div>

</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
@endsection
