<?php
/* Smarty version 4.3.0, created on 2023-06-17 23:39:35
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\msgBorrarPais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648e2817112381_34625946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7166dfcc6c1edcd2d8cb591c808f4c079b78c85d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\msgBorrarPais.tpl',
      1 => 1687037731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_648e2817112381_34625946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container-fluid justify-content-center">
<h2>Estás seguro de que deseas borrar el <?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
</h2>
    <form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).($_smarty_tpl->tpl_vars['action']->value);?>
" method="POST">
        <label for="si">Si </label>
        <input type="radio" id="si" name="borrar<?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
" value="si">
        <label for="no">No </label>
        <input type="radio" id="no" name="borrar<?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
" value="no">
        <button class="btn bten-success" type="submit">Enviar</button>
    </form>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
