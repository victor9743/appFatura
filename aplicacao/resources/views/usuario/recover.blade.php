@extends('layout.layout')


@section('content') 
<form action="/fatura/index" method="POST" enctype="multipart/form-data">
  @csrf
  <section class="vh-100 gradient-custom">
    <div class="container  h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-1 pb-3">
  
                <h2 class="fw-bold mb-5 text-uppercase">Recuperar Senha</h2>
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label text-left" for="typeEmailX">Insira o token de recuperação</label>
                  <input type="email" id="typeEmailX" class="form-control form-control" />
                  <p class="small mb-5 mt-1 pb-lg-2"><a class="text-white-50" href="/">voltar a tela de login</a></p>           
                </div>
  
                
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit" id="teste">Recuperar senha</button>

  
              </div>
  
              <div>
                <p class="mb-0">Nao possui uma conta? <a href="/register" class="text-white-50 fw-bold">Clique aqui</a>
                </p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
  <script src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>
  <script>/*
    AmagiLoader.show();
    setTimeout(() => {
       AmagiLoader.hide();
    }, 1000);*/
   </script>
   
  
@endsection