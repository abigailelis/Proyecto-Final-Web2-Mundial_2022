<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3>Cargar Jugador</h3>
            </div>
            <div class="card-body">
                <form action="jugador/add" method="POST">
                    <label for="nombre">Nombre</label> 
                        <input class="form-control" type="text" name="nombre">
                    <label for="apellido">Apellido</label> 
                        <input class="form-control" type="text" name="apellido">
                    <label for="descripcion">Decripción</label> 
                        <textarea class="form-control" name="descripcion"></textarea>
                    <label for="posicion">Posición</label> 
                        <input class="form-control" type="text" name="posicion">
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