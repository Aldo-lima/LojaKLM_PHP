@extends('admin/layouts/principal')
@section('container-principal')
 <div class="erros">

 </div>
<form action="{{route('fornecedor.store')}}" method="POST">
   @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Razão Social</label>
      <input type="text" name="nome_r" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">CNPJ</label>
      <input type="text" name="cnpj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Inscrição Estadual</label>
      <input type="text" name="inscri_esta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
       <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection
