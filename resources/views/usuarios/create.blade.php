<h1>Novo Usuário</h1>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <button type="submit">Salvar</button>
</form>
