<?php
/* Smarty version 4.3.0, created on 2023-06-01 21:00:16
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\msgBorrarPais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6478eac08a9f85_10998370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7166dfcc6c1edcd2d8cb591c808f4c079b78c85d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\msgBorrarPais.tpl',
      1 => 1685646007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478eac08a9f85_10998370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
paises/borrar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
    <h2>Estás seguro de qué desas borrar el pais.</h2>
    <label for="si">Si </label>
    <input type="radio" id="si" name="borrarPais" value="si">
    <label for="no">No </label>
    <input type="radio" id="no" name="borrarPais" value="no">
    <button class="btn bten-success" type="submit">Enviar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
