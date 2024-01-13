<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
    <?php include_once __DIR__ . '/../templates/alertas.php' ?>

    <a class="enlace" href="/perfil">Volver al Perfil</a>

    <form class="formulario" action="/cambiar-password" method="POST">
        <div class="campo">
            <label for="password_actual">Password Actual</label>
            <input id="password_actual" type="password" name="password_actual" placeholder="Tu Password">
        </div>
        
        <div class="campo">
            <label for="password_nuevo">Nuevo Password</label>
            <input id="password_nuevo" type="password"  name="password_nuevo" placeholder="Tu Nuevo Password">
        </div>

        <input type="submit" value="Guardar Cambios">
    </form>
</div>


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>