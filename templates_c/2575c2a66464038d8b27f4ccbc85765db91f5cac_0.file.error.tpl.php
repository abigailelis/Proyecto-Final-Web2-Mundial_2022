<?php
/* Smarty version 4.3.0, created on 2023-06-10 22:39:58
  from 'C:\xampp\htdocs\TPE_WEB2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6484df9e1be4c3_84536437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2575c2a66464038d8b27f4ccbc85765db91f5cac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\error.tpl',
      1 => 1686072674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6484df9e1be4c3_84536437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container">
    <div class="row">
        <div class="col">
            <img src="https://seeklogo.com/images/F/fifa-world-cup-2022-mascot-laeeb-logo-D484E21F8D-seeklogo.com.png"
                alt="Imágen de la'eeb - Qatar">
            <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3>
        </div>
        <div class="col align-self-end">
            <button class="btn"><a class="btn-a" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Volver al Inicio</a></button>
        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
