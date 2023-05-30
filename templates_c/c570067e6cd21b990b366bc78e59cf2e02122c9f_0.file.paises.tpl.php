<?php
/* Smarty version 4.3.0, created on 2023-05-30 03:38:54
  from 'C:\xampp\htdocs\TPE_WEB2\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647553aebe5123_18050657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c570067e6cd21b990b366bc78e59cf2e02122c9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\paises.tpl',
      1 => 1685410618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647553aebe5123_18050657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>continente</th>
            <th>clasificacion</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->continente;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->clasificacion;?>
</td>
                <td><img src=" <?php echo $_smarty_tpl->tpl_vars['pais']->value->foto;?>
 "></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
