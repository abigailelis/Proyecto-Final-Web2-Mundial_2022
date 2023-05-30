<?php
/* Smarty version 4.3.0, created on 2023-05-30 23:17:31
  from 'C:\xampp\htdocs\TPE_WEB2\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647667ebaa79d3_64148481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c570067e6cd21b990b366bc78e59cf2e02122c9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\paises.tpl',
      1 => 1685480990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647667ebaa79d3_64148481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5">
    <section class="paises">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
            <section class="card">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pais']->value->bandera;?>
"  class="card-img-top" alt="Bandera de <?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</h2>
                    <h3 class="card-text"><?php echo $_smarty_tpl->tpl_vars['pais']->value->continente;?>
</h3>
                    <h3> Clasificación <?php echo $_smarty_tpl->tpl_vars['pais']->value->clasificacion;?>
</h3>
                    <button class="btn btn-outline-primary"><a href="paises/<?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
">Ver más</a></button>
                </div>
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
