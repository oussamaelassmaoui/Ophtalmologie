@extends('layouts.Navbar')

@section('content')
<div class="container">
    <div class="section-title">
        <h2>Notre équipe</h2>
        <span>Une équipe d'ophtalmologues multidisciplinaires à votre service.</span>
        <div class="emptiness"></div>
        <div class="emptiness"></div>
        <h3>UNE ÉQUIPE MÉDICALE DE SPÉCIALISTES</h3>
    </div>
    <section>
        <div>
            <span>Clinique de la vision de Rabat rassemble une équipe médicale diversifiée et constituée des meilleurs ophtalmologues et orthoptistes de Rabat. L’équipe rassemble aussi des médecins spécialisés en anesthésie et réanimation pour une prise en charge chirurgicale complète.</span>
            <div class="emptiness"></div>
            <span>Notre mission est d’assurer une expérience chaleureuse et accueillante pour tous nos patients et leur accompagnant(s). Respect et professionnalisme sont les valeurs qui animent chaque jour l’équipe de clinique de la vision de Rabat.</span>
            <div class="emptiness"></div>
            <div class="imag-Equipe">
                <img src="{{ asset('assets/img/Notre équipe.webp') }}" alt="Ophtalmologie">
            </div>
           
          
        </div>
    </section>
        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">
      
              <div class="section-title">
                <h2>Nos ophtalmologues et médecins</h2>
              </div>
      
              <div class="row">
                 
                <div class="col-lg-6">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Walter White</h4>
                      <span>Chief Medical Officer</span>
                      <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                      <div class="social">
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-6 mt-4 mt-lg-0">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Sarah Jhonson</h4>
                      <span>Anesthesiologist</span>
                      <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                      <div class="social">
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""> <i class="fa-brands fa-linkedin-in"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-6 mt-4">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>William Anderson</h4>
                      <span>Cardiology</span>
                      <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                      <div class="social">
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""> <i class="fa-brands fa-linkedin-in"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-6 mt-4">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Neurosurgeon</span>
                      <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                      <div class="social">
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""> <i class="fa-brands fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                
              </div>
      
            </div>
          </section><!-- End Doctors Section -->
          <div class="emptiness"></div>
          
</div>
<section>
    <div class="background-image">
        <h2>Contactez-nous pour plus d’informations</h2> 
        <div class="emptiness"></div>
        <span>Du lundi au vendredi de 9h à 18h / Samedi de 9h à 15h</span>
        <div class="emptiness"></div>
        <button type="button" class="btn">NOUS CONTACTER</button>
        <div class="emptiness"></div>
        
    </div>
  </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection