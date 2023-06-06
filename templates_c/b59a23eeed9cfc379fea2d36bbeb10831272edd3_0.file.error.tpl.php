<?php
/* Smarty version 4.3.0, created on 2023-06-06 06:14:09
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647eb291a29902_27623644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b59a23eeed9cfc379fea2d36bbeb10831272edd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\error.tpl',
      1 => 1686024844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647eb291a29902_27623644 (Smarty_Internal_Template $_smarty_tpl) {
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
