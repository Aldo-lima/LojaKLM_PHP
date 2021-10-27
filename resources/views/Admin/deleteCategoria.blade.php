<h1>tem certeza que dezeja deletar </h1><br>
<strong>{{ $categoria->nome}}</strong>
<form action="{{route('categoria.delete', $categoria->id)}}" method="POST">
    @method('DELETE')
    @csrf
      <button type="submit">Deletar</button>
</form>