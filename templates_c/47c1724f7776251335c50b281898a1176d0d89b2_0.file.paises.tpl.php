<?php
/* Smarty version 4.3.0, created on 2007-01-01 05:00:28
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_4598875c4d7108_67636068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c1724f7776251335c50b281898a1176d0d89b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\paises.tpl',
      1 => 1167624026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_4598875c4d7108_67636068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR PAIS -->
<button class="btn btn-outline-primary">
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formPais/add">Agregar Nuevo</a>
</button>

<div class="container mt-5">
    <section class="paises">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
            <section class="card">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pais']->value->bandera;?>
"  class="card-img-top" alt="Bandera de <?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</h2>
                    <h3 class="card-text"><?php echo $_smarty_tpl->tpl_vars['pais']->value->continente;?>
</h3>
                    <h3> Clasificación <?php echo $_smarty_tpl->tpl_vars['pais']->value->clasificacion;?>
</h3>
                    <button class="btn btn-outline-primary"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugadores/<?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
">Ver más</a></button>
                    <button class="btn btn-outline-primary"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formPais/editar/<?php echo $_smarty_tpl->tpl_vars['pais']->value->id;?>
">Editar</a></button>
                    <button class="btn btn-outline-primary"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
paises/borrar/<?php echo $_smarty_tpl->tpl_vars['pais']->value->id;?>
">Borrar</a></button>                   
                </div>
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
