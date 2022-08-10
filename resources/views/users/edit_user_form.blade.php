<html>
    <body>

        <h1>Editar Usuario</h1>

        @if (isset($status) && $status === 10)
            <p style="color: green">Usuario editado correctamente</p>
        @endif
          
        <form method="POST" action="/editar_usuario">
            @csrf
            @method('PUT')
            
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre" autocomplete="off" />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" />

            <label for="password">Nombre</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" autocomplete="off" />

            <input type="submit" value="Guardar" />

        </form>

        <a href="/">Ir a Inicio</a>
        <a href="listar_usuarios">Ver Usuarios</a>

    </body>

</html>