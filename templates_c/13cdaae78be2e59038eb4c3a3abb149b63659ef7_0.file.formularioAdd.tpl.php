<?php
/* Smarty version 4.3.0, created on 2023-06-01 05:06:10
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\formularioAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64780b22317689_87676331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cdaae78be2e59038eb4c3a3abb149b63659ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\formularioAdd.tpl',
      1 => 1685588081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64780b22317689_87676331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="conteiner">
        <div class="card">
            <div class="card-header">
                <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
            </div>
            <div class="card-body">
            
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">
                    <label for="nombre">Nombre</label> 
                        <input class="form-control" type="text" name="nombre" value="">
                    <label for="apellido">Apellido</label> 
                        <input class="form-control" type="text" name="apellido" value="">
                    <label for="descripcion">Descripción</label> 
                        <textarea class="form-control" name="descripcion" value=""></textarea>
                    <label for="posicion">Posición</label> 
                        <input class="form-control" type="text" name="posicion" value="">
                    <label for="foto">Foto</label> 
                        <input class="form-control" type="text" name="foto"value="">
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
