<h1>Detalhes do Usuário</h1>

<p><strong>Nome:</strong> {{ $usuario->nome }}</p>
<p><strong>Email:</strong> {{ $usuario->email }}</p>

<a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>

<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
