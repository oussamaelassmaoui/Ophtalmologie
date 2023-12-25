@extends('layouts.Navbar')

@section('content')
<div class="container">
    @include('sweetalert::alert')
    <div class="section-title">
        <h2>Demande de rendez-vous</h2>
        <span>Remplissez le formulaire ou appelez nous directement sur (+212) 0537676666 .</span>
        <br>
      </div>
<div class="row">
<div class="col">
    <div class="content-4">
        <form action="{{route('Prendre_RDV.store')}}" method="POST" enctype="multipart/form-data">
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
    <div class="div-dexcellence-emptiness"></div>
</div>

<div class="col">
    <div class="container-5">
        
        <img src="{{ asset('assets/img/icon_help_desk1.webp') }}" alt="Ophtalmologie" width="150" height="120">
         <span></span>
        <div>
            Veuillez remplir ce formulaire pour prendre rendez-vous. Nous reviendrons vers vous dans les 24h pour confirmer ou proposer une autre date.
            Pour prendre rendez-vous appelez nous au
            <span>
              <a href="tel:0771838254" >  0771838254 </a>
            </span>
             ou via whatsapp en cliquant sur les liens ci-dessous :
            <span>
                <a href="https://api.whatsapp.com/send?phone=212771838254">    RDV consultation </a>
            </span>
            <span> 
                <a href="https://api.whatsapp.com/send?phone=212771838254">     RDV bloc opératoire </a>
            </span>
            <span> 
                <a href="https://api.whatsapp.com/send?phone=212771838254">     RDV Chirurgie réfractive </a>
            </span>
            <span> 
                <a href="https://api.whatsapp.com/send?phone=212771838254">    RDV Exploration </a>
            </span>
            <span> 
                <a href="https://api.whatsapp.com/send?phone=212771838254">    Prise en charge </a>
            </span>
            <span>  
                <a href="mailto:contact@cliniquevisionrabat.ma"> contact@cliniquevisionrabat.ma </a> 
            </span>
            <span>  
                <a href="https://www.google.com/maps/place/Clinique+de+la+Vision+de+Rabat/@34.0072665,-6.8463435,17z/data=!3m1!4b1!4m5!3m4!1s0xda76c878962bd7d:0xf3d8a602e769754c!8m2!3d34.0072621!4d-6.8441548">
                       26 Avenue Ibn Khaldoun,  France
                 </a>
            </span>
            
        </div>
        
    </div>
</div>
</div>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
@endsection
