<?php
/* Smarty version 4.3.0, created on 2023-06-01 20:25:01
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6478e27d709908_09441920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaac3ba2a5999d05837ac0ecddd3ad1fa0da0c05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\home.tpl',
      1 => 1685427933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478e27d709908_09441920 (Smarty_Internal_Template $_smarty_tpl) {
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
