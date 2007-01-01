{include file='header.tpl'}

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR PAIS -->
<button class="btn btn-outline-primary">
    <a href="{$BASE_URL}formPais/add">Agregar Nuevo</a>
</button>

<div class="container mt-5">
    <section class="paises">
        {foreach from=$paises item=pais}
            <section class="card">
                <img src="{$pais->bandera}"  class="card-img-top" alt="Bandera de {$pais->nombre}">
                <div class="card-body">
                    <h2 class="card-title">{$pais->nombre}</h2>
                    <h3 class="card-text">{$pais->continente}</h3>
                    <h3> Clasificación {$pais->clasificacion}</h3>
                    <button class="btn btn-outline-primary"><a href="{$BASE_URL}jugadores/{$pais->nombre}">Ver más</a></button>
                    <button class="btn btn-outline-primary"><a href="{$BASE_URL}formPais/editar/{$jugador->id}">Editar</a></button>
                    <button class="btn btn-outline-primary"><a href="{$BASE_URL}paises/borrar/{$jugador->id}">Borrar</a></button>                   
                </div>
            </section>
        {/foreach}
    </section>
</div>
{include file='footer.tpl'}