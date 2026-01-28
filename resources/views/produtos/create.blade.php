<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Novo Produto</h1>

    <form action="/produtos" method="POST">
        @csrf <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome aqui" required>
        
        <button type="submit">Enviar Cadastro</button>
    </form>

    <br>
    <a href="/cursos/listagem">Ver lista de cursos</a>
</body>
</html>