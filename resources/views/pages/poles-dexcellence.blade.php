@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Nos pôles d’excellence</h2>
            <span>Etablissement spécialisé en ophtalmologie.</span>

        </div>

        <section>
            {{--  --}}
            <div class="flex-poles">
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp1.jfif') }}" alt="Ophtalmologie"></div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>CHIRURGIE REFRACTIVE</h1>
                        <div class="div-dexcellence-emptiness"></div>
                        <span>Intervention 100% laser</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <span>La chirurgie réfractive au laser consiste à modifier la forme de la cornée et donc modifier le
                            trajet des rayons lumineux</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles1') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="emptiness"></div>
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp2.jfif') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>CHIRURGIE VITREO RETINIENNE</h1>
                        <div class="div-dexcellence-emptiness"></div>
                        <span>La microchirurgie vitréo-rétinienne permet de traiter les pathologies qui affectent la partie
                            postérieure de l’œil.</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles2') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp3.jfif') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>CATARACTE – CHIRURGIE DU SEGMENT ANTERIEUR</h1>
                        <div class="div-dexcellence-emptiness"></div>

                        <span>L’opération de la cataracte est un acte chirurgical qui permet d’éliminer la lentille de l’œil
                            affecté par la maladie et, dans la plupart des cas, de la remplacer par une lentille
                            artificielle.</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles3') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp4.jfif') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>EXPLORATION ET ORTHOPTIE</h1>
                        <div class="div-dexcellence-emptiness"></div>

                        <span>L’orthoptie consiste à dépister, analyser et traiter les troubles de la vision qu’ils soient
                            fonctionnels, moteurs ou sensoriels. Tenant compte des besoins ainsi que des caractéristiques du
                            profil de son patient, l’orthoptiste procède à une évaluation de ses capacités visuelles,
                            réalise des examens d’exploration et propose un projet thérapeutique personnalisé</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles4') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp5.jpg') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>OPHTALMOLOGIE PEDIATRIQUE</h1>
                        <div class="div-dexcellence-emptiness"></div>
                        <span>L’ophtalmologie pédiatrique est une spécialité médicale soignant les troubles visuels et les
                            maladies des yeux des jeunes patients. Les ophtalmologues pour enfant sont spécifiquement formés
                            et équipés pour détecter, soigner et opérer si besoin, les anomalies visuelles aussi bien des
                            nourrissons que des adolescents.</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles5') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp6.png') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>CHIRURGIE ORBITO PALPÉBRALE & DES VOIES LACRYMALES</h1>
                        <div class="div-dexcellence-emptiness"></div>

                        <span>s’adresse aux obstructions des voies lacrymales entraînant un larmoiement gênant.
                            l’intervention peut être une simple dilatation et intubation des voies lacrymales par sonde.
                            ou une plastie des voies lacrymales (dacryocystorhinostomie) qui se réalise le plus souvent sous
                            anesthésie générale.</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles6') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            <div class="div-dexcellence">
                <div class="row">
                    <div class="col-4"> <img src="{{ asset('assets/img/dexcellence/nasp7.jfif') }}" alt="Ophtalmologie">
                    </div>
                    <div class="col">
                        <div class="div-dexcellence-emptiness"></div>
                        <h1>ANESTHESIE ET BLOC OPERATOIRE</h1>
                        <div class="div-dexcellence-emptiness"></div>

                        <span>Le pôle d’anesthésie et bloc opératoire est au cœur de cette organisation afin de sécuriser le
                            parcours de soin! Ceci a été possible grâce à une équipe de soignants hautement qualifiés, et
                            une plateforme technologique de pointe.
                        </span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('poles7') }}"><button>EN SAVOIR PLUS</button></a>
                        <div class="div-dexcellence-emptiness"></div>
                    </div>
                </div>
            </div>
      
        </div>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
