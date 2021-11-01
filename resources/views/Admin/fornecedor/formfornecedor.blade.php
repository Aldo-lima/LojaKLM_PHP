@extends('Admin/layouts/principal')
@section('container-principal')
  <form action="{{$action}}" method="POST">
       @csrf
   <div class="card" id="form">
    <div class="card-header">
      Novo Fornecedor
    </div>
    <div class="card-body">
          <div class="row">
            <div class="col-3">
               <label for="disabledSelect" class="form-label">Categoria</label>
                <select type="number"  id="disabledSelect"  name="categoria_id" class="form-select" required>
                  <option  value="">Selecione uma categoria</option>
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
                <input type="text" name="nome" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Razão Social</label>
                <input type="text" name="nome_r" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
        </div>
             <br> <br>
     <div class="row">
           <div class="col-4">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">CNPJ</label>
              <input type="text" id="id_CNPJ" name="cnpj" class="form-control" placeholder="Disabled input" required >
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Incrição estadual</label>
                <input type="text" id="disabledTextInput" name="inscri_esta" class="form-control" placeholder="Disabled input" required>
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
              <input type="text" name="nome_contato"   id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Telefone</label>
                <input type="text"   name="telefone" id="id_telefone" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Email</label>
                <input type="email" name="email" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
        </div>
          <div class="row">
           <div class="col-4">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Cargo</label>
              <input type="text" name="cargo" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo</label>
                <select id="disabledSelect" name="tipo_telefone" class="form-select" >
                  <option>comercial</option>
                  <option>pessoal</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo</label>
                <select id="disabledSelect" name="tipo_email" class="form-select" >
                  <option>comercial</option>
                  <option>pessoal</option>
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
              <input type="text"  name="cep" id="id_cep" class="form-control" placeholder="Disabled input" required>
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Rua</label>
                <input type="text" id="disabledTextInput" name="rua" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nnúmero</label>
                <input type="text" name="numero" id="disabledTextInput" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">bairro</label>
                <input type="text" id="disabledTextInput" name="bairro" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
        </div>
          <br>
          <div class="row">
           <div class="col">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Cidade</label>
              <input type="text" id="disabledTextInput" name="cidade" class="form-control" placeholder="Disabled input" required>
            </div>
           </div>
           <div class="col">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Estado</label>
              <input type="text" id="disabledTextInput" name="estado" class="form-control" placeholder="Disabled input" required>
            </div>
           </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Proximidade</label>
                <input type="text" id="disabledTextInput" name="proximidade" class="form-control" placeholder="Disabled input" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Complemento</label>
                <input type="text" id="disabledTextInput" name="complemento"  class="form-control" placeholder="Disabled input" required>
              </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-10">
             <button type="submit" class="btn btn-outline-primary">Salvar</button>

            </div>
            <div class="col">
             <a href="{% url 'listar_fornecedor' %}" type="button" class="btn btn-outline-warning">Cancelar</a>
              </div>
          </div>
            </div>
        </div>
  </div>

  </form>
@endsection
