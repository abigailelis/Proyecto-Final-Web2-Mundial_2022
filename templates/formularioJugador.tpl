{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-14 col-lg-10 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h3 class="card-title text-center mb-2 fs-5">{$titulo}</h3>
                    <div class="card-body">
                        <form action="{$BASE_URL|cat:$action}" method="POST">
                            <div class="form-outline mb-4">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="{$nombre|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="apellido">Apellido</label>
                                <input class="form-control" type="text" name="apellido" value="{$apellido|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion"
                                    value="{$descripcion|default:""}">{$descripcion|default:""}</textarea>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="posicion">Posición</label>
                                <input class="form-control" type="text" name="posicion" value="{$posicion|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="foto">Foto</label>
                                <input class="form-control" type="text" name="foto" value="{$foto|default:""}">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="pais">Pais</label>
                                <select name="pais">
                                    {foreach from=$paises item=pais}
                                        <option value={$pais->id}>{$pais->nombre}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary btn-block mb-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{include file="footer.tpl"}