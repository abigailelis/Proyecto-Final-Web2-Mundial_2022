{include file='header.tpl'}

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR JUGADOR -->
<button class="btn btn-outline-primary">
    <a href="{$BASE_URL}formulario/add">Agregar Nuevo</a>
</button>

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR JUGADOR -->
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posición</th>
            <th>Pais</th>
            <th>Ver más</th>
            <th>Editar</th>
            <th>Borrar</th>
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
                    <td>{$paisSelected->nombre}</td>
                {/if}
                <td><a href="{$BASE_URL}jugador/ver/{$jugador->id}">Ver más</a></td>
                <td><a href="{$BASE_URL}formulario/editar/{$jugador->id}">Editar</a></td>
                <td><a href="{$BASE_URL}jugador/borrar/{$jugador->id}">Borrar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include file='footer.tpl'}