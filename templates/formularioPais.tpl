{include file="header.tpl"}

<div class="conteiner">
    <div class="card">
        <div class="card-header">
            <h3>{$titulo}</h3>
        </div>
        <div class="card-body">
            <form action="{$BASE_URL|cat:$action}" method="POST">
                <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{$nombre|default: ""}">
                <label for="continente">Continente</label>
                    <input class="form-control" type="text" name="continente" value="{$continente|default: ""}">
                <label for="clasificacion">Clasificación</label>
                    <input class="form-control" name="clasificacion" type="number" value="{$clasificacion|default: ""}">
                <label for="bandera">Bandera (url)</label>
                    <input class="form-control" type="text" name="bandera" value="{$bandera|default: ""}" placeholder="Ingrese la url de la imágen">
                <button class="btn bten-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
<div>

{include file="footer.tpl"}
