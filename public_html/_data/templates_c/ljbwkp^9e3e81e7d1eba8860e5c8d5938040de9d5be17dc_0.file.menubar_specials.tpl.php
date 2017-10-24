<?php
/* Smarty version 3.1.29, created on 2017-10-22 05:20:05
  from "/home/themrel/public_html/themes/default/template/menubar_specials.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec2a85186c00_76048621',
  'file_dependency' => 
  array (
    '9e3e81e7d1eba8860e5c8d5938040de9d5be17dc' => 
    array (
      0 => '/home/themrel/public_html/themes/default/template/menubar_specials.tpl',
      1 => 1507277994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec2a85186c00_76048621 ($_smarty_tpl) {
?>
<dt><?php echo l10n('Specials');?>
</dt>
<dd>
	<ul><?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_0_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_0_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li><?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_local_item;
}
if ($__foreach_link_0_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_item;
}
?></ul>
</dd>
<?php }
}
