{include file='header.tpl'}

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <img class="img-jugador" src="{$jugador->foto}" alt="Foto del jugador {$jugador->nombre}">
        </div>
        <div class="col-6">
            <h1>{$jugador->nombre}</h1>
            <h2>{$jugador->apellido}</h2>
            <p class="text-justify">{$jugador->descripcion}</p>
            <h3>Posición: {$jugador->posicion}</h3>
            <div class="row">
                <div class="col-2">
                    <p>{$pais->nombre}</p>
                </div>
                <div class="col-2">
                    <img src="{$pais->bandera}" alt="Bandera del  pais del jugador {$jugador->nombre}"
                        class="img-bandera-jugador">
                </div>
            </div>
            {if $logueado == true}
                <a href="{$BASE_URL}formularioJugador/editar/{$jugador->id}">Editar</a>
                <a href="{$BASE_URL}jugador/borrar/{$jugador->id}">Borrar</a>
            {/if}
        </div>
        <div class="col-1 align-self-end">
            <button class="btn"><a class="btn-a" href={$BASE_URL}jugadores>Volver</a></button>
        </div>
    </div>
</section>

{include file='footer.tpl'}