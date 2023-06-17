<?php
/* Smarty version 4.3.0, created on 2023-06-12 21:38:26
  from 'C:\xampp\htdocs\TPE_WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64877431da95b5_86776993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299d266e1a3cd3dffd94905d956109b920e4bd1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\header.tpl',
      1 => 1686430410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64877431da95b5_86776993 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <base href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" type="text/css">
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid justify-content-between">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item nav-link"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
home">Home</a></li>
            <li class="nav-item nav-link"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
paises/ver">Paises</a></li>
            <li class="nav-item nav-link"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugadores">Jugadores</a></li>
          </ul>
        </div>
        <div class="navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <?php if ($_smarty_tpl->tpl_vars['logueado']->value == false) {?>
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-secondary" type="button">
                  <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login">Log in</a>
                </button>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <div class="navbar-collapse justify-content-between">
                  <span class="spinner-grow text-success spinner-grow-sm"></span>
                  <span class="nav-link">En línea: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span>
                  <button class="btn btn-sm btn-outline-secondary" type="button">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout">Log out</a>
                  </button>
                </div>
              </li>
            <?php }?>
          </ul>
        </div>
      </div>
      </div>
    </nav>
</header><?php }
}
