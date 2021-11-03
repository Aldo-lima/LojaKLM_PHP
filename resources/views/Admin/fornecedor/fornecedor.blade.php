@extends('Admin.layouts.principal')
@section('container-principal')


<div class="card" id="fornecedor">
  <div class="card-header">
    Detalhes do fornecedor
  </div>
  <div class="card-body" >
    <div class="row">
          <div class="col-4">
              <span>Nome Fantasia:</span><br>
              {{$fornecedor->nome}}
          </div>

         <div class="col-4">
            <span>Razão social:</span> <br>{{$fornecedor->nome_r}}
         </div>
    </div><br>
    <div class="row">
        <div class="col-4">
         <span>CNPJ:</span><br>
         {{$fornecedor->cnpj}}
        </div>
        <div class="col">
        <span>Inscrição Estadual:</span><br>
         {{$fornecedor->inscri_esta}}
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
          {{$fornecedor->contato->nome_contato}}
          </div>
          <div class="col">
           <span>Telefone</span><br>
           {{$fornecedor->contato->telefone}}
          </div>
           <div class="col">
              <span>E-mail:</span><br>

          </div>
      </div>
      <br>
     <div class="row">
          <div class="col">
          <span>Cargo</span><br>
          {{$fornecedor->contato->cargo}}
          </div>
          <div class="col">
           <span>tipo:</span><br>
           {{$fornecedor->contato->tipo_telefone}}
          </div>
           <div class="col">
              <span>Tipo</span><br>
              {{$fornecedor->contato->tipo_email}}
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
               {{$fornecedor->rua}}
          </div>
          <div class="col">
              <span>Número:</span><br>
               {{$fornecedor->numero}}
          </div>
          <div class="col">
              <span>Complemento:</span><br>
              {{$fornecedor->complemento}}
          </div>
      </div>
      <br>

       <div class="row">
          <div class="col">
              <span>Bairro:</span><br>
              {{$fornecedor->bairro}}
          </div>
          <div class="col">
              <span>Cidade:</span><br>
              {{$fornecedor->cidade}}
          </div>
          <div class="col">
              <span>Estado:</span><br>
              {{$fornecedor->estado}}
          </div>
      </div>
       <br>
       <div class="row">
          <div class="col">
              <span>CEP:</span><br>
              {{$fornecedor->cep}}
          </div>
          <div class="col">
              <span>Proximidade:</span><br>
              {{$fornecedor->proximidade}}
          </div>

      </div><br>
      <a  href="{{route('fornecedor.edit', $fornecedor->id)}}" type="button" class="btn btn-primary">Editar</a>
      <a href="{{route('fornecedor.index')}}" type="button" class="btn btn-outline-warning">Cancelar</a>
       </div>

</div>
<br>

@endsection
