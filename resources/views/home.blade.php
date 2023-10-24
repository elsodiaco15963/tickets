<h2>Bienvenido</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar Sesión</button>
</form>