<?php
/* Smarty version 3.1.29, created on 2017-10-22 05:20:05
  from "/home/themrel/public_html/themes/default/template/infos_errors.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec2a85220ae5_34199042',
  'file_dependency' => 
  array (
    '00edb3bfb9fd0d89563b51edfff1e306f7f4d464' => 
    array (
      0 => '/home/themrel/public_html/themes/default/template/infos_errors.tpl',
      1 => 1507277994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec2a85220ae5_34199042 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
<div class="errors">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_0_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_0_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_local_item;
}
if ($__foreach_error_0_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_item;
}
?>
  </ul>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
<div class="infos">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['infos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_1_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_1_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_local_item;
}
if ($__foreach_info_1_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_item;
}
?>
  </ul>
</div>
<?php }
}
}
