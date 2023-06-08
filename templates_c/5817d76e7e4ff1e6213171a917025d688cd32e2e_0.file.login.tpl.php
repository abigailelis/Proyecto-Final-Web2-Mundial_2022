<?php
/* Smarty version 4.3.0, created on 2023-06-06 06:16:50
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647eb33212e588_15682704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5817d76e7e4ff1e6213171a917025d688cd32e2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\login.tpl',
      1 => 1686023637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647eb33212e588_15682704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesión</h5>
          <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['msg']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>

          <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
verificar" method="post">
            <!-- Usuario input -->
            <div class="form-outline mb-4">
              <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" value="">
              <label class="form-label" for="usuario">Usuario</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="">
              <label class="form-label" for="password">Password</label>
            </div>

            <button type="submit" class="btn btn-block mb-4">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}