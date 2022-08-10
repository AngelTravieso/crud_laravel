<html>
    <body>

        <h1>Eliminar Usuario</h1>

        @if (isset($status) && $status === 10)
            <p style="color: green">Usuario eliminado correctamente</p>
        @endif
          
        <form method="POST" action="/eliminar_usuario">
            @csrf
            @method('DELETE')
            
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre del usuario" autocomplete="off" />

            <input type="submit" value="Eliminar" />

        </form>

        <a href="/">Ir a Inicio</a>
        <a href="listar_usuarios">Ver Usuarios</a>

    </body>

</html>