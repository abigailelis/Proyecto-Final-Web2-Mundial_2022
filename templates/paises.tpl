{include file='header.tpl'}

<table class="table table-dark">
    <thead>
        <tr>
            <th>nombre</th>
            <th>continente</th>
            <th>clasificacion</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$paises item=pais}
            <tr>
                <td>{$pais->nombre}</td>
                <td>{$pais->continente}</td>
                <td>{$pais->clasificacion}</td>
                <td><img src="{$pais->foto}"></td>
            </tr>
        {/foreach}
    </tbody>

{include file='footer.tpl'}