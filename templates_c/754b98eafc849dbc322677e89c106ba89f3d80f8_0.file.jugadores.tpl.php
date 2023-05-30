<?php
/* Smarty version 4.3.0, created on 2023-05-30 16:37:14
  from 'C:\xampp\htdocs\TPE_WEB2\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64760a1a1a17b0_80545802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754b98eafc849dbc322677e89c106ba89f3d80f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\jugadores.tpl',
      1 => 1685457428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64760a1a1a17b0_80545802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['post']->value) {?>

<p>hola</p>    
    
<?php }?>

<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h1>cargar jugador</h1>
            </div>
            <div class="card-body">
                <form action="jugadores" method="post">
                    <label> nombre </label> <input class="form-control" type="text" name="nombre">
                    <label> apellido </label> <input class="form-control" type="text" name="apellido">
                    <label>  posicion </label> <input class="form-control" type="text" name="nombre">
                    <label> pais </label> <input class="form-control" type="text" name="pais">
                    <input class="btn bten-success" type="submit" value="Cargar jugador">
                </form>
            </div>
        </div>



<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>posicion</th>
            <th>pais</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_pais;?>
</td>
                <td><a href="jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Ver más</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
