{include file="header.tpl"}
<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3>{$titulo}</h3>
            </div>
            <div class="card-body">
            
                <form action="{$BASE_URL}{$action}" method="POST">
                    <label for="nombre">Nombre</label> 
                        <input class="form-control" type="text" name="nombre" value="">
                    <label for="apellido">Apellido</label> 
                        <input class="form-control" type="text" name="apellido" value="">
                    <label for="descripcion">Descripción</label> 
                        <textarea class="form-control" name="descripcion" value=""></textarea>
                    <label for="posicion">Posición</label> 
                        <input class="form-control" type="text" name="posicion" value="">
                    <label for="foto">Foto</label> 
                        <input class="form-control" type="text" name="foto"value="">
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