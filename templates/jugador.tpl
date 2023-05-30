{include file='header.tpl'}

<section class="container mt-5 descripcion-jugador">
    <section>
        <h1>{$jugador->nombre}</h1>
        <h2>{$jugador->apellido}</h2>
        <p>{$jugador->descripcion}</p>
        <h3>{$jugador->posicion}</h3>
        <p>{$jugador->id_pais}</p>
    </section>
    <section>
        <img src="{$jugador->foto}" alt="Foto del jugador {$jugador->nombre}">
    </section>
</section>

{include file='footer.tpl'}