<div class="contenedor reestablecer">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <p class="descripcion-pagina">Coloca tu nuevo password</p>

        <?php if($mostrar) : ?>

            <form class="formulario" method="POST">

                <div class="campo">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Tu password" name="password">
                </div>

                <input class="boton" type="submit" value="Guardar Password">
            </form>

        <?php endif; ?>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Obten una</a>
        </div>

    </div>

</div>