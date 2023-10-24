function validarContrasenas() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password-confirm").value;
    
    if (password !== confirmPassword) {
        alert("Las contraseñas no son iguales");
        return false; // Detiene el envío del formulario
    }

    // No detengas el envío del formulario aquí, ya que la verificación de correo es asincrónica
    return true;
}