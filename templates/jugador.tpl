{include file='header.tpl'}

<section class="container mt-5">
    <section class="card">
        <img class="card-img-top" src="{$jugador->foto}" alt="Foto del jugador {$jugador->nombre}">
        <div class="card-body">
            <h1 class="card-title">{$jugador->nombre}</h1>
            <h2 class="card-subtitle">{$jugador->apellido}</h2>
            <p class="card-text">{$jugador->descripcion}</p>
            <h3 class="card-subtitle">Posición: {$jugador->posicion}</h3>
            <p class="card-subtitle">{$pais->nombre}</p>
            <img src="{$pais->bandera}" alt="Bandera del  pais del jugador {$jugador->nombre}">
        </div>
    </section>
</section>

{include file='footer.tpl'}