<?php include_once __DIR__ . '/header-dashboard.php'; ?>

    <div class="contenedor-sm">
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>  

        <div class="contenedor-nueva-tarea">    
            <button id="agregar-tarea" class="agregar-tarea" type="button">&#43; Nueva Tarea</button>
        </div>

        <div id="filtros" class="filtros">
            <div class="filtros-inputs">
                <h2>Filtros:</h2>

                <div class="campo">
                    <label for="todas">Todas</label>
                    <input id="todas" type="radio" name="filtro" value="" checked>
                </div>
                
                <div class="campo">
                    <label for="completadas">Completadas</label>
                    <input id="completadas" type="radio" name="filtro" value="1">
                </div>
                
                <div class="campo">
                    <label for="pendientes">Pendientes</label>
                    <input id="pendientes" type="radio" name="filtro" value="0" checked>
                </div>

            </div>
        </div>

        <ul id="listado-tareas" class="listado-tareas">
            
        </ul>

    </div>

<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

<?php
$script .= '
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="build/js/tareas.js"></script>
    ';
?>