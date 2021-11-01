@extends('Admin/layouts/principal')
@section('container-principal')
 <div class="erros">
 </div>
 <div class="card"  id="formCategoria">
    <div class="card-header">
      Categoria
    </div>
    <div class="card-body">
        <form action="{{route('categoria.update', $categoria->id)}} " method="POST">
            @method('PUT')
           @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">categoria</label>
              <input type="text" name="nome" value="{{$categoria->nome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <button type="submit" class="btn btn-outline-primary">Salvar</button>
               <a href="{{route('categoria.index')}}" type="button" class="btn btn-outline-warning">Cancelar</a>
          </form>
    </div>
  </div>
@endsection
