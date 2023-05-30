{include file='header.tpl'}

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
                <td>{$pais->nombre}</td>
                <td><a href="jugador/ver/{$jugador->id}">Ver más</a></td>
                <td><a href="jugador/editar/{$jugador->id}">Editar</a></td>
                <td><a href="jugador/borrar/{$jugador->id}">Borrar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include file='footer.tpl'}