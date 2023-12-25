@extends('layouts.Navbar')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>
                Chirurgie Orbito Palpébrale & des Voies Lacrymales
            </h2>
            <span>
                Les yeux, sont le miroir de l’âme.
            </span>
        </div>
        <section>
            <div class="row">
                <div class="col-9">
                    <div class="fw-bold">
                        Chirurgie Orbito Palpébrale & des Voies Lacrymales
                    </div>
                    <div class="div-poles"></div>
                    <div class="fw-bold">
                        La chirurgie des paupières comprend :
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        la chirurgie des malpositions palpébrales (entropion, ectropion, ptosis)
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        la chirurgie plastique et reconstructrice (traumatismes, tumeurs palpébrales)
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        la chirurgie esthétique des paupières (blépharoplastie). Les blépharoplasties esthétiques peuvent
                        concerner la paupière inférieure, supérieure ou les deux. L’intervention est réalisée le plus
                        souvent sous anesthésie locale en ambulatoire.
                    </div>

                    <div class="div-poles"></div>
                    <div class="fw-bold">
                        La pathologie des voies lacrymales :
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        s’adresse aux obstructions des voies lacrymales entraînant un larmoiement gênant.
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        l’intervention peut être une simple dilatation et intubation des voies lacrymales par sonde.
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        ou une plastie des voies lacrymales (dacryocystorhinostomie) qui se réalise le plus souvent sous
                        anesthésie générale.
                    </div>

                    <div class="div-poles"></div>
                    <div class="fw-bold">
                        Foire aux questions
                    </div>
                    <div class="div-poles"></div>

                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/poles/poles2.png') }}" class="rounded" alt="">
                    <div class="div-poles  "></div>
                    <div class="fw-bold ">
                        Professeur Charif Chefchaouni Mohamed
                    </div>
                    <div class="div-poles justify-center text-center "></div>
                    <div class="lh-1 ">
                        Ophtalmologue spécialisé dans les maladies des paupières et voies lacrymales et directeur financier
                    </div>
                    <div class="div-poles"></div>
                    <a href="https://api.whatsapp.com/send?phone=0771838254">
                    <img src="{{ asset('assets/img/poles/whatsapp-png.webp') }}" class="rounded" alt="">
                    </a>
                </div>
            </div>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@endsection
