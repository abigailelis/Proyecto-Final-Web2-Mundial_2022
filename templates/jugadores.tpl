{include file = 'header.tpl'}

<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>posicion</th>
            <th>pais</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$jugadores item=jugador}
            <tr>
                <td>{$jugador->nombre}</td>
                <td>{$jugador->apellido}</td>
                <td>{$jugador->posicion}</td>
                <td>{$jugador->id_pais}</td>
                <td><a href="jugador/{$jugador->id}">Ver más</a></td>
            </tr>
        {/foreach}

    </tbody>



{include file = 'footer.tpl'}