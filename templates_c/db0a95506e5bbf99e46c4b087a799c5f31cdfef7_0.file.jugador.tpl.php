<?php
/* Smarty version 4.3.0, created on 2023-05-30 07:58:26
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64759082e79788_83806567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0a95506e5bbf99e46c4b087a799c5f31cdfef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\jugador.tpl',
      1 => 1685426208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64759082e79788_83806567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container mt-5 descripcion-jugador">
    <section>
        <h1><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['jugador']->value->descripcion;?>
</p>
        <h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_pais;?>
</p>
    </section>
    <section>
        <img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->foto;?>
" alt="Foto del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
    </section>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
