<?php
/* Smarty version 4.3.0, created on 2023-01-04 07:30:08
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b51cf03a8268_10849968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf6f16be316648a03e11785674bcf0c9f86ab97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\admin_login.tpl',
      1 => 1672811982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b51cf03a8268_10849968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_login",'assign'=>"obj"),$_smarty_tpl);?>

<div class="login">
    <p class="login-title">TShirtShop Login</p>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">
        <p>
            Enter login information or go back to
            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToIndex;?>
">storefront</a>.
        </p>
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLoginMessage != '') {?>
            <p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLoginMessage;?>
</p>
        <?php }?>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" size="35" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsername;?>
" />
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" size="35" value="" />
        </p>
        <p>
            <input type="submit" name="submit" value="Login" />
        </p>
    </form>
</div><?php }
}
