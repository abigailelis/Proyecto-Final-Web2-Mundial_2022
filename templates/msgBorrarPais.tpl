{include file='header.tpl'}

<section class="container-fluid justify-content-center">
    <div>
        <form action="{$BASE_URL}paises/borrar/{$id}" method="POST">
            <h2 class="text-center">Estás seguro de qué desas borrar el pais.</h2>
            <label for="si">Si </label>
            <input type="radio" id="si" name="borrarPais" value="si">
            <label for="no">No </label>
            <input type="radio" id="no" name="borrarPais" value="no">
            <button class="btn bten-success" type="submit">Enviar</button>
        </form>
    </div>
</section>

{include file='footer.tpl'}