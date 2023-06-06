{include file='header.tpl'}

<section class="container-fluid">
<h1>{$titulo}</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Posición</th>
                <th scope="col">Pais</th>
                <th scope="col">Ver más</th>
                {if $logueado ==true}
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$jugadores item=jugador}
                <tr scope="row">
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
                    {if $logueado == true}
                        <td><a href="{$BASE_URL}formulario/editar/{$jugador->id}">Editar</a></td>
                        <td><a href="{$BASE_URL}jugador/borrar/{$jugador->id}">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR JUGADOR -->
{if $logueado == true}
    <section class="container-fluid justify-content-end display-flex">
        <button class="btn mb-4">
            <a class="btn-a" href="{$BASE_URL}formulario/add">Agregar Nuevo</a>
        </button>
    </section>
{/if}
{include file='footer.tpl'}