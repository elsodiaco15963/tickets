<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PRINCIAPL</title>
    <link rel="stylesheet" href="{{asset('assets/estilo-principal.css')}}">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<nav class="menu">
				<a href="#">Usuario</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                    <button class="button-close" type="submit" style="background-color:#f1bd4a;border:none;cursor: pointer;">
                        <img src="{{ asset('assets/imagenes/cerrar.png') }}" style="width: 18px;">
                    </button>
                </form>
			</nav>
		</div>
	</header>
	<div class="capa" style="margin-top:100px">
    @yield('content')
    </div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="{{ route('crear-usuario') }}">Nuevo Usuario</a>
			<a href="#">Usuarios</a>
			<a href="#">Nuevo ticket</a>
			<a href="#">Tickets</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>