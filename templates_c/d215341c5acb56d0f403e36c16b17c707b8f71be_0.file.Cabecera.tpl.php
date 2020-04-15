<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 03:33:44
  from 'C:\xampp\htdocs\ModeloInventario-master\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9512f8c33d91_78395165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215341c5acb56d0f403e36c16b17c707b8f71be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master\\templates\\Cabecera.tpl',
      1 => 1586828016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9512f8c33d91_78395165 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  purple darken-3">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosTrab/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
