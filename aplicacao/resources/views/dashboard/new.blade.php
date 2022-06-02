@extends('layout.layout')

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
@section('content') 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container card bg-dark text-white p-3" style="margin-top: 40px">
    <div class="tab-pane" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <div class="text-left mb-3">
            <h2 class="fw-bold mt-4 mb-3 text-uppercase" style="font-size: 20pt">Salvar Fatura</h2>
        </div>


        <form action="/fatura/salvar" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <input type="hidden" value="">

                <div class="col-sm-6">
                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="descricao">Descricao</label>
                        <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Valor referente ao mes..." />
                        
                    </div>

                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="valorFatura">Valor da fatura</label>
                        <input type="number" id="valorFatura" name="valorFatura" class="form-control" />
                    
                    </div>

                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="imgFatura">Imagem da fatura</label>
                        <input type="file" name="imgFatura" id="imgFatura" class="" />
                        
                    </div>


                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="vencimento">Vencimento</label>
                        <input type="date" id="vencimento" name="vencimento" class="form-control" />
                        
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="imgRecibo">Imagem do recibo</label>
                        <input type="file" id="imgRecibo" name="imgRecibo"/>
                        
                    </div>

                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="dataPagamento">Data do pagamento</label>
                        <input type="date" id="dataPagamento" name="dataPagamento" class="form-control" />
                        
                    </div>

                                 
                </div>
          
                <div class="row">
                    <div class="form d-flex justify-content-left  col-sm-6">
                        <a href="/fatura/index" class="btn btn-primary btn-block mb-3">Voltar</a>
                    </div>
                    <div class="form d-flex justify-content-end  col-sm-6">
                        <button type="submit" class="btn btn-primary btn-block mb-3">Salvar</button>
                        
                    </div>
                </div>            
            </div>
        </form>
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