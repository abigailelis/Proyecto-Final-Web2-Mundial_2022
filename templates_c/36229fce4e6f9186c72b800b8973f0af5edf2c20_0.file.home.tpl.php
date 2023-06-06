<?php
/* Smarty version 4.3.0, created on 2023-06-06 19:36:15
  from 'C:\xampp\htdocs\TPE_WEB2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647f6e8f240846_15228439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36229fce4e6f9186c72b800b8973f0af5edf2c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\home.tpl',
      1 => 1686072675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647f6e8f240846_15228439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container-fluid">
    <div class="row">
        <div class="col-7">
            <img src="https://comercioyjusticia.info/wp-content/uploads/2022/12/Argentina-Qatar-2022-scaled.jpg"
                class="img-home" alt="Fixture Qatar 2022">
        </div>
        <div class="col-4">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <p class="text-justify">
            La Copa Mundial de la FIFA Qatar 2022 fue la vigésima segunda edición de la Copa Mundial de Fútbol
            masculino organizada por la FIFA. Esta edición del evento se desarrolló del 20 de noviembre al 18
            de diciembre en el otoño de Catar, que consiguió los derechos de organización el 2 de diciembre de
            2010​
            </p>
            <p class="text-justify">
            La mascota oficial del Mundial de Catar 2022 fue La'eeb, un kufiyya animado con forma infantil, de aspecto fantasmagórico y «espíritu juvenil». Fue presentada el 1 de abril de 2022 en el sorteo para definir los grupos.
            </p>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
