<?php
/* Smarty version 4.3.0, created on 2023-06-01 19:43:15
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formPaisEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6478d8b390d301_09095772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b56762d0c34dc19f13f776149fe381598de159c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formPaisEdit.tpl',
      1 => 1685637530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478d8b390d301_09095772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="conteiner">
    <div class="card">
        <div class="card-header">
            <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['action']->value;
echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
                <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
                <label for="continente">Continente</label>
                    <input class="form-control" type="text" name="continente" value="<?php echo $_smarty_tpl->tpl_vars['continente']->value;?>
">
                <label for="clasificacion">Clasificación</label>
                    <input class="form-control" name="clasificacion" type="number" value="<?php echo $_smarty_tpl->tpl_vars['clasificacion']->value;?>
">
                <label for="bandera">Bandera</label>
                    <input class="form-control" type="text" name="bandera" value="<?php echo $_smarty_tpl->tpl_vars['bandera']->value;?>
">
                <button class="btn bten-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
<div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
