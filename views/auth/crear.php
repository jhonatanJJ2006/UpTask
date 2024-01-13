<div class="contenedor crear">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta de UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <form class="formulario" method="POST" action="/crear">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre" name="nombre" value="<?php echo $usuario->nombre ?>">
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu email" name="email" value="<?php echo $usuario->email ?>">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Tu Password" name="password">
            </div>

            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input id="password2" type="password" placeholder="Repite tu Password" name="password2">
            </div>

            <input class="boton" type="submit" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>

    </div>

</div>