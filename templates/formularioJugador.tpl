{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-14 col-lg-10 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h2 class="card-title text-center mb-2 fs-2">{$titulo}</h2>
                    <div class="card-body">
                        <form action="{$BASE_URL|cat:$action}" method="POST">
                            <div class="form-outline mb-4">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="{$jugador->nombre|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="apellido">Apellido</label>
                                <input class="form-control" type="text" name="apellido" value="{$jugador->apellido|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion"
                                    value="{$descripcion|default:""}">{$jugador->descripcion|default:""}</textarea>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="posicion">Posición</label>
                                <input class="form-control" type="text" name="posicion" value="{$jugador->posicion|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="foto">Foto</label>
                                <input class="form-control" type="text" name="foto" value="{$jugador->foto|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="pais">Pais</label>
                                <select name="pais">
                                    {foreach from=$paises item=pais}
                                        <option value="{$pais->id}">{$pais->nombre}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block mb-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{include file="footer.tpl"}