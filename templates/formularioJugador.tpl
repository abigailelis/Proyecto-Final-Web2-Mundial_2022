{include file="header.tpl"}

<div class="conteiner">
    <div class="card">
        <div class="card-header">
            <h3>{$titulo}</h3>
        </div>
        <div class="card-body">
            <form action="{$BASE_URL|cat:$action}" method="POST">
                <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{$nombre|default:""}">
                <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" value="{$apellido|default:""}">
                <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" value="{$descripcion|default:""}">{$descripcion|default:""}</textarea>
                <label for="posicion">Posición</label>
                    <input class="form-control" type="text" name="posicion" value="{$posicion|default:""}">
                <label for="foto">Foto</label>
                    <input class="form-control" type="text" name="foto" value="{$foto|default:""}">
                <label for="pais">Pais</label>
                <select name="pais">
                    {foreach from=$paises item=pais}
                        <option value={$pais->id}>{$pais->nombre}</option>
                    {/foreach}
                </select>
                <button class="btn bten-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
<div>

{include file="footer.tpl"}