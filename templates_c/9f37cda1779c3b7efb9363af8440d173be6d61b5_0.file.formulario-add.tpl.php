<?php
/* Smarty version 4.3.0, created on 2023-05-30 23:11:34
  from 'C:\xampp\htdocs\TPE_WEB2\templates\formulario-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647666869cded1_73761135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f37cda1779c3b7efb9363af8440d173be6d61b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\formulario-add.tpl',
      1 => 1685479326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647666869cded1_73761135 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3>Cargar Jugador</h3>
            </div>
            <div class="card-body">
                <form action="jugador/add" method="POST">
                    <label for="nombre">Nombre</label> 
                        <input class="form-control" type="text" name="nombre">
                    <label for="apellido">Apellido</label> 
                        <input class="form-control" type="text" name="apellido">
                    <label for="descripcion">Decripción</label> 
                        <textarea class="form-control" name="descripcion"></textarea>
                    <label for="posicion">Posición</label> 
                        <input class="form-control" type="text" name="posicion">
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
<div><?php }
}
