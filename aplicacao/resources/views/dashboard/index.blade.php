@extends('layout.layout')

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
@section('content') 
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <a href="/fatura/index"
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="border: none"
      >
       <strong> App Fatura</strong>
    </a>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->

        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <strong>
              <a class="nav-link" href="/fatura/index">AppFatura</a>
            </strong>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon --> 
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="{{asset ('imgs/profile.png')}}"
              class="rounded-circle"
              height="10"
              alt="perfil"
              loading="lazy"
              style="height: 50px"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="/usuario/detalhes">Detalhes de Usuário</a>
            </li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
              </form>
            </li>
            
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <div class="container card bg-dark text-white mt-5 p-2">
    <table class="table table-dark">
      <thead>
        <th>#</th>
        <th>Descrição</th>
        <th colspan="2">Detalhes</th>
      </thead>
      <tbody>
        @foreach ($faturas as $fatura )
          <tr>
            <td>{{$fatura->id}}</td>
            <td>{{$fatura->descricao}}</td>
            <td><a href="/fatura/detalhes/{{$fatura->id}}"><i class="fa fa-search text-light" aria-hidden="true"></i></a></td>
            <td>
              <form action="/fatura/remover/{{$fatura->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
       
      </tbody>
    </table>
    <div class="form d-flex justify-content-end">
      <a href="/fatura/cadastrar" class="btn btn-primary"> Cadastrar</a>
    </div>
  </div>
    
 

 


  <script src="{{ asset('js/app.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>
  
    <script>
        
    /*
      AmagiLoader.show();
      setTimeout(() => {
         AmagiLoader.hide();
      }, 1000);*/
     </script>
     
    
  @endsection