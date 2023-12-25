@extends('layouts.Navbar')

@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->

<section id="faq" class="faq section-bg">
    {{-- <div class="container"> --}}

      <div class="section-title">
        <h2>Foire Aux Questions</h2>
        <span>Foire aux questions.</span>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
          <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">  <i class="fa-regular fa-circle-question"></i> Que faire en cas d'urgence? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Si vous êtes un cas d’urgence nécessitant une attention immédiate, veuillez appeler le 0537 67 66 66  ou envoyez un SMS au 0661229399. Nous vous donnerons les instruction à suivre. Si vous connaissez l ‘adresse de la clinique, venez le plus vite possible. Si vous avez besoin d’un transfert de notre part, veuillez nous le faire savoir par téléphone.                </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
             <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><i class="fa-regular fa-circle-question"></i> A quoi dois-je m'attendre lors de mon arrivé pour mon rendez-vous ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                À votre arrivée à clinique de la vision de Rabat, le personnel vous accueillera et vous installera dans la salle d’attente. Nous vous examinerons le plus rapidement possible              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> <i class="fa-regular fa-circle-question"></i> Que se passe-t-il si je suis un nouveau patient? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Que vous ayez choisi la clinique vous même ou que vous ayez été référé par un autre spécialiste. Nous discuterons de votre problème et vous poserons des questions sur vos antécédents médicaux. Un examen approfondi suivra ensuite. Nous pouvons demander des examens et des tests pour aider et soutenir notre diagnostic.

            </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
          <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"><i class="fa-regular fa-circle-question"></i> Avez-vous les examens radiologique sur place? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Clinique de la vision de rabat dispose de tous le matériel et des compétences pour que votre cas soit diagnostiqué et traité sans que vous ayez à faire aucun examen ailleurs. vous pouvez visiter la page « La clinique » pour plus d’informations en cliquant ici.

            </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
           <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"><i class="fa-regular fa-circle-question"></i> Assurance et prise en charge? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pour plus d’informations sur la prise en charge merci de visiter notre page dédié en cliquant ici.

            </p>
            </div>
          </li>
          
          <li data-aos="fade-up" data-aos-delay="400">
            <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"><i class="fa-regular fa-circle-question"></i> Avez vous un parking? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
             <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
               <p>
                Oui.

                Un parking gratuit est disponible devant et autour de la clinique.               </p>
             </div>
           </li>

        </ul>
      </div>

    {{-- </div> --}}
  </section><!-- End Frequently Asked Questions Section -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 

@endsection