<?php
/* Smarty version 4.3.0, created on 2023-06-05 20:53:34
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formularioPais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e2f2e2c1781_44804320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89f6b77141d3aae8ffd28421dd528a32f9aaff36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formularioPais.tpl',
      1 => 1685991158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e2f2e2c1781_44804320 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <input class="form-control" type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['nombre']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <label for="continente">Continente</label>
                    <input class="form-control" type="text" name="continente" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['continente']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <label for="clasificacion">Clasificación</label>
                    <input class="form-control" name="clasificacion" type="number" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['clasificacion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <label for="bandera">Bandera (url)</label>
                    <input class="form-control" type="text" name="bandera" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['bandera']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Ingrese la url de la imágen">
                <button class="btn bten-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
<div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
