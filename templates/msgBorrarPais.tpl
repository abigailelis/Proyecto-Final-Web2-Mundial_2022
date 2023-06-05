{include file='header.tpl'}

<form action="{$BASE_URL}paises/borrar/{$id}" method="POST">
    <h2>Estás seguro de qué desas borrar el pais.</h2>
    <label for="si">Si </label>
        <input type="radio" id="si" name="borrarPais" value="si">
    <label for="no">No </label>
        <input type="radio" id="no" name="borrarPais" value="no">
    <button class="btn bten-success" type="submit">Enviar</button>
</form>

{include file='footer.tpl'}