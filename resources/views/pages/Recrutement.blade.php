@extends('layouts.Navbar')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Recrutement</h2>
            <span>L'excellence est notre devise.</span>

        </div>
        <section>
            <div class="flex-recrutement">
            <div class="row">
                <div class="col">
                    <span>À la clinique de la vision de Rabat, nous travaillons tous les jours pour atteindre, voire
                        dépasser, notre objectif de devenir le fournisseur de soins de santé oculaire de choix. Nous nous
                        consacrons au plus haut niveau de soins aux patients. Chaque jour apporte de nouvelles découvertes
                        et de nouveaux défis alors que nous remplissons notre engagement à faire des merveilles pour nos
                        patients.</span>
                    <div class="emptiness"></div>
                    <span>Cet engagement envers nos patients en exige un autre – envers nos employés. Nous sommes fiers de
                        notre environnement de travail accueillant et favorable, et des opportunités que nous offrons pour
                        la formation et l’avancement.
                    </span>
                    <div class="emptiness"></div>
                    <span>En tant qu’employé de la clinique de la vision de Rabat médicale, vous:
                    </span>
                    <div class="emptiness"></div>
                    <span>Rencontrez des personnes inspirantes chaque jour.
                        Exploitez votre véritable potentiel.
                        Développez vos compétences existantes tout en en découvrant de nouvelles.
                        Trouvez un sens à chaque journée de travail.
                        Rentrez chez vous après chaque journée de travail, sentant que vous avez vraiment fait une
                        différence.
                        À l’heure actuelle, il n’y a pas de postes ouverts dans notre clinique</span>
                    <div class="emptiness"></div>
                    <span>
                        Vous pouvez néanmoins envoyer CV par e-mail ou par fax avec la mention «service RH» et nous vous
                        contacterons si nous avons un poste disponible.</span>
                    <div class="emptiness"></div>
                    
                </div>
                <div class="col">
                    <h3> <i class="fa-solid fa-network-wired"></i> Ressources Humaines </h3>
                    <div class="emptiness"></div>
                    <div>
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                    </div>
                    <div class="button-equipe">
                        <a href="{{ route('Equipe') }}"><button>NOTRE ÉQUIPE</button></a>
                    </div>
                    <div class="div-dexcellence-emptiness"></div>
                </div>
                <div class="imag-Recrutement">
                    <img src="{{ asset('assets/img/Photo-de-groupe2.webp') }}" alt="Ophtalmologie">
                </div>
            </div>
        </div>
        </section>
    </div>
    <section>
        <div class="background-image-Recrutement">
            <h2>Vous pensez que vous pourriez travailler avec nous?</h2>
            <div class="emptiness"></div>
            {{--  --}}
            <a href="mailto:contact@cliniquevisionrabat.ma"> <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125"
                            stroke="#fffffff" stroke-width="2"></path>
                        <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    ENVOYEZ NOUS VOTRE CV
                </button> </a>

        </div>
    </section>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    {{--  script pie Ressources Humaines   --}}
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [{
                            y: 20,
                            label: "Staff administratif "
                        },
                        {
                            y: 30,
                            label: "Médecins"
                        },
                        {
                            y: 40,
                            label: "Infirmier"
                        },
                        {
                            y: 10,
                            label: "Autres"
                        }
                    ]
                }]
            });
            chart.render();

        }
    </script>
    {{--  end script --}}
@endsection
