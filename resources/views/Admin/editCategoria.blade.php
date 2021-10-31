@extends('Admin/layouts/principal')
@section('container-principal')
 <div class="erros">

 </div>
<form action="{{route('categoria.update', $categoria->id)}} " method="POST">
    @method('PUT')
   @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">categoria</label>
      <input type="text" name="nome" value="{{$categoria->nome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">descrição</label>
      <input type="text" name="descricao" value="{{$categoria->descricao}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
       <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection
