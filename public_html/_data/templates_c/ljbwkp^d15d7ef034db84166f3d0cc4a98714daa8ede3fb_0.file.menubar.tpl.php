<?php
/* Smarty version 3.1.29, created on 2017-10-22 05:20:05
  from "/home/themrel/public_html/themes/default/template/menubar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec2a85150000_33747082',
  'file_dependency' => 
  array (
    'd15d7ef034db84166f3d0cc4a98714daa8ede3fb' => 
    array (
      0 => '/home/themrel/public_html/themes/default/template/menubar.tpl',
      1 => 1507277994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec2a85150000_33747082 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
<div id="menubar">
<?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_block_0_saved_item = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$__foreach_block_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$__foreach_block_0_saved_local_item = $_smarty_tpl->tpl_vars['block'];
?>
	<dl id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<?php if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent($_smarty_tpl->tpl_vars['block']->value->template,$_smarty_tpl->tpl_vars['id']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->raw_content;?>

<?php }?>
	</dl>
<?php
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_local_item;
}
if ($__foreach_block_0_saved_item) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_item;
}
if ($__foreach_block_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_block_0_saved_key;
}
?>
</div><div id="menuSwitcher"></div>
<?php }
}
}
