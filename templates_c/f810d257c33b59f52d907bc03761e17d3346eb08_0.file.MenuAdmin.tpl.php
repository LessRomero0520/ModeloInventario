<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 03:17:43
  from 'C:\xampp\htdocs\ModeloInventario-master\templates\MenuAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e950f37a90b00_01213366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f810d257c33b59f52d907bc03761e17d3346eb08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master\\templates\\MenuAdmin.tpl',
      1 => 1586826356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e950f37a90b00_01213366 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		 <a href="?controller=Menu&action=CargarOpcion&opcion=CrearUsuario" class="collection-item">Crear Usuario</a>
		 <a href="#!" class="collection-item">Habilitar / Deshabilitar</a>
		 <a href="#!" class="collection-item">Ver Inventario</a>
		 <a href="#!" class="collection-item">Productos con mas salidas</a>
		 <a href="#!" class="collection-item">Productos con menos salidas</a>
		  <a href="#!" class="collection-item">Productos agotados</a>
  </div>
</div><?php }
}
