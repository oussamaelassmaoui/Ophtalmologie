@extends('layouts.Navbar-2')

@section('content')
<div class="container">
    <div class="section-title-Guide">
        <h4>Guide du patient et du visiteur</h4>
        <span>Informations utiles concernant votre visite à notre clinique!.</span>
    </div>
    <section>
        <div class="div">
            <div class="div-2">
              <div class="div-3">
                <div class="column">
                  <div class="div-4">
                    <div class="div-5">
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/d7316fffcce1b0f6f7d54169b002e9ebed7e11cb3ee12b7dc834f19a49b45ed6?apiKey=e7e5a411aeab47ecb6dbd49353c60c16&"
                        class="img"
                      />
                      <div class="div-6">Trouvez nous sur la carte</div>
                      <div class="div-7">Plus coordonnées utiles</div>
                      <a href="https://g.page/CliniqueVision?gm">
                      <div class="div-24">
                        
                        EN SAVOIR PLUS
                       
                    </div> </a>
                    <div class="emptiness"></div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="div-9">
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/41dcecb233936f2f01661117980ea817554394de168183d188d6f9c69ff23e55?apiKey=e7e5a411aeab47ecb6dbd49353c60c16&"
                      class="img-2"
                    />
                    <div class="div-10">FAQ</div>
                    <div class="div-11">Questions les plus fréquemment posées</div>
                    <a href="{{ route('FAQ') }}">
                    <div class="div-24">
                        
                        EN SAVOIR PLUS
                        
                    </div></a>
                    <div class="emptiness"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-13">
              <div class="div-14">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/28303a4b2d99ff2939e8d7ecfa7e96dcdb25e587a89e3fc775993fda7c47d179?apiKey=e7e5a411aeab47ecb6dbd49353c60c16&"
                  class="img-3"
                />
                <div class="div-15">Infos Prise en charge et assurances</div>
                <div class="div-16">
                  On répond à toutes vos questions relatives à la prise en charge
                </div>
                <a href="{{ route('Assurances') }}">
                <div class="div-24">
                  
                    PLUS D'INFORMATIONS
                  
                </div></a>
                <div class="emptiness"></div>
              </div>
            </div>
            <div class="div-18">
              <div class="div-19">
                <div class="column">
                  <div class="div-20">
                    <div class="div-21">
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/430f1525f011f6496087ca195be0e7244a54e29abdf1622982ddeeb55978f9fe?apiKey=e7e5a411aeab47ecb6dbd49353c60c16&"
                        class="img-4"
                      />
                      <div class="div-22">Urgence 24h/24 et 7jr/7</div>
                      <div class="div-23">En cas d’urgence appellez au 07 71 82 83 54</div>
                      <a href="tel:0771838254">
                      <div class="div-24">
                        
                        APPELER MAINTENANT
                        
                    </div></a>
                    <div class="emptiness"></div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="div-25">
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/09e69b1e3a4b8d429be205d9693cca29b408260336f874a2180919f960678af3?apiKey=e7e5a411aeab47ecb6dbd49353c60c16&"
                      class="img-5"
                    />
                    <div class="div-26">Nos spécialités</div>
                    <div class="div-27">
                      Toutes les informations relatives à nos pôles d’excellence
                    </div>
                    <a href="{{ route('poles-dexcellence') }}">
                    <div class="div-24">
                        
                        EN SAVOIR PLUS
                        
                    </div></a>
                    <div class="emptiness"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
<section>
    <div class="background-image-Guide2">
        <h2>Vous souhaitez prendre rendez-vous ?</h2> 
        <div class="emptiness"></div>
        <p>Appellez nous au 07 71 82 83 54 ou remplissez le formulaire de rendez-vous ...</p>
        <div class="emptiness"></div>
        {{--  --}}
       <a href="{{ route('Prendre_RDV') }}"> <button>
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
            FORMULAIRE DE RENDEZ-VOUS
          </button>    </a>    
    </div>
  </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection