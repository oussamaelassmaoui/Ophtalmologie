
@extends('layouts.NavbarAdmin')

@section('content')
    <form  action="{{ route('RDV.update',$rdv->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom complet</label>
            <input type="text" name="nom_complet" class="form-control @error('nom_complet') is-invalid @enderror" required  autofocus value="{{ old('nom_complet',$rdv->nom_complet) }}">
            @error('nom_complet')
              <div class="text-danger">{{$message}}</div>  
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Date de naissance</label>
            <input type="date" name="Date_de_naissance" class="form-control" value="{{  old('Date_de_naissance',$rdv->Date_de_naissance) }}" class="form-control @error('Date_de_naissance') is-invalid @enderror" required  autofocus  max="<?= date('Y-m-d'); ?>">
            @error('Date_de_naissance')
            <div class="text-danger">{{$message}}</div>  
          @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Téléphone</label>
            <input type="text" name="Téléphone" class="form-control" value="{{  old('Téléphone',$rdv->Téléphone) }}" class="form-control @error('Téléphone') is-invalid @enderror" required  autofocus>
            @error('Téléphone')
            <div class="text-danger">{{$message}}</div>  
          @enderror
        </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="Email" name="Email" class="form-control" value="{{  old('Email',$rdv->Email) }}" class="form-control @error('Email') is-invalid @enderror" required autocomplete="email" autofocus>
            @error('Email')
            <div class="text-danger">{{$message}}</div>  
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">CIN/N°Passeport</label>
            <input type="text" name="CIN" class="form-control" value="{{ old('CIN',$rdv->CIN) }}" class="form-control @error('CIN') is-invalid @enderror" required  autofocus>
            @error('CIN')
              <div class="text-danger">{{$message}}</div>  
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Date de rendez-vous souhaité</label>
            <input type="date" name="Date_rendez_vous" class="form-control" value="{{ old('Date_rendez_vous',$rdv->Date_rendez_vous) }}" class="form-control @error('Date_rendez_vous') is-invalid @enderror" required  autofocus min="<?= date('Y-m-d'); ?>">
            @error('Date_rendez_vous')
              <div class="text-danger">{{$message}}</div>  
            @enderror
          </div>
         
         
          <div class="d-grid my-2">
            <button type="submit" class="btn btn-primary ">Modifier</button>
          </div>
    </form>
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
@endsection
