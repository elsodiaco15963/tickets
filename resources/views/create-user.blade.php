@extends('home')
    
@section('content')
    <div class="container-register">
        <div class="card-usuario">
            <div class="card-title-new-usuario">Crear Usuario</div>
            <div class="card-form-new-usuario">
            <form method="POST" action="{{ route('crear-usuario') }}" onsubmit="return validarContrasenas()">
            @csrf
                <div class="form-group-new-usuario">
                    <div class="form-label">Nombres completos</div>
                    <div class="form-input-container">
                        <input  class="form-input" type="text" id="name" name="name" required autofocus>
                    </div>
                </div>
                <div class="form-group-new-usuario">
                    <div class="form-label">Correo electronico</div>
                    <div class="form-input-container">
                        <input class="form-input" type="email" id="email" name="email" required>
                    </div>
                </div>
                    @if ($errors->has('email'))
                    <div style="padding-left:4%;color:#d7384a">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                <div class="form-group-new-usuario">
                    <div class="form-label">Contraseña</div>
                    <div class="form-input-container">
                        <input class="form-input" type="password" id="password" name="password" required>
                    </div>
                </div>
                <div class="error-message-password" style="color: #d7384a;padding-left:4%"></div>
                <div class="form-group-new-usuario">
                    <div class="form-label">DNI</div>
                    <div class="form-input-container">
                        <input class="form-input" type="text" id="dni" name="dni">
                    </div>
                </div>
                @if ($errors->has('dni'))
                    <div style="padding-left:4%;color:#d7384a">
                        {{ $errors->first('dni') }}
                    </div>
                @endif
                <div class="error-message-dni" style="color: #d7384a;padding-left:4%"></div>
                <div class="button-container">
                    <button type="submit" class="button-submit">Registrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var dniInput = document.getElementById('dni');
        var passwordInput = document.getElementById('password');
        var errorElementDni = document.querySelector('.error-message-dni');
        var errorElementPassword = document.querySelector('.error-message-password');

        dniInput.addEventListener('input', function () {
            var dni = dniInput.value;
            
            // Validación del DNI
            if (dni.length !== 8 && dni.length !== 0) {
                if (!/^[0-9]{8}$/.test(dni)) {
                    errorElementDni.textContent = 'El DNI debe contener 8 dígitos numéricos';
                } else {
                    errorElementDni.textContent = '';
                }
            } else {
                errorElementDni.textContent = '';
            }
        });

        passwordInput.addEventListener('input', function () {
            var password = passwordInput.value;
            
            // Validación de la contraseña
            if (password.length < 6) {
                errorElementPassword.textContent = 'La contraseña debe tener al menos 6 caracteres';
            } else {
                errorElementPassword.textContent = '';
            }
        });
    });
    </script>
    <div></div>
@endsection
