@extends('Admin/layouts/principal')
@section('container-principal')
  <form action="{{route('produto.update', $produto->id)}}" method="POST">
    @method('PUT')
    @csrf
   <div class="card" id="form">
    <div class="card-header">
      Novo Produto
    </div>
    <div class="card-body">
          <div class="row">
            <div class="col-3">
               <label for="disabledSelect" class="form-label">fornecedor</label>
                <select type="number"  id="disabledSelect"  name="fornecedore_id" class="form-select" required>
                  <option  value="{{$produto->fornecedore->id}}">{{$produto->fornecedore->nome}}</option>
                  @foreach($fornecedores as $fornecedor)
                   <option type="number" value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                  @endforeach
                </select>
             </div>
        </div>
        <br>
          <div class="row">
              <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nome</label>
                <input type="text" value="{{$produto->produto}}" name="produto" id="disabledTextInput" class="form-control" placeholder="Nome do produto" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Descrição</label>
                <input type="text" value="{{$produto->descricao}}" name="descricao" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
        </div>
             <br> <br>
     <div class="row">
           <div class="col-3">

                <label for="disabledSelect" class="form-label">Unidade de medida</label>
                 <select type="number"  id="disabledSelect"  name="unidade_medida" class="form-select" required>
                   <option  >{{$produto->unidade_medida}}</option>
                   <option >Kg</option>
                   <option >Litro</option>
                   <option >Unidade</option>
                   </select>

           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Quantidade na Embalagem</label>
                <input type="text" id="disabledTextInput" value="{{$produto->quantidade_embalagem}}" name="quantidade_embalagem" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Preço</label>
                    <input type="number" value="{{$produto->preco}}" id="disabledTextInput" name="preco" class="form-control" placeholder="Disabled input" required>
                  </div>
              </div>
        </div>
        </div>
        <div class="row">
            <div class="col-10">
              <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>
            <div class="col">
              <a href={{route('produto.index')}} type="button" class="btn btn-outline-warning">Cancelar</a>
             </div>
          </div><br>
        </div>
  </div>
  </div>
  </form>
@endsection
