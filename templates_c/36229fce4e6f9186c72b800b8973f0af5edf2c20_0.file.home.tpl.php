<?php
/* Smarty version 4.3.0, created on 2023-06-05 23:47:21
  from 'C:\xampp\htdocs\TPE_WEB2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e57e9aebe47_94105224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36229fce4e6f9186c72b800b8973f0af5edf2c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\home.tpl',
      1 => 1685479326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e57e9aebe47_94105224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
    <section class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <p>La Copa Mundial de la FIFA Qatar 2022 fue la vigésima segunda edición de la Copa Mundial de Fútbol 
            masculino organizada por la FIFA. Esta edición del evento se desarrolló del 20 de noviembre al 18 
            de diciembre en el otoño de Catar, que consiguió los derechos de organización el 2 de diciembre de 
            2010​</p>
            <img src="https://media.tycsports.com/files/2022/04/01/409833/mundial-grupos_862x485.jpg" alt="Fixture Qatar 2022">
    </section>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
