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
        <th scope="col">Nome Fantasia</th>
        <th scope="col">Detalhes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $produtos as $produto )
        <th scope="row">{{$produto->id}}</th>
        <td>{{$produto->produto}}</td>
        <td>{{$produto->descricao}}</td>
        <td>produto</td>
        <td><a href="{{route('produto.show', $produto->id)}}">ver</a></td>
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
