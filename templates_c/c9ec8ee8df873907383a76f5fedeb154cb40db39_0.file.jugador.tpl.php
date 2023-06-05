<?php
/* Smarty version 4.3.0, created on 2023-06-05 22:36:18
  from 'C:\xampp\htdocs\TPE_WEB2\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e47420c39a3_37781721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ec8ee8df873907383a76f5fedeb154cb40db39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\jugador.tpl',
      1 => 1685996196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e47420c39a3_37781721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container mt-5">
    <section class="card">
        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->foto;?>
" alt="Foto del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
        <div class="card-body">
            <h1 class="card-title"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</h1>
            <h2 class="card-subtitle"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</h2>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->descripcion;?>
</p>
            <h3 class="card-subtitle">Posición: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h3>
            <p class="card-subtitle"><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['pais']->value->bandera;?>
" alt="Bandera del  pais del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
        </div>
    </section>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
