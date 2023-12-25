@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Pôle social et humanitaire</h2>
        </div>
        <section>
            <span>
                Clinique de la vision contribue de manière continue à porter assistance au plus démunis en organisant tout
                au long de l’année des événements et des caravanes médicales en partenariat avec l’association RESO.
            </span>
            <div class="emptiness"></div>
            <span>
                L’association Réseau de l’Education et la Solidarité en Ophtalmologie (RESO) est une association à but non
                lucratif fondée en 2011. Sa vocation première est de mener des campagnes de consultations ophtalmologiques
                et de chirurgies de la cataracte gratuites au profit des patients démunis et sans couverture sociale .
            </span>
            <div class="emptiness"></div>
            <div class="section-title-Assurance">
                <h3>Notre objectif est de lutter contre la cécité réversible au Maroc.</h3>
            </div>
            <span>
                L’association RESO s’est aussi engagée pour le développement de la formation médicale continue. <br>
                Notre association est constituée de médecins ophtalmologistes, d’orthoptistes et d’opticiens qui sont
                engagés dans ce programme au profit des malvoyants démunis à travers des campagnes de consultation, de
                réfraction et de chirurgie. ( avec notamment plus de 6040 consultation jusqu’à présent)
            </span>
            <div class="emptiness"></div>
            <div class="section-title-Assurance">
                <h3>1/ Campagnes de chirurgies de la cataracte.</h3>
            </div>
            <span>
                Plus de 200 opérations de cataracte sont réalisées chaque année au profit des personnes démunis par des
                équipes chirurgicales de haut niveau et avec un matériel équivalent à celui utilisé dans les grandes
                cliniques grâce à la participation de nos partenaires.Nous comptons atteindre les 300 opérations par an dans
                les prochaines années.
            </span>
            <div class="emptiness"></div>
            <div class="row">
                <div class="col">
                    <div class="image-pole">
                        <img src="{{ asset('assets/img/pole-1.jpg') }}" alt="Ophtalmologie">
                    </div>
                </div>
                <div class="col">
                    <div class="image-pole">
                        <img src="{{ asset('assets/img/pole-2.jpg') }}" alt="Ophtalmologie">
                    </div>
                </div>
            </div>
            <div class="emptiness"></div>
            <div class="section-title-Assurance">
                <h3>2/Campagnes de réfraction et Distribution de lunettes.</h3>
            </div>
            <span>
                En collaboration avec nos partenaires: L’école des Sciences Paramédicales Appliquées, le Syndicat
                Professionnel National des Opticiens et les opticiens bénévoles prives RESO a pu équiper plus de 500
                personnes démunies gratuitement en lunettes. Nous ciblons en particulier une population composée d’enfants
                scolarisés malvoyants et d’ouvriers.
            </span>
            <div class="emptiness"></div>
            <div class="section-title-Assurance">
                <h3>3/ Formation médicale continue.</h3>
            </div>
            <span>
                L’association RESO organise de façon très régulière des congrès scientifiques et cours de formation post
                universitaire animés par des experts nationaux et internationaux. Plus de 60 ophtalmologistes participants
                sont invités à chaque édition, leur permettant ainsi de bénéficier d’une formation médicale continue de
                qualité
            </span>
            <div class="emptiness"></div>
            <div class="row">
                <div class="col">
                    <div class="image-pole">
                        <img src="{{ asset('assets/img/pole-3.jpg') }}" alt="Ophtalmologie">
                    </div>
                </div>
                <div class="col">
                    <div class="image-pole">
                        <img src="{{ asset('assets/img/pole-4.jpg') }}" alt="Ophtalmologie">
                    </div>
                </div>
            </div>
        </section>





    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
