@extends('Admin.layouts.principal')

@section('container-principal')
<div class="card"  id="cad_list">
    <div class="card-header">
      Fornecedores
    </div>
      <br>
    <div class="card-body">


      @if (session('sucesso'))
       <div>
           {{session('sucesso')}}
       </div>
       @endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Nome</th>
        <th scope="col">Razão Social</th>
        <th scope="col">Detalhes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $fornecedores as $fornecedor )
        <th scope="row">{{$fornecedor->id}}</th>
        <td>{{$fornecedor->categoria->nome}}</td>
        <td>{{$fornecedor->nome}}</td>
        <td>{{$fornecedor->nome_r}}</td>
        <td><a href="{{route('fornecedor.show', $fornecedor->id)}}">ver</a></td>
    </tr>
      @empty
         <th>
             <td  colspan="2" >não ha cidades relacionadas</td>
         </th>
      @endforelse

     </tbody>
  </table>
  <a href="{{route('fornecedor.create')}}"  type="button" class="btn btn-outline-primary">Adicionar</a>
    </div>

</div>
@endsection
