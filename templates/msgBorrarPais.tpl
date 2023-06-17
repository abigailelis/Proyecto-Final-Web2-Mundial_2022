{include file='header.tpl'}

<section class="container-fluid justify-content-center">
<h2>Estás seguro de que deseas borrar el país?</h2>
    <form action="{$BASE_URL}paises/borrar/{$id}" method="POST">
        <label for="si">Si </label>
        <input type="radio" id="si" name="borrarPais" value="si">
        <label for="no">No </label>
        <input type="radio" id="no" name="borrarPais" value="no">
        <button class="btn bten-success" type="submit">Enviar</button>
    </form>
</section>

{include file='footer.tpl'}