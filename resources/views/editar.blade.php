<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roupas</title>
    </head>
    <body>
        <h1>Roupas<h1>

        <form action="/editar-roupas/{{ $roupas-> id }}" method="POST">
            @csrf
            <label for="lblPeca">Tipo da peça: </label>
            <input type="text" name="peca" value="{{ $roupas-> peca }}"> 
            <br><br>
            <label for="lblPreco">Preço: </label>
            <input type="text" name="preco" value="{{ $roupas-> preco }}"> 
            <br><br>
            <button>Cadastrar</button>
        </form>
    </body>
</html>
