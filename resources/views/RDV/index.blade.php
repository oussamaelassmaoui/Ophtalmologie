
@extends('layouts.NavbarAdmin')

@section('content')
    {{-- <div class="container"> --}}
  @include('sweetalert::alert')
    <section class="intro">
          <div class="cover">
            <form  class="flex-form" method="get" action="/search_RDV">
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
                              <th>CIN</th>
                              <th scope="col">NOM COMPLET</th>
                              <th scope="col">DATE DE NAISSANCE</th>
                              <th scope="col">TELEPHONE</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">DATE RDV</th>
                              <th scope="col">SUPRME</th>
                              <th scope="col">EDIT</th>
                              {{-- <th scope="col">DOWNLOAD</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($rdvs as $rdv )
                            <tr> 
                             
                              <td>{{$rdv->id}}</td>
                              <td>{{$rdv->CIN}}</td>
                              <td>{{$rdv->nom_complet}}</td>
                              <td>{{$rdv->Date_de_naissance}}</td>
                              <td>{{$rdv->Téléphone}}</td>
                              <td>{{$rdv->Email}}</td>
                              <td>{{$rdv->Date_rendez_vous}}</td>
                             
                            <td>
                                <form action="{{route('RDV.destroy',$rdv)}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <input type="submit" value="X" class="btn btn-danger btn-sm px-3" >
                                </form>
                               
                              </td>
                              <td>
                                <a class="btn btn-success btn-sm px-3" href="{{ route('RDV.edit', $rdv->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                              </td>
                           
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div class="div-dexcellence-emptiness"></div>
                        {{ $rdvs->links() }}
              </div>
            </div>
          </div>
        </div>
      </section>

{{-- </div> --}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@endsection
