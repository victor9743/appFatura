@extends('layout.layout')


@section('content') 
<form action="/fatura/index" method="POST" enctype="multipart/form-data">
  @csrf
  <section class="vh-100 gradient-custom">
    <div class="container  h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="width: 900px">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-1 pb-3">
  
                <h2 class="fw-bold mb-5 text-uppercase">Detalhes do usuário</h2>

                <div class="row">
                    <!-- logo usuario -->
                    <div class="col-sm-6">
                        <img
                        src="{{asset ('imgs/profile.png')}}"
                        class="rounded-circle"
                        height="250"
                        alt="Avatar do usuário"
                        loading="lazy"
                      />
                    </div>
                    <div class="col-sm-6" style="text-align: left">
                        <div class="form-outline form-white mb-2" >
                            <label class="form-label " for="typeEmailX">Usuário</label>
                            <input type="email" id="typeEmailX" class="form-control" />                 
                        </div>
                        <div class="form-outline form-white mb-2 row">
                            <div class="col-sm-6">
                                <label class="form-label " for="typeEmailX">Senha</label>
                                <input type="password" id="typeEmailX" class="form-control " />   
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label " for="typeEmailX">confirmar senha</label>
                                <input type="password" id="typeEmailX" class="form-control " />   
                            </div>
                                          
                        </div>
                        <div class="form-outline form-white mb-3">
                            <label class="form-label text-left" for="typeEmailX">Email</label>
                            <input type="email" id="typeEmailX" class="form-control form-control text-center" />                 
                        </div>
                        <div class="form-outline form-white row">
                            <div class="col-6 d-flex">
                                <a href="/fatura/cadastrar" class="btn btn-primary">Voltar</a>
                            </div>

                            <div class="col-6 d-flex justify-content-end">
                                <a href="/fatura/cadastrar" class="btn btn-primary">Salvar</a>
                            </div>
                        </div>
                       

                    </div>
                    

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

