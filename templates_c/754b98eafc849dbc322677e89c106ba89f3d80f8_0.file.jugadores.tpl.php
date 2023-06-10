<?php
/* Smarty version 4.3.0, created on 2023-06-06 19:37:10
  from 'C:\xampp\htdocs\TPE_WEB2\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647f6ec62b1900_58800658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754b98eafc849dbc322677e89c106ba89f3d80f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\jugadores.tpl',
      1 => 1686072675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647f6ec62b1900_58800658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container-fluid">
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Posición</th>
                <th scope="col">Pais</th>
                <th scope="col">Ver más</th>
                <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
                <tr scope="row">
                    <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['paises']->value != 'null') {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pais']->value->id == $_smarty_tpl->tpl_vars['jugador']->value->id_pais) {?>
                                <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</td>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['paisSelected']->value->nombre;?>
</td>
                    <?php }?>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugador/ver/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Ver más</a></td>
                    <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formulario/editar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Editar</a></td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugador/borrar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Borrar</a></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR JUGADOR -->
<?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?>
    <section class="container-fluid justify-content-end display-flex">
        <button class="btn mb-4">
            <a class="btn-a" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formulario/agregar">Agregar Nuevo</a>
        </button>
    </section>
<?php }
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
