<?php
/* Smarty version 4.3.0, created on 2023-06-05 21:54:49
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formularioJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e3d89472480_38169361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75cdf3a69776c6df3d2b69f0151940ac9c50e9ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formularioJugador.tpl',
      1 => 1685994866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e3d89472480_38169361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-14 col-lg-10 mx-auto">
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
                                <label for="apellido">Apellido</label>
                                <input class="form-control" type="text" name="apellido" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['apellido']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion"
                                    value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['descripcion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['descripcion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="posicion">Posición</label>
                                <input class="form-control" type="text" name="posicion" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['posicion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="foto">Foto</label>
                                <input class="form-control" type="text" name="foto" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['foto']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="pais">Pais</label>
                                <select name="pais">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['pais']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary btn-block mb-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
