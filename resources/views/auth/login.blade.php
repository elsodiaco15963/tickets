<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>
<body class="body-container">
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="logo-container">
                <img src="{{asset('assets/imagenes/logo-bizflow.png')}}">
            </div>
            <div class="input-container">
                <label>Correo Electrónico</label>
                <input type="email" id="email" name="email" required><br>
            </div>
            <div class="input-container">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" required><br>
            </div>
            @if ($errors->has('email') || $errors->has('password'))
                <div class="verification-alert">
                    No se encontró la cuenta.
                </div>
            @endif
            <button type="submit" class="button">Iniciar sesión</button>
            <div class="input-container">
                <label>¿No tienes cuenta?</label>
                <a href="{{ route('register') }}" class="registration-button">Registrate aquí</a>
            </div>
        </form>
    </div>
</body>
</html>
