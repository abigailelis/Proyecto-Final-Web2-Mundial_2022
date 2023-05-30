<?php
/* Smarty version 4.3.0, created on 2023-05-30 16:04:55
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6476028730e085_74288701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0a95506e5bbf99e46c4b087a799c5f31cdfef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\jugador.tpl',
      1 => 1685455453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6476028730e085_74288701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container mt-5">
    <section class="card">
        <div>
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->foto;?>
" alt="Foto del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
        </div>
        <div class="card-body">
            <h1 class="card-title"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</h1>
            <h2 class="card-subtitle"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</h2>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->descripcion;?>
</p>
            <h3 class="card-subtitle">Posición: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['pais']->value->id == $_smarty_tpl->tpl_vars['jugador']->value->id_pais) {?>
                    <p class="card-subtitle"><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</p>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
