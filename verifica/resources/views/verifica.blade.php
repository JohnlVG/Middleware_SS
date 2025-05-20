<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verifica tu edad</title>
</head>
<body>
    <h2>Ingrese su edad para continuar</h2>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/procesar-edad">
        @csrf
        <input type="number" name="edad" min="0" max="120" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
