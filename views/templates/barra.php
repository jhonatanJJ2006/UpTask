<div class="barra-mobile">
    <h1>UpTask</h1>
    <div class="menu">
        <div id="mobile-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
            </svg>  
        </div>
    </div>
</div>

<div class="barra">
    <p>Hola: <span><?php echo $_SESSION['nombre'] ?></span></p>

    <a class="cerrar-sesion" href="/logout">Cerrar Sesión</a>
</div>