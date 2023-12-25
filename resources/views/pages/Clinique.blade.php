@extends('layouts.Navbar')

@section('content')
<div class="container">
    <div class="section-title">
        <h2>La Clinique</h2>
        <span>Etablissement spécialisé en ophtalmologie, pour toutes les maladies de l’oeil et de la correction de la
            vision.</span>
    </div>
    <div class="emptiness"></div>
    <div class="row">
        <div class="col">
            <div class="emptiness"></div>
            <span>Notre équipe s’efforce d’atteindre l’excellence dans tous les aspects du diagnostic et du traitement
                des maladies oculaires. Nous avons soigneusement conçu nos process de sorte à vous servir dans les
                meilleures conditions d’hygiène, de confort et d’efficacité.</span>
            <div class="emptiness"></div>
            <div class="font-h5">
                <h5>Notre Vision</h5>
            </div>
            <span>Etre l’établissement de référence au Maroc et en Afrique de diagnostique et traitement des maladies
                oculaires et correction de la vision.</span>

        </div>
        <div class="col">
            <div class="imag-Clinique">
                <img src="{{ asset('assets/img/la vision.jfif') }}" alt="Ophtalmologie">
            </div>
        </div>
    </div>
    <div class="emptiness"></div>
    <div class="section-title">
        <h2>Nos partenaires</h2>
    </div>

    <!-- ======= Nos partenaires Section ======= -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Allergan.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Bio-medical-pro.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Emetrop-Maroc.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Laboratoires-Thea.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Med-Chirurgie.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Novartis.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/promu-medical.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Sothema.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Zeiss.svg" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/partenaires/Zenith-Pharma.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div>
            <div class="font-h5">
                <h5>Nos installations</h5>
            </div>
            <span>Nous investissons constamment dans des équipements de pointe.</span>
        </div>
        <div class="emptiness"></div>
        <div class="row">
            <div class="col">
                <div class="imag-Clinique">
                    <img src="{{ asset('assets/img/La Clinique.jfif') }}" alt="Ophtalmologie">
                </div>
            </div>
            <div class="col">
                <div class="emptiness"></div>
                <span>Notre clinique promeut l’innovation thérapeutique et poursuit l’étude des causes et de l’évolution
                    des maladies oculaires.
                </span>
                <div class="emptiness"></div>
                <span>Nous sommes attachés à maintenir à son plus haut niveau la compétence de notre équipe, la qualité
                    et la performance des installations du service.</span>
                <div class="emptiness"></div>
                <span>Nous vous proposons une organisation qui offre la meilleure prise en charge compte tenu de la
                    pathologie : en consultation, en urgence, en chirurgie ambulatoire et en hospitalisation.</span>
            </div>
        </div>
    </section>
    <section>
        @include('pages.Testimonials')
    </section>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i>
</a>
@endsection