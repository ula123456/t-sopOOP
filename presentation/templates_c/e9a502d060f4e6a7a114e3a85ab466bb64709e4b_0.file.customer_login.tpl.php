<?php
/* Smarty version 4.3.0, created on 2023-01-09 12:15:49
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\customer_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bbf765846984_42392007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a502d060f4e6a7a114e3a85ab466bb64709e4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\customer_login.tpl',
      1 => 1673248068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbf765846984_42392007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_login",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
    <p class="box-title">Login</p>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogin;?>
">
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }?>
        <p>
            <label for="email">E-mail address:</label>
            <input type="text" maxlength="50" name="email" size="22" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEmail;?>
" />
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" maxlength="50" name="password" size="22" />
        </p>
        <p>
            <input type="submit" name="Login" value="Login" /> |
            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToRegisterCustomer;?>
">Register user</a>
        </p>
    </form>
</div><?php }
}
