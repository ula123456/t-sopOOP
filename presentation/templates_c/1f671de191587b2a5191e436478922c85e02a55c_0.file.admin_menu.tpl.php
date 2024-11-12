<?php
/* Smarty version 4.3.0, created on 2023-01-07 11:31:32
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b94a047355b2_34778617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f671de191587b2a5191e436478922c85e02a55c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\admin_menu.tpl',
      1 => 1673078787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b94a047355b2_34778617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_menu",'assign'=>"obj"),$_smarty_tpl);?>

<h1>TShirtShop Admin</h1>
<p class="menu"> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreAdmin;?>
">CATALOG ADMIN</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">PRODUCTS ATTRIBUTES ADMIN</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartsAdmin;?>
">CARTS ADMIN</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToOrdersAdmin;?>
">ORDERS ADMIN</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreFront;?>
">STOREFRONT</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogout;?>
">LOGOUT</a> |
</p><?php }
}
