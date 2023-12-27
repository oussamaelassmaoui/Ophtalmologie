<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('name', 'Ophtalmologie') }}</title>
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/Logo.png" rel="apple-touch-icon">
  
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/04746b7ca9.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  

  <link rel="stylesheet" href="css/main.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
       
        <img src="assets/img/Logo.png" alt="Ophtalmologie" width="40" height="40">
        <span class="d-none d-lg-block">Ophtalmologie</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{Avatar::create(Auth::user()->name)->toBase64()}}" alt="Profile" >
            <span class="d-none d-md-block dropdown-toggle ps-2"> {{ auth()->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> {{ auth()->user()->name }}</h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
          
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              
                <a class="dropdown-item d-flex align-items-center"  href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="bi bi-box-arrow-right"></i> Logout</a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                          @csrf 
                            
                                        </form>
               
            
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
        
          <span>ACCUEIL</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Prendre_RDV') }}">
        
          <span> DEMANDER UN RENDEZ-VOUS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('FAQ') }}">
        
          <span>FOIRE AUX QUESTIONS</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <span>LA CLINIQUE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Clinique') }}">
              <i class="bi bi-circle"></i><span>LA CLINIQUE</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Equipe') }}">
              <i class="bi bi-circle"></i><span>NOTRE ÉQUIPE</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Recrutement') }}">
              <i class="bi bi-circle"></i><span>RECRUTEMENT</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End CLINIQUE Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('poles-dexcellence') }}">
          <span>NOS PÔLES D'EXCELLENCE</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <span>INFOS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Guide') }}">
              <i class="bi bi-circle"></i><span>
                GUIDE DU PATIENT ET DU VISITEUR </span>
            </a>
          </li>
          <li>
            <a href="{{ route('Prendre_RDV') }}">
              <i class="bi bi-circle"></i><span>DEMANDE DE RENDEZ-VOUS</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Assurances') }}">
              <i class="bi bi-circle"></i><span>PRISE EN CHARGE ET ASSURANCES</span>
            </a>
          </li>
          <li>
            <a href="{{ route('FAQ') }}">
              <i class="bi bi-circle"></i><span>FOIRE AUX QUESTIONS</span>
            </a>
          </li>
        </ul>
      </li><!-- End RENDEZ-VOUS Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <span>ACTIVITÉS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Pôle-social') }}">
              <i class="bi bi-circle"></i><span>PÔLE SOCIAL ET HUMANITAIRE</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End ACTIVITÉS Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Article') }}">
          <span>BLOG ET ACTUALITÉS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Contact') }}">
          <span>CONTACT</span>
        </a>
      </li>

   
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @yield('content') 
  </main>
</body>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files --->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>