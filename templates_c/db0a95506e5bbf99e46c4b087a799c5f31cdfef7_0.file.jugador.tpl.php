<?php
/* Smarty version 4.3.0, created on 2023-06-06 05:01:26
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647ea18642e501_88065867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0a95506e5bbf99e46c4b087a799c5f31cdfef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\jugador.tpl',
      1 => 1686020476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647ea18642e501_88065867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <img class="img-jugador" src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->foto;?>
" alt="Foto del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
        </div>
        <div class="col-6">
            <h1><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</h2>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->descripcion;?>
</p>
            <h3>Posición: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h3>
            <div class="row">
                <div class="col-2">
                    <p><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</p>
                </div>
                <div class="col-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['pais']->value->bandera;?>
" alt="Bandera del  pais del jugador <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
"
                        class="img-bandera-jugador">
                </div>
            </div>
        </div>
        <div class="col-1  align-self-end">
                <button class="btn"><a class="btn-a" href=<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugadores>Volver</a></button>
            </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
