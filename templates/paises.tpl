{include file='header.tpl'}

<div class="container mt-5">
    <section class="mb-3">
        {if $logueado == true}
            <!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR PAIS -->
            <button class="btn btn-block mb-4">
                <a href="{$BASE_URL}formPais/add" class="btn-a">Agregar Nuevo</a>
            </button>
        {/if}
    </section>
    <section class="paises">
        {foreach from=$paises item=pais}
            <section class="card">
                <img src="{$pais->bandera}" class="card-img-top" alt="Bandera de {$pais->nombre}">
                <div class="card-body">
                    <h2 class="card-title">{$pais->nombre}</h2>
                    <p class="card-text">Continente: {$pais->continente}</p>
                    <p class="card-text"> Clasificación: {$pais->clasificacion}</p>
                    <button class="btn btn-block mb-4"><a href="{$BASE_URL}jugadores/{$pais->nombre}" class="btn-a">Ver
                            más</a></button>
                    {if $logueado ==true}
                        <button class="btn btn-block mb-4"><a href="{$BASE_URL}formPais/editar/{$pais->id}"
                                class="btn-a">Editar</a>
                        </button>
                        <button class="btn btn-block mb-4"><a href="{$BASE_URL}paises/msgBorrar/{$pais->id}"
                                class="btn-a">Borrar</a>
                        </button>
                    {/if}
                </div>
            </section>
        {/foreach}
    </section>
</div>

{include file='footer.tpl'}