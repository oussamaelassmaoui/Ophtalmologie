@extends('layouts.Navbar')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>
                Ophtalmologie pédiatrique
            </h2>
            <span>
                Dépistage et traitement des troubles oculaire infantiles
            </span>
        </div>
        <section>
            <div class="row">
                <div class="col-9">
                    <div class="fw-bold">
                        Ophtalmologie pédiatrique
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        L’Ophtalmo-pédiatrie est l’un de nos pôles d’excellence. L’équipe prend en charge toutes les pathologies et les troubles visuels, du nouveau-né à l’adolescent : Réfraction et amblyopie, strabismes et paralysies oculomotrices, maladies de la surface oculaire (conjonctivites, kératites…), pathologies du cristallin (cataractes, ectopies), glaucomes, pathologies rétiniennes médicales et chirurgicales.
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        Nous sommes pionniers dans la prise en charge chirurgicale avec implantation précoce des cataractes congénitales
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        Nous proposons le traitement laser et chirurgical de la rétinopathie des prématurés, y compris dans les stades les plus sévères nécessitant un matériel optimisé et une expertise chirurgicale spécifique.
                    </div>
                    <div class="div-poles"></div>
                    <div class="lh-1">
                        Nous avons développé la neuro-ophtalmologie pédiatrique et la prise en charge de maladies oculaires rares de l’enfant.
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
                            <label for="q1" class="panel-title">Les anomalies visuelles chez l'enfant</label>
                            <div class="panel-content">
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                    1 enfant sur 8 présente une anomalie visuelle. La vision n’est pas mature à la naissance et l’acuité visuelle se développe progressivement pour atteindre 10/10 vers l’âge de 5 ans. On peut apprécier le bon développement visuel dès la naissance et à tout âge.
                                </div>
                            

                            </div>
                        </div>

                       

                        <div class="faq-question">
                            <input id="q3" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q3" class="panel-title">Quels signes doivent pousser à consulter ?</label>
                            <div class="panel-content">
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                   si c’est un enfant « à risque » : prématuré, présentant une maladie génétique, si l’un des parents porte des lunettes ou présente un strabisme.
                                </div>
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                   si l’enfant présente des signes de malvoyance.
                                </div>
                                <div class="div-poles"></div>
                                <div class="lh-1">
                                   en cas d’anomalie : pupille blanche, cornée opalescente, tâche blanche sur la cornée, mouvements saccadés des yeux (nystagmus), larmoiement, trop grande sensibilité à la lumière (photophobie), ou si l’enfant louche (strabisme).
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/poles/poles2.png') }}" class="rounded" alt="">
                    <div class="div-poles  "></div>
                    <div class="fw-bold ">
                        Professeur Benchrifa Fatiha
                    </div>
                    <div class="div-poles justify-center text-center "></div>
                    <div class="lh-1 ">
                        Ophtalmologue spécialiste en strabologie et ophtalmologie pédiatrique
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
