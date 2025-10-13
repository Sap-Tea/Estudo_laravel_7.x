<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Cadastro de Usuário</h2>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf <!-- Token de segurança obrigatório no Laravel -->

            <!-- Campo ID (somente leitura, geralmente gerado automaticamente pelo banco) -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" readonly>
            </div>

            <!-- Campo Nome -->
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Digite o nome" required>
            </div>

            <!-- Campo Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Digite o email" required>
            </div>

            <!-- Campo Email Verificado -->
            <div class="mb-3">
                <label for="email_verified_at" class="form-label">Email Verificado em</label>
                <input type="datetime-local" class="form-control" id="email_verified_at" name="email_verified_at" value="{{ old('email_verified_at') }}">
            </div>

            <!-- Campo Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha" required>
            </div>

            <!-- Campo Remember Token -->
            <div class="mb-3">
                <label for="remember_token" class="form-label">Token de Lembrança</label>
                <input type="text" class="form-control" id="remember_token" name="remember_token" value="{{ old('remember_token') }}">
            </div>

            <!-- Campo Created At -->
            <div class="mb-3">
                <label for="created_at" class="form-label">Criado em</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="{{ old('created_at') }}">
            </div>

            <!-- Campo Updated At -->
            <div class="mb-3">
                <label for="updated_at" class="form-label">Atualizado em</label>
                <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="{{ old('updated_at') }}">
            </div>

            <!-- Botão de Salvar -->
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <!-- Link do Bootstrap JS -->
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>
