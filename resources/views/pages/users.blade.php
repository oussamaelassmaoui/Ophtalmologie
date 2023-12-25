
@extends('layouts.NavbarAdmin')

@section('content')
    {{-- <div class="container"> --}}
  @include('sweetalert::alert')
    <section class="intro">
          <div class="cover">
            <form  class="flex-form" method="get" action="/search_users">
              <label for="from">
              </label>
              <input type="search" name="search" placeholder="Search here..." value="{{isset($search)? $search : ''}}">
              <input type="submit" value="Search">
            </form>
          </div>
        <div>
          <div class="mask d-flex align-items-center h-100">
            <div class="container-2">
              
                      <div class="table-responsive" style="background-color: #f5f7fa;  border-radius: .8rem;">
                        <table class="table table-borderless mb-0">
                          <thead>
                            <tr>
                              
                              <th scope="col">ID</th>
                              <th scope="col">NOM</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">RÔLE</th>
                              <th scope="col">STATUT</th>
                              <th scope="col">DATA AJOUTER</th>
                              <th scope="col">Date modifiée</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user )
                            <tr> 
                             
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->role	}}</td>
                              <td>{{$user->status}}</td>
                              <td>{{$user->created_at}}</td>
                              <td>{{$user->updated_at}}</td>
                            
                           
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      
              </div>
            </div>
          </div>
        </div>
      </section>

{{-- </div> --}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@endsection
