@extends('Admin.layouts.principal')
@section('container-principal')

<div class="card" id="fornecedor">
  <div class="card-header">
    Detalhes do produto
  </div>
  <div class="card-body" >
    <div class="row">
          <div class="col-4">
              <span>Produto</span><br>
              {{$produto->produto}}
          </div>

         <div class="col-4">
            <span>Descrição:</span> <br>{{$produto->descricao}}
         </div>
         <div class="col-4">
            <span>Preço:</span><br>
             {{$produto->preco}}
            </div>
    </div><br>
    <div class="row">
        <div class="col-4">
         <span>unidade de medida:</span><br>
         {{$produto->unidade_medida}}
        </div>
        <div class="col-4">
        <span>quantidade na embalagem:</span><br>
         {{$produto->quantidade_embalagem}}
        </div>
        <div class="col-4">
            <span>Fornecedor</span><br>
             {{$produto->fornecedore->nome}}
            </div>
    </div><br>
    <a href="{{route('produto.edit', $produto->id)}}"  class="btn btn-primary">editar</a>
    <a  href="{{route('produto.index')}}" type="button" class="btn btn-outline-warning">Cancelar</a>
   <a  class="btn btn-danger">apagar</a>

  </div>
</div>
@endsection
