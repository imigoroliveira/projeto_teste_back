<h1>Editar Usuário</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>

    <label for="senha">Nova Senha:</label>
    <input type="password" id="senha" name="senha">

    <button type="submit">Salvar</button>
</form>
