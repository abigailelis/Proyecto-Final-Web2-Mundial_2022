{include file='header.tpl'}

<section class="container mt-5">
    <section class="card">
        <div>
            <img class="card-img-top" src="{$jugador->foto}" alt="Foto del jugador {$jugador->nombre}">
        </div>
        <div class="card-body">
            <h1 class="card-title">{$jugador->nombre}</h1>
            <h2 class="card-subtitle">{$jugador->apellido}</h2>
            <p class="card-text">{$jugador->descripcion}</p>
            <h3 class="card-subtitle">Posición: {$jugador->posicion}</h3>
            {foreach from=$paises item=pais}
                {if $pais->id == $jugador->id_pais}
                    <p class="card-subtitle">{$pais->nombre}</p>
                {/if}
            {/foreach}
        </div>
    </section>
</section>

{include file='footer.tpl'}