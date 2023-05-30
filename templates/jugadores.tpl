{include file = 'header.tpl'}

<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h1>cargar jugador</h1>
            </div>
            <div class="card-body">
                <form action="jugadores.model.php" method="POST">
                    <label> nombre </label> <input class="form-control" type="text" name="nombre">
                    <label> apellido </label> <input class="form-control" type="text" name="apellido">
                    <label> descripcion </label> <textarea class="form-control" name="apellido"></textarea>
                    <label> posicion </label> <input class="form-control" type="text" name="nombre">
                    <label> pais </label> <input class="form-control" type="text" name="pais">
                    <input class="btn bten-success" type="submit" value="Cargar jugador">
                </form>
            </div>
        </div>



<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>posicion</th>
            <th>pais</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$jugadores item=jugador}
            <tr>
                <td>{$jugador->nombre}</td>
                <td>{$jugador->apellido}</td>
                <td>{$jugador->posicion}</td>
                <td>{$jugador->id_pais}</td>
                <td><a href="jugador/{$jugador->id}">Ver más</a></td>
            </tr>
        {/foreach}

    </tbody>



{include file = 'footer.tpl'}