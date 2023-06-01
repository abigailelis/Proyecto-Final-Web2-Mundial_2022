<?php
/* Smarty version 4.3.0, created on 2023-06-01 22:06:57
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6478fa61a81105_08722657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b59a23eeed9cfc379fea2d36bbeb10831272edd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\error.tpl',
      1 => 1685649662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478fa61a81105_08722657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<img src="https://seeklogo.com/images/F/fifa-world-cup-2022-mascot-laeeb-logo-D484E21F8D-seeklogo.com.png" alt="Imágen de la'eeb - Qatar">
<h3><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3>
<button><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Volver al Inicio</a></button>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
