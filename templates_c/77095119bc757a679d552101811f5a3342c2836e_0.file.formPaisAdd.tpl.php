<?php
/* Smarty version 4.3.0, created on 2023-06-01 21:23:43
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formPaisAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6478f03f0c5a88_82788972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77095119bc757a679d552101811f5a3342c2836e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formPaisAdd.tpl',
      1 => 1685647382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478f03f0c5a88_82788972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).($_smarty_tpl->tpl_vars['action']->value);?>
" method="POST">
                    <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="">
                    <label for="continente">Continente</label>
                        <input class="form-control" type="text" name="continente" value="">
                    <label for="clasificacion">Clasificación</label>
                        <input class="form-control" name="clasificacion" type="number" value="">
                    <label for="bandera">Bandera (url)</label>
                        <input class="form-control" type="text" name="bandera" value="" placeholder="Ingrese la url de la imágen">
                    <button class="btn bten-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
<div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
