@extends('layout.layout')


@section('content') 
<section class="vh-100 gradient-custom">
    <div class="container  h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-left">
  
              <div class="mb-md-5 mt-md-1 pb-3 " >
  
                <h2 class="fw-bold mb-3 text-uppercase">Novo Usuário</h2>
  
                <div class="form-outline form-white mb-3">
                  <label class="form-label text-left" for="typeEmailX">Usuário</label>
                  <input type="email" id="typeEmailX" class="form-control form-control" />                 
                </div>
  
                <div class="form-outline form-white mb-1 row  mb-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="typePasswordX">Senha</label>
                        <input type="password" id="typePasswordX" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="typePasswordX">Repetir senha</label>
                        <input type="password" id="typePasswordX" class="form-control" />
                    </div>
                  
                  
                </div>

                <div class="form-outline form-white mb-3">
                    <label class="form-label text-left" for="typeEmailX">Perfil de Usuário</label>
                    <input type="email" id="typeEmailX" class="form-control form-control" />                 
                </div>
                <div class="form-outline form-white mb-1">
                    <label class="form-label text-left" for="typeEmailX">Token do usuário</label>
                    <input type="text" id="typeEmailX" class="form-control form-control text-center" value="67393247" readonly/>                 
                </div>
  
              </div>
              <div class="text-center" style="margin-top: -45px ">
                <button class="btn btn-outline-light btn-lg px-5" type="submit" id="teste">Cadastrar</button>
                <p class="small pb-lg-2"><a class="text-white-50" href="{{'/'}}">Já possui uma conta?</a></p>

              </div>
  
            
  
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection