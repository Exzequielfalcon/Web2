<?php
/* Smarty version 3.1.33, created on 2018-10-05 17:58:31
  from 'C:\xampp\htdocs\Proyectos\Web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb78a271c3a52_01900042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11efe057a2f39c3d649c35f3f27018b7f9e948ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web2\\templates\\home.tpl',
      1 => 1538755106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:ourhome.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb78a271c3a52_01900042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:ourhome.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-lg-12 container-fluid">
  <div class="row">


<div class="col-lg-5">
  <h1 class="text-white">Listado de items</h1>
  <br>
  <div class="container">
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['tarea']->value['pintada'] == 1) {?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['clase'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['rareza'];?>
 -- Pintado<a class="float-right" href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_categoria'];?>
">BORRAR</a></li>
      <?php } else { ?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['clase'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['rareza'];?>
<a class="float-right" href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_categoria'];?>
"> BORRAR</a>
        <p class="float-right">|</p> <a class="float-right" href="completada/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['pintada'];?>
"> COMPLETADA</a>
      </li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <div class="container">
    <h2 class="text-warning">ITEM</h2>
    <form method="post" action="agregar">
      <div class="form-group">
        <label class="text-success" for="tituloForm">Clase</label>
        <input type="text" class="form-control" id="tituloForm" name="tituloForm">
      </div>
      <div class="form-group">
        <label class="violet" for="descripcionForm">Rareza</label>
        <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
        <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
      </div>
      <button type="submit" class="btn btn-primary">Itemizar</button>
    </form>
  </div>
</div>


<div class="col-lg-5">
  <h1 class="text-white">Listado de items</h1>
  <br>
  <div class="container">
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['tarea']->value['pintada'] == 1) {?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['clase'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['rareza'];?>
 -- Pintado<a class="float-right" href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_categoria'];?>
">BORRAR</a></li>
      <?php } else { ?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['clase'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['rareza'];?>
<a class="float-right" href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_categoria'];?>
"> BORRAR</a>
        <p class="float-right">|</p> <a class="float-right" href="completada/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['pintada'];?>
"> COMPLETADA</a>
      </li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>

  <div class="container">
    <h2 class="text-warning">ITEM</h2>
    <form method="post" action="agregar">
      <div class="form-group">
        <label class="text-success" for="tituloForm">Clase</label>
        <input type="text" class="form-control" id="tituloForm" name="tituloForm">
      </div>
      <div class="form-group">
        <label class="violet" for="descripcionForm">Rareza</label>
        <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
        <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
      </div>
      <button type="submit" class="btn btn-primary">Itemizar</button>
    </form>
  </div>
</div>
</div>
  </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
