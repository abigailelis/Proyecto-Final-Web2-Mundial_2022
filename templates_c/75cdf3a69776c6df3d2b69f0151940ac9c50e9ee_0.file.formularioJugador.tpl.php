<?php
/* Smarty version 4.3.0, created on 2023-06-05 20:50:09
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formularioJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647e2e6193c104_67940577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75cdf3a69776c6df3d2b69f0151940ac9c50e9ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formularioJugador.tpl',
      1 => 1685990973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e2e6193c104_67940577 (Smarty_Internal_Template $_smarty_tpl) {
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
                <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['apellido']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['descripcion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['descripcion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                <label for="posicion">Posición</label>
                    <input class="form-control" type="text" name="posicion" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['posicion']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <label for="foto">Foto</label>
                    <input class="form-control" type="text" name="foto" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['foto']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
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
