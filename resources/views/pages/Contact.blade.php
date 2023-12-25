@extends('layouts.Navbar')

@section('content')
    <div class="container">
        @include('sweetalert::alert')
        <div class="section-title">
            <h2>Contact</h2>
            <span>Remplissez le formulaire pour plus d'informations.</span>
            <br>
        </div>
        <div class="row">
            <div class="col">
                <div class="content-contact">

                    <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nom_complet">nom complet*</label>
                            <input type="text" name="nom_complet" placeholder="nom complet"
                                value="{{ old('nom_complet') }}" class="form-control @error('nom_complet') is-invalid @enderror" required  autofocus />
                            {{-- message de error --}}
                            @error('nom_complet')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                            <label for="Téléphone">Téléphone*</label>
                            <input type="text" name="Téléphone" placeholder="Téléphone" value="{{ old('Téléphone') }}" class="form-control @error('Téléphone') is-invalid @enderror" required   autofocus/>
                            @error('Téléphone')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                            <label for="Email">Email*</label>
                            <input type="Email" name="Email" placeholder="Email" value="{{ old('Email') }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus />
                            @error('Email')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                            <label for="Sujet">Sujet*</label>
                            <input type="text" name="Sujet" placeholder="Sujet" value="{{ old('Sujet') }}" class="form-control @error('Sujet') is-invalid @enderror" required  autofocus/>
                            @error('Sujet')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                            <label for="floatingTextarea2">Votre Message*</label>
                            <textarea class="form-control" placeholder="Votre Message" id="Votre_Message" name="Votre_Message"
                                style="height: 100px" class="form-control @error('Votre_Message') is-invalid @enderror" required  autofocus>{{ old('Votre_Message') }}</textarea>
                            @error('Votre_Message')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                        </div>
                        <button>ENVOYER</button>
                    </form>
                </div>
                <div class="div-dexcellence-emptiness"></div>
            </div>

            <div class="col">
                <div class="container">
                    <div class="section-title-Assurance">
                        <h3>Détails et Infos Contact </h3>
                    </div>

                    <div>
                        <span>Contactez nous pour plus d’informations
                        </span>
                      
                        <span>
                            Horaires de travail :
                        </span>
                        
                        <span>
                            8 h – 18h du lundi au vendredi
                        </span>
                        
                        <span>
                            8 h – 15h Samedi
                        </span>
                       
                        <span>
                            Urgences 24h/24h, 7/7
                        </span>
                       
                        <span>
                            Standard:
                        </span>
                       
                        <span>
                            0537 67 66 66 De 7h00 – 19h00
                        </span>
                        
                        <span>
                           <a href="">  ou via whatsapp en cliquant ici </a>
                        </span>
                        
                        <span>
                            Exploration:
                        </span>
                        <span>
                            0537 67 66 64 De 8h30 – 17h00
                        </span>
                       
                        <span>
                            <a href="">ou via whatsapp  en cliquant ici </a>
                        </span>
                       
                        <span>
                            Prise en charge:
                        </span>
                        
                        <span>
                            0537 67 66 65 De 8h00 – 17h30
                        </span>
                        
                        <span>
                            <a href=""> ou via whatsapp  en cliquant ici </a>
                        </span>
                        
                        <span>
                            Bloc opération:
                        </span>
                       
                        <span>
                            0537 67 66 69 De 7h30 – 16h00
                        </span>
                        
                        <span>
                            <a href="">  ou via whatsapp en cliquant ici</a>
                        </span>
                        
                        <span>
                            contact@cliniquevisionrabat.ma
                        </span>
                        
                        <span>
                            <a href="">
                                26 Avenue Ibn Khaldoun Agdal, FRANCE
                            </a>
                        </span>
                    </div>
                    <div class="section-title-Assurance">
                        <h3>Détails et Infos Contact </h3>
                    </div>
                    <span>Si vous souhaitez prendre rendez-vous avec un médecin, il est préférable que vous visitiez
                        directement <a href="{{ route('Prendre_RDV') }}">la page de prise de rendez-vous.</a></span>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
   
        


    <style>
        
    </style>
    {{--  --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
