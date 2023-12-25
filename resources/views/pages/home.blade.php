@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="POSI">
            <div>
                <h1>Bienvenue à clinique de la vision France</h1>
                <span>Etablissement spécialisé en ophtalmologie, pour toutes les maladies de l’oeil et de la correction de
                    la vision à France
                </span>
                <div>
                    <span>
                        La clinique de la vision de France est l’un des principaux établissements médicaux </span>
                    <span> pour la prévention, le diagnostic et le traitement des maladies oculaires. Fort </span>
                    <span> de 30 ans d’expérience et d’une équipe multidisciplinaire constitué des meilleurs </span>
                    <span> ophtalmologues et orthoptistes de France. Clinique de la vision de France a renforcé sa
                        position</span>
                    <span> de centre d’excellence dans son secteur et offre à ses patients des services dans tous </span>
                    <span> ses domaines de spécialité.</span>
                    <br><br>
                    <h3><i class="fa-solid fa-hospital"></i> Un cadre et des installations modernes</h3>
                    <br>
                    <span> Située sur le boulevard Ibn Khaldoun au quartier Agdal,la clinique de la vision de France ( CVR )
                    </span>
                    <span> est une structure ophtalmologique de très haut niveau. Disposant d’une superficie construite
                    </span>
                    <span> d’environ 1800 m2, répartie sur 5 étages, la CVR est dotée des dernières technologies</span>
                    <span>de pointe en matière d’ophtalmologie.</span>
                    <br> <br>
                    <a href="{{ route('Clinique') }}">
                        <button> <i class="fa-solid fa-hospital"></i> Découvrez nos installations </button>
                    </a>
                    </span>
                </div>

            </div>
        </div>

    </div>
    <div class="div-dexcellence-emptiness"></div>
    <div class="container-Video">
        <br>
        <h3>Vidéo institutionnelle Clinique de la vision de France</h3>
        <br>
        <div>
            <center> <iframe width="70%" height="475" src="https://www.youtube.com/embed/5VyQZWG6J6o"
                    title="Cabinet d’Ophtalmologie de Carcassonne | 2023 (4k)" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
                    allowfullscreen></iframe></center>
        </div>
        <br>
        <h3>Nos Pôles d’excellence</h3>
        <p>Le meilleur pour vos yeux à France</p>
        <hr>


        <div class="flex-container">
            <div class="flex-div">
                <div class="container-blog">
                    <ul class="cards">
                        
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class=""
                                            src="{{ asset('assets/img/poles/pexels-cottonbro1.jpg') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">Chirurgie réfractive Lasik</div>
                                        <p class="card__text">
                                            Intervention 100% laser
                                        </p>
                                        <a href="{{ route('poles1') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class=""
                                            src="{{ asset('assets/img/poles/pexels-cottonbro2.jfif') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">Chirurgie vitréo rétinienne</div>
                                        <p class="card__text">
                                            Intervention Précise et efficace
                                        </p>
                                        <a href="{{ route('poles2') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class="" src="{{ asset('assets/img/poles/pexels-cottonbro3.jpeg') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">Chirurgie du segement antérieur - cataracte</div>
                                        <p class="card__text">
                                           
                                        </p>
                                        <a href="{{ route('poles3') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class=""
                                            src="{{ asset('assets/img/poles/poles4.webp') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">Exploration et orthoptie</div>
                                        <p class="card__text">
                                           
                                        </p>
                                        <a href="{{ route('poles4') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class=""
                                            src="{{ asset('assets/img/poles/pexels-cottonbro4.jpg') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">Ophtalmologie pédiatrique</div>
                                        <p class="card__text">
                                           
                                        </p>
                                        <a href="{{ route('poles5') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__image"><img class=""
                                            src="{{ asset('assets/img/poles/blog2.jpg') }}" alt=""></div>
                                    <div class="card__content">
                                        <div class="card__title">CHIRURGIE ORBITO PALPÉBRALE & DES VOIES LACRYMALES</div>
                                        <p class="card__text">
                                           
                                        </p>
                                        <a href="{{ route('poles6') }}"><button>En savoir plus</button></a>
                                    </div>
                                </div>
                            </li>
                        

                    </ul>
                </div>

            </div>
            <div class="flex-div">
                <h5>Nos spécialités</h5>
                <span> Avec plus de 10 spécialités, l’équipe clinique de la vision de Rabat
                    couvrent différentes spécialités qui englobent tous les domaines de l’ophtalmologie. </span>
                <div class="div-dexcellence-emptiness"></div>
                <a href="{{ route('poles-dexcellence') }}"> <button> <i class="fa-solid fa-sitemap"></i> Découvrez nos
                        installations </button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="H-travail">
            <h2>N’oubliez pas votre examen oculaire régulier</h2>
            <span>Un diagnostic préventif de nombreuses maladies est possible grâce à un examen oculaire régulier. Obtenez
                immédiatement un rendez-vous pour vos yeux.</span>
            <div>
                <div class="flex-container">
                    <div class="flex-div">

                        <div class="container-blog">
                            {{-- <div class="flex-oculaire"> --}}
                                <ul class="cards">
                                    <li class="cards__item">
                                        <div class="card">
                                            <div class="card__image"><img
                                                    src="{{ asset('assets/img/icone-conducteur.webp') }}" alt="">
                                            </div>
                                            <div class="card__content">
                                                <div class="card__title">Examen ophtalmologique pour conducteurs</div>
                                                <p class="card__text">
                                                    L’examen oculaire est obligatoire tous les deux ans pour les conducteurs
                                                    âgés de
                                                    plus de 65 ans et tous les dix ans pour les autres.
                                                </p>
                                                <a href="#"><button>En savoir plus</button></a>
                                            </div>
                                        </div>
                                    </li>
                                    {{--  --}}
                                    <li class="cards__item">
                                        <div class="card">
                                            <div class="card__image"><img
                                                    src="{{ asset('assets/img/icone-enfants2.webp') }}" alt="">
                                            </div>
                                            <div class="card__content">
                                                <div class="card__title">Examen ophtalmologique pédiatrique</div>
                                                <p class="card__text">
                                                    1er à partir de 3 ans

                                                    Si vous suspectez que votre enfant est atteint d’un problème de vision,
                                                    demandez
                                                    l’avis d’un ophtalmologue spécialisé.
                                                </p>

                                                <a href="{{ route('poles5') }}"><button>En savoir plus</button></a>
                                            </div>
                                        </div>
                                    </li>
                                    {{--  --}}
                                    <li class="cards__item">
                                        <div class="card">
                                            <div class="card__image"><img
                                                    src="{{ asset('assets/img/icone-diabete2.webp') }}" alt="">
                                            </div>
                                            <div class="card__content">
                                                <div class="card__title">Examen ophtalmologique pour diabétiques</div>
                                                <p class="card__text">
                                                    un examen complet de la vision et de la santé de l’œil, peut souvent
                                                    amener à
                                                    constater des signes de diabète. Consultez un de nos ophtalmologues.
                                                </p>
                                                <a href="{{ route('poles7') }}"><button>En savoir plus</button></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            {{-- </div> --}}
                        </div>

                        <div class="div-dexcellence-emptiness"></div>
                        <span>
                            L’examen des yeux (examen ophtalmologique) doit, à partir d’un certain âge être systématique et
                            régulier, surtout si l’on présente une hypertension artérielle, un diabète ou du cholestérol et
                            même
                            si l’on n’a pas besoin de lunettes.
                        </span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('Prendre_RDV') }}"><button><i class="fa-solid fa-microscope"></i> JE RÉSERVE MON
                                EXAMEN
                                OCULAIRE</button></a>
                    </div>
                    <div class="flex-div">
                        <h5>Horaires de travail</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Lundi</td>
                                    <td>08:00-18:00</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Mardi</td>
                                    <td>08:00-18:00</td>
                                </tr>
                                <tr>

                                    <td>Mercredi</td>
                                    <td>08:00-18:00</td>
                                </tr>
                                <tr>

                                    <td>Jeudi</td>
                                    <td>08:00-18:00</td>
                                </tr>
                                <tr>

                                    <td>Vendredi</td>
                                    <td>08:00-18:00</td>
                                </tr>
                                <tr>

                                    <td>Samedi</td>
                                    <td>08:00-15:00</td>
                                </tr>
                                <tr>

                                    <td>Urgences</td>
                                    <td>24h/24h 7j/7j</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5>Prise en charge et Assurance</h5>
                        <span>Pour la commodité de nos clients, Clinique de la vision de Rabat propose une prise en charge
                            avec
                            tous les principaux assureurs marocains</span>
                        <div class="div-dexcellence-emptiness"></div>
                        <a href="{{ route('Assurances') }}"><button class="rounded-pill">EN SAVOIR PLUS</button></a>
                    </div>
                </div>
        </section>
        {{--  --}}
    </div>
    <section>
        <div class="background-image-Recrutement">
            <h2>Besoin d’une consultation ?</h2>
            <div class="emptiness"></div>
            <p>Appellez maintenant au 05632763726 et choisissez le meilleur pour vos yeux</p>
            {{--  --}}
            <a href="tel:0771838254"> <button style="background-color: rgba(26, 73, 113, 1);">
                    <i class="fa-solid fa-phone-volume"></i>
                    JE J'APPELLE CLINIQUE DE LA VISION DE RABAT
                </button> </a>
                <div class="emptiness"></div>
            {{--  --}}
            <a href="https://api.whatsapp.com/send?phone=212771838254"> <button>
                    <i class="fa-brands fa-whatsapp"></i>
                    JE PRÉFÈRE WHATSAPP
                </button> </a>

        </div>
    </section>
    <div class="container">
        <div class="H-travail">
            <h2>Localisation Clinique de la vision de France</h2>

            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=France%2065%20Av.%20Victor%20Hugo,%2026000%20Valence,+(%20Ophtalmologie)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.maps.ie/population/">Find Population on Map</a></iframe></div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
