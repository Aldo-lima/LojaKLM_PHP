@extends('admin.layouts.principal')
@section('container-principal')

<div class="card" id="fornecedor">
  <div class="card-header">
    Detalhes do fornecedor
  </div>
  <div class="card-body" >
    <div class="row">
          <div class="col-4">
              <span>Nome Fantasia:</span><br>
              {{$produto->produto}}
          </div>
     
         <div class="col-4">
            <span>Razão social:</span> <br>{{$produto->descricao}}
         </div>
    </div><br>
    <div class="row">
        <div class="col-4">
         <span>Razão social:</span><br>
         {{$produto->unidade_medida}}
        </div>
        <div class="col">
        <span>Razão social:</span><br>
         {{$produto->quantidade_embalagem}}
        </div>
    </div><br>

  </div>
</div>

<div class="card" id="card_fornecedor_contato">
  <div class="card-header">
    Contato
  </div>
  <div class="card-body">
      <div class="row">
          <div class="col">
          <span>Nome</span><br>
          
          </div>
          <div class="col">
           <span>Telefone</span><br>
             
          </div>
           <div class="col">
              <span>E-mail:</span><br>
              
          </div>
      </div>
      <br>
     <div class="row">
          <div class="col">
          <span>Cargo</span><br>
           
          </div>
          <div class="col">
           <span>tipo:</span><br>
              
          </div>
           <div class="col">
              <span>Tipo</span><br>
             
                       </div>
      </div>
  </div>
</div>

<div class="card" id="card_endereco">
  <div class="card-header">
    Endereço
  </div>
  <div class="card-body">
      <div class="row">
          <div class="col">
              <span>Rua:</span><br>
              
          </div>
          <div class="col">
              <span>Número:</span><br>
          
          </div>
          <div class="col">
              <span>Complemento:</span><br>
              
          </div>
      </div>
      <br>

       <div class="row">
          <div class="col">
              <span>Bairro:</span><br>
                       </div>
          <div class="col">
              <span>Cidade:</span><br>
                      </div>
          <div class="col">
              <span>Estado:</span><br>
          </div>
      </div>
       <br>
       <div class="row">
          <div class="col">
              <span>CEP:</span><br>
                      </div>
          <div class="col">
              <span>Proximidade:</span><br>
                     </div>
      </div><br>
        <a  class="btn btn-primary">editar</a>
      <a  type="button" class="btn btn-outline-warning">Cancelar</a>
     <a  class="btn btn-danger">apagar</a>
  </div>
</div>
<br>
@endsection