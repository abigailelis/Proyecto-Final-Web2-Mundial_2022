<?php
/* Smarty version 4.3.0, created on 2023-05-30 17:24:32
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64761530a39303_26528803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8eaa05133d1225dc5589da9819c4ff632fd5a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\jugadores.tpl',
      1 => 1685455629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64761530a39303_26528803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posición</th>
            <th>Pais</th>
            <th>Ver más</th>
            <th>Editar</th>
            <th>Borrar</th>
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
                <td><a href="jugador/ver/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Ver más</a></td>
                <td><a href="jugador/editar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Editar</a></td>
                <td><a href="jugador/borrar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<button><a href="jugador/add">Agregar Nuevo</a></button>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
