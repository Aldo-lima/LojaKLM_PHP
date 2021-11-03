@extends('Admin/layouts/principal')
@section('container-principal')
<div class="card" id="car_index">
    <div class="card-header" >

        <h4> Deletar </h4>
    </div>
      <div class="card-body">
      <h5 class="card-title">Tem Certeza que dezeja deletar ? </h5><br>
       <h5>Categoria: {{$categoria->nome}}</h5>
      <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST" >
         @csrf
         @method('DELETE')
              <button type="submit" class="btn btn-outline-danger">Deletar</button>
              <button type="button" class="btn btn-outline-warning">Cancelar</button>
      </form>
    </div>
  </div>

@endsection
