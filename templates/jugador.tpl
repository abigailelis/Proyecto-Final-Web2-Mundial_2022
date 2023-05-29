{include file = 'header.tpl'}

    <section>
       <h1>{$jugador->nombre}</h1>
       <h2>{$jugador->apellido}</h2>
       <p>{$jugador->descripcion}</p>
       <h3>{$jugador->posicion}</h3>
       <p>{$jugador->id_pais}</p>
       <img src="{$jugador->foto}">
    </section>
    
{include file = 'footer.tpl'}