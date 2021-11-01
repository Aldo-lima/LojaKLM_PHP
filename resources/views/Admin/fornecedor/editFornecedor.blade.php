@extends('Admin/layouts/principal')
@section('container-principal')
<form action="{{route('fornecedor.update', $fornecedor->id)}} " method="POST">
    @method('PUT')
   @csrf
   <div class="card" id="form">
    <div class="card-header">
      Novo Fornecedor
    </div>
    <div class="card-body">
          <div class="row">
            <div class="col-3">
               <label for="disabledSelect" class="form-label">Categoria</label>
                <select type="number"  id="disabledSelect"  name="categoria_id"  class="form-select">
                  <option value="{{$fornecedor->categoria->id}}"  >{{$fornecedor->categoria->nome}}</option>
                  @foreach($categorias as $categoria)
                   <option type="number" value="{{$categoria->id}}">{{$categoria->nome}}</option>
                  @endforeach
                </select>
             </div>
        </div>
        <br>
          <div class="row">
              <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nome</label>
                <input type="text" name="nome" value="{{$fornecedor->nome}}" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Razão Social</label>
                <input type="text" name="nome_r" value="{{$fornecedor->nome_r}}" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
            </div>
        </div>
             <br> <br>
     <div class="row">
           <div class="col-4">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">CNPJ</label>
              <input type="text" id="id_CNPJ" name="cnpj" value="{{$fornecedor->cnpj}}" class="form-control" placeholder="Disabled input">
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Incrição estadual</label>
                <input type="text" id="disabledTextInput" name="inscri_esta"  value="{{$fornecedor->inscri_esta}}"  class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col">
              </div>
        </div>
        </div>
  </div>
  <div class="card" id="form_contato">
    <h5 class="card-header">Contato</h5>
    <div class="card-body">
        <div class="row">
           <div class="col-4">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">nome</label>
              <input type="text" name="nome_contato" value="{{$fornecedor->contato->nome_contato}}"  id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Telefone</label>
                <input type="text" name="telefone" value="{{$fornecedor->contato->telefone}}" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Email</label>
                <input type="email" name="email"  value="{{$fornecedor->contato->email}}" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
            </div>
        </div>
          <div class="row">
           <div class="col-4">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Cargo</label>
              <input type="text" name="cargo" value="{{$fornecedor->contato->cargo}}" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo</label>
                <select id="disabledSelect" name="tipo_telefone"  class="form-select">
                  <option>{{$fornecedor->contato->tipo_telefone}}</option>
                  <option>comercial</option>
                  <option>pessoal</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo</label>
                <select id="disabledSelect" name="tipo_email" class="form-select">
                  <option>{{$fornecedor->contato->tipo_telefone}}</option>
                  <option value="Comercial">comercial</option>
                  <option value="pessoal">pessoal</option>
                </select>
              </div>
            </div>
        </div>

    </div>
  </div>
  -------------------------------------------
  <div class="card"  id="form_endereco">
    <h5 class="card-header">Endereço</h5>
    <div class="card-body">
      <div class="row">
           <div class="col-2">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">CEP</label>
              <input type="text" value="{{$fornecedor->cep}}" name="cep" id="id_cep" class="form-control" placeholder="Disabled input">
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Rua</label>
                <input type="text" id="disabledTextInput" value="{{$fornecedor->rua}}" name="rua" class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nnúmero</label>
                <input type="text" value="{{$fornecedor->numero}}" name="numero" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">bairro</label>
                <input type="text" id="disabledTextInput" value="{{$fornecedor->bairro}}" name="bairro" class="form-control" placeholder="Disabled input">
              </div>
            </div>
        </div>
          <br>
          <div class="row">
           <div class="col">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Cidade</label>
              <input type="text" value="{{$fornecedor->cidade}}" id="disabledTextInput" name="cidade" class="form-control" placeholder="Disabled input">
            </div>
           </div>
           <div class="col">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Estado</label>
              <input type="text" value="{{$fornecedor->estado}}" id="disabledTextInput" name="estado" class="form-control" placeholder="Disabled input">
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Proximidade</label>
                <input type="text" value="{{$fornecedor->proximidade}}" id="disabledTextInput" name="proximidade" class="form-control" placeholder="Disabled input">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Complemento</label>
                <input type="text" id="disabledTextInput" value="{{$fornecedor->complemento}}" name="complemento"  class="form-control" placeholder="Disabled input">
              </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-10">
             <button type="submit" class="btn btn-outline-primary">Salvar</button>

            </div>
            <div class="col">
             <a href="{{route('fornecedor.index')}}" type="button" class="btn btn-outline-warning">Cancelar</a>
              </div>
          </div>
            </div>
        </div>
  </div>

  </form>
@endsection
