<?php
/* Smarty version 4.3.0, created on 2023-01-09 12:17:07
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\customer_logged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bbf7b34c1b70_03228751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4acd5e5da0b3a79a07b3148fb64886febc7d46c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\customer_logged.tpl',
      1 => 1673248233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbf7b34c1b70_03228751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_logged",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
    <p class="box-title">Welcome, <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerName;?>
</p>
    <ul>
        <li>
            <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'account') {?> class="selected" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAccountDetails;?>
">
                Change Account
            </a>
        </li>
        <li>
            <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'credit-card') {?> class="selected" <?php }?>
                href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCreditCardDetails;?>
">
                <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCreditCardAction;?>
 CC Details
            </a>
        </li>
        <li>
            <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'address') {?> class="selected" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAddressDetails;?>
">
                <?php echo $_smarty_tpl->tpl_vars['obj']->value->mAddressAction;?>
 Address
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogout;?>
">
                Logout
            </a>
        </li>
        </ol>
</div><?php }
}
