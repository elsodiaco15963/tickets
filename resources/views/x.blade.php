<div class="login-container" style="margin-top:100px">
        <form method="POST" action="{{ route('crear-usuario') }}" onsubmit="return validarContrasenas()">
            @csrf
            <h2>Registrarte</h2>
            <div class="input-container">
                <label for="name">Nombres completos</label>
                <input type="text" id="name" name="name" required autofocus>
            </div>
            <div class="input-container">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required><br>
            </div>
            @if ($errors->has('email'))
                <div class="verification-alert">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <div class="input-container">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required><br>
            </div>
            <button type="submit" class="button">Registrar</button>
        </form>
    </div>
    <script src="{{asset('assets/scripts/register.js')}}"></script>