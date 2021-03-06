<?php
/* Smarty version 3.1.29, created on 2017-10-22 05:20:05
  from "/home/themrel/public_html/themes/default/template/identification.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec2a85218137_41580551',
  'file_dependency' => 
  array (
    '6d70b60eed619c1dc43d5df5effc19c65e562a0b' => 
    array (
      0 => '/home/themrel/public_html/themes/default/template/identification.tpl',
      1 => 1507277994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_59ec2a85218137_41580551 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Identification');?>
</h2>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:infos_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN_ACTION']->value;?>
" method="post" name="login_form" class="properties">
  <fieldset>
    <legend><?php echo l10n('Connection settings');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="username"><?php echo l10n('Username');?>
</label>
        </span>
        <input tabindex="1" class="login" type="text" name="username" id="username" size="25">
      </li>

      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input tabindex="2" class="login" type="password" name="password" id="password" size="25">
      </li>

<?php if ($_smarty_tpl->tpl_vars['authorize_remembering']->value) {?>
      <li>
        <span class="property">
          <label for="remember_me"><?php echo l10n('Auto login');?>
</label>
        </span>
        <input tabindex="3" type="checkbox" name="remember_me" id="remember_me" value="1">
      </li>
<?php }?>
    </ul>
  </fieldset>

  <p>
    <input type="hidden" name="redirect" value="<?php echo urlencode($_smarty_tpl->tpl_vars['U_REDIRECT']->value);?>
">
    <input tabindex="4" type="submit" name="login" value="<?php echo l10n('Submit');?>
">
  </p>

	<p>
<?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Register');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-register">&nbsp;</span><span><?php echo l10n('Register');?>
</span>
		</a>
<?php }
if (isset($_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value)) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-lost-password">&nbsp;</span><span><?php echo l10n('Forgot your password?');?>
</span>
		</a>
<?php }?>
	</p>

</form>

<?php echo '<script'; ?>
 type="text/javascript"><!--
document.login_form.username.focus();
//--><?php echo '</script'; ?>
>

</div> <!-- content -->
<?php }
}
