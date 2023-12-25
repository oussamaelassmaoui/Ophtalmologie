@extends('layouts.Navbar-3')

@section('content')

        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{Avatar::create(Auth::user()->name)->toBase64()}}" alt="Profile" >
                    
                  <h2>{{ auth()->user()->name }}</h2>
                 
                  
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-8">
    
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editer profil</button>
                    </li>
    
                 
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer mot passe</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Supprimer  compte</button>
                      </li>
    
                  </ul>
                  <div class="tab-content pt-2">
    
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                     
    
                      <h5 class="card-title">Détails du profil</h5>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->name }}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Rôle</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->role }}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Statut</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->status }}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">DATA AJOUTER</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->created_at}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Date modifiée</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->updated_at}}</div>
                      </div>
    
                     
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                      </div>
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                        @include('profile.partials.update-profile-information-form')
                    </div>
    
                   
    
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      @include('profile.partials.update-password-form')
                    </div>
                    <div class="tab-pane fade pt-3" id="profile-settings">
                        <!-- -->
                        @include('profile.partials.delete-user-form')
                      </div>
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
      
@endsection