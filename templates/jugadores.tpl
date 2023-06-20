{include file='header.tpl'}

<section class="container-fluid">
    <h1>{$titulo}</h1>
    <!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR JUGADOR -->
    {if $logueado == true}
        <section class="container-fluid justify-content-end display-flex">
            <button class="btn mb-4">
                <a class="btn-a" href="{$BASE_URL}formularioJugador/agregar">Agregar Nuevo</a>
            </button>
        </section>
    {/if}
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Posición</th>
                <th>Pais</th>
                <th>Ver más</th>
                {if $logueado ==true}
                    <th>Editar</th>
                    <th>Borrar</th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$jugadores item=jugador}
                <tr>
                    <td>{$jugador->nombre}</td>
                    <td>{$jugador->apellido}</td>
                    <td>{$jugador->posicion}</td>
                    {if $paises!= 'null'}
                        {foreach from=$paises item=pais}
                            {if $pais->id == $jugador->id_pais}
                                <td>{$pais->nombre}</td>
                            {/if}
                        {/foreach}
                    {else}
                        <td>{$paisSeleccionado->nombre}</td>
                    {/if}
                    <td><a href="{$BASE_URL}jugador/ver/{$jugador->id}">Ver más</a></td>
                    {if $logueado == true}
                        <td><a href="{$BASE_URL}formularioJugador/editar/{$jugador->id}">Editar</a></td>
                        <td><a href="{$BASE_URL}jugador/msgBorrar/{$jugador->id}">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>


{include file='footer.tpl'}