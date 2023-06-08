<?php
/* Smarty version 4.3.0, created on 2023-06-05 22:24:09
  from 'C:\xampp\htdocs\TPE_WEB2\templates\formularioPais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e4469868b04_04021761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffe06820135f68823e2a0d6d15d47c2d58cb7ad9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\formularioPais.tpl',
      1 => 1685996196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e4469868b04_04021761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-14 col-lg-8 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h3 class="card-title text-center mb-2 fs-5"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
                    <div class="card-body">
                        <form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).($_smarty_tpl->tpl_vars['action']->value);?>
" method="POST">
                            <div class="form-outline mb-4">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['nombre']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>    
                            <div class="form-outline mb-4">
                                <label for="continente">Continente</label>
                                <input class="form-control" type="text" name="continente" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['continente']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                            <div class="form-outline mb-4">    
                                <label for="clasificacion">Clasificación</label>
                                <input class="form-control" name="clasificacion" type="number" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['clasificacion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                            <div class="form-outline mb-4">    
                                <label for="bandera">Bandera (url)</label>
                                <input class="form-control" type="text" name="bandera" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['bandera']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Ingrese la url de la imágen">
                            </div>        
                                <button type="button" class="btn btn-primary btn-block mb-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}