@extends('layouts.Navbar')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>
                Chirurgie Vitréo Rétinienne
            </h2>
            <span>
                Traitement des pathologie rétinienne médico-chirurgicale.
            </span>
        </div>
        <section>
            <div class="row">
                <div class="col-9">
                    <div class="fw-bold">
                        Chirurgie vitréo rétinienne
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        La chirurgie vitréo- rétinienne a bénéficié ces dernières années du développement  technologique tant sur le plan de l’appareillage que sur le plan de l’instrumentation, ce qui a permis une chirurgie sur et sécurisante.
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        La clinique de la vision de rabat est dotée d’un plateau technique de dernière génération permettant de prendre en charge toutes les pathologies vitréo- rétiniennes, parmi celles-ci on peut citer :
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        -Décollement de rétine
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        -Les complications de la rétinopathie diabétique proliférante
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        -les trous maculaires
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        -Les membranes epimaculaires
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        -Les corps étrangers intra-oculaires  …….
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        Parallèlement la clinique dispose de toutes les machines d’exploration et d’imagerie rétinienne permettant le diagnostic et le suivi des pathologies rétiniennes médicales.
                    </div>
                    
                    <div class="div-poles"></div>
                    <div class="fw-bold">
                        Foire aux questions
                    </div>
                    <div class="div-poles"></div>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q1" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q1" class="panel-title">Quels sont les avancées de la chirurgie Vitréo rétinienne au maroc ?</label>
                            <div class="panel-content">
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    Autrefois la chirurgie vitréo- rétinienne était une cause de départ à l’étranger, actuellement au maroc  de plus en plus de structures sont équipées d’un plateau technique de dernière génération permettant de pratiquer cette chirurgie. La formation de nos ophtalmologues rétinologue au maroc est plus qu’honorable égalant le niveau international.
                                </div>
                            </div>
                        </div>

                        <div class="faq-question">
                            <input id="q2" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q2" class="panel-title">Quelles sont les maladies vitréo-rétinienne les plus répandues au Maroc ?</label>
                            <div class="panel-content"> 
                                <div class="lh-1">
                                   - La rétinopathie diabétique proliférante
                                </div>
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    - La DMLA
                                 </div>
                                 <div class="div-poles"></div>
                                 <div class="lh-1">
                                    - Les trous maculaires
                                 </div>
                                 <div class="div-poles"></div>
                                 <div class="lh-1">
                                    - Les membranes épimaculaires
                                 </div>
                                 <div class="div-poles"></div>
                                 <div class="lh-1">
                                    - Les corps étrangers intra-oculaires
                                 </div>
                                 
                            </div>
                        </div>

                        <div class="faq-question">
                            <input id="q3" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q3" class="panel-title">Quels sont vos conseils pour les futurs médecins qui souhaitent devenir rétinologue ?</label>
                            <div class="panel-content">
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    La chirurgie vitréo-rétinienne est une belle discipline qui permet de rendre la vue à des patients menacé de cécité. La technologie actuelle facilite l’apprentissage tout en rendant  accessible  cette discipline.
                                </div>
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    La clinique et comme le fait reso depuis une dizaine d’années  est prête à recevoir pour des stages de formation  et d’apprentissage nos futurs médecins ophtalmologues intéressés par la rétine.
                                </div>
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    Nous restons à leur disposition pour les soutenir et les accompagner tout au long de leur formation
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/poles/poles2.png') }}" class="rounded" alt="">
                    <div class="div-poles  "></div>
                    <div class="fw-bold ">
                        Professeur Moussaif Hamid
                    </div>
                    <div class="div-poles justify-center text-center "></div>
                    <div class="lh-1 ">
                        Ophtalmologue spécialisé en chirurgie vitréo-rétinienne
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
