{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-14 col-lg-8 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h3 class="card-title text-center mb-2 fs-2">{$titulo}</h3>
                    <div class="card-body">
                        <form action="{$BASE_URL|cat:$action}" method="POST">
                            <div class="form-outline mb-4">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="{$nombre|default: ""}">
                            </div>    
                            <div class="form-outline mb-4">
                                <label for="continente">Continente</label>
                                <input class="form-control" type="text" name="continente" value="{$continente|default: ""}">
                            </div>
                            <div class="form-outline mb-4">    
                                <label for="clasificacion">Clasificación</label>
                                <input class="form-control" name="clasificacion" type="number" value="{$clasificacion|default: ""}">
                            </div>
                            <div class="form-outline mb-4">    
                                <label for="bandera">Bandera (url)</label>
                                <input class="form-control" type="text" name="bandera" value="{$bandera|default: ""}" placeholder="Ingrese la url de la imágen">
                            </div>        
                                <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}