@extends('admin/layouts/principal')
@section('container-principal')
 <div class="erros">

 </div>
<form action="{{route('categoria.store')}}" method="POST">
   @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">categoria</label>
      <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">descrição</label>
      <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
       <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection
