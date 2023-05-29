<?php
/* Smarty version 4.3.0, created on 2023-05-29 23:23:48
  from 'C:\xampp\htdocs\TPE_WEB2\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647517e4202684_64760747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ec8ee8df873907383a76f5fedeb154cb40db39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\jugador.tpl',
      1 => 1685395421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647517e4202684_64760747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        
       
       <p>  <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</p>
       <p>  <?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</p>
       <p>  <?php echo $_smarty_tpl->tpl_vars['jugador']->value->descripcion;?>
</p>
       <p>  <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</p>
       <p>  <?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_pais;?>
</p>
       <img src=" <?php echo $_smarty_tpl->tpl_vars['jugador']->value->foto;?>
 ">
        
    </section>

   



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
