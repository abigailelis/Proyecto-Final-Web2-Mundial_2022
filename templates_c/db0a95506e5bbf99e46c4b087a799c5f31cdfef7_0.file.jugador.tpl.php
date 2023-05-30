<?php
/* Smarty version 4.3.0, created on 2023-05-30 09:22:08
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6475a420f0c582_28666280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0a95506e5bbf99e46c4b087a799c5f31cdfef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\jugador.tpl',
      1 => 1685431319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6475a420f0c582_28666280 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['pais']->value->id == $_smarty_tpl->tpl_vars['jugador']->value->id_pais) {?>
                <p><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</p>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
