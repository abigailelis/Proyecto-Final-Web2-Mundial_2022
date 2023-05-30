<?php
/* Smarty version 4.3.0, created on 2023-05-30 15:17:53
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formulario-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6475f781de2b09_57211710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18a6183c863d15cac954db0af9ab760a5b35ff9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formulario-add.tpl',
      1 => 1685452340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6475f781de2b09_57211710 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label for="foto">Foto</label> 
                        <input class="form-control" type="text" name="foto" placeholder="Ingrese la url de la imágen">
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
