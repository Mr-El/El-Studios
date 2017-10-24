<?php
/* Smarty version 3.1.29, created on 2017-10-22 05:20:04
  from "/home/themrel/public_html/themes/default/template/redirect.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec2a8449af85_13357219',
  'file_dependency' => 
  array (
    '05e6a44bebd34c38b8261f76f6fd91b3bac9e6e7' => 
    array (
      0 => '/home/themrel/public_html/themes/default/template/redirect.tpl',
      1 => 1507277994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec2a8449af85_13357219 ($_smarty_tpl) {
?>
<div style="margin:2em;text-align:center;font-size:larger">
	<?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<p style="margin:2em;text-align:center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
		<?php echo l10n('Click here if your browser does not automatically forward you');?>

	</a>
</p>
<?php }
}
