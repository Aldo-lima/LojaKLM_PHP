@extends('Admin/layouts/principal')
@section('container-principal')
 <div class="erros">
 </div>
 <div class="card" id="formCategoria">
    <div class="card-header" style="color: #9d9d9d">
      Categoria
    </div>
    <div class="card-body">
        <form action="{{route('categoria.store')}}" method="POST">
            @csrf
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" style="color: #9d9d9d">Categoria</label>
                   <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               </div>
               <button type="submit" class="btn btn-outline-primary">Salvar</button>
               <a href="{{route('categoria.index')}}" type="button" class="btn btn-outline-warning">Cancelar</a>
        </form>
    </div>
  </div>
@endsection
