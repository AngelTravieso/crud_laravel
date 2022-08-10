<html>
    <body>

        <h1>Agregar Usuario</h1>
          
        <form method="POST" action="/agregar_usuario">
            @csrf
            
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" autocomplete="off" />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email" autocomplete="off" />

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" autocomplete="off" />

            <input type="submit" value="Enviar" />

        </form>

        <a href="listar_usuarios">Ver Usuarios</a>
        <a href="editar_usuario_form">Actualizar información</a>
        <a href="eliminar_usuario_form">Eliminar usuario</a>        

    </body>

</html>