{include file = 'header.tpl'}
    <section>
        
       
       <p>  {$jugador->nombre}</p>
       <p>  {$jugador->apellido}</p>
       <p>  {$jugador->descripcion}</p>
       <p>  {$jugador->posicion}</p>
       <p>  {$jugador->id_pais}</p>
       <img src=" {$jugador->foto} ">
        
    </section>

{include file = 'footer.tpl'}