<?php
/* Smarty version 4.3.0, created on 2023-05-31 14:48:20
  from 'C:\xampp\htdocs\TPE_WEB2\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6477421435fe41_30411902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540b981f6cac55f70e49e8318337b04469f004c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\formulario.tpl',
      1 => 1685531623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477421435fe41_30411902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" method="POST">
                    <label for="nombre">Nombre</label> 
                        <input class="form-control" type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
                    <label for="apellido">Apellido</label> 
                        <input class="form-control" type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
">
                    <label for="descripcion">Descripción</label> 
                        <textarea class="form-control" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
"></textarea>
                    <label for="posicion">Posición</label> 
                        <input class="form-control" type="text" name="posicion" value="<?php echo $_smarty_tpl->tpl_vars['posicion']->value;?>
">
                    <label for="foto">Foto</label> 
                        <input class="form-control" type="text" name="foto"value="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
"  placeholder="Ingrese la url de la imágen">
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

                    <button class="btn bten-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
<div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
