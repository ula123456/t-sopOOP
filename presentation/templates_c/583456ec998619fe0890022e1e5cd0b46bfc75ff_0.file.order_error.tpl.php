<?php
/* Smarty version 4.3.0, created on 2023-01-12 08:32:54
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\order_error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bfb7a6b41be6_11024017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583456ec998619fe0890022e1e5cd0b46bfc75ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\order_error.tpl',
      1 => 1673507052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfb7a6b41be6_11024017 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>An error has occurred during the processing of your order.</h3>
<p class="description">
If you have an inquiry regarding this message please email
<a href="mailto:<?php echo (defined('CUSTOMER_SERVICE_EMAIL') ? constant('CUSTOMER_SERVICE_EMAIL') : null);?>
">
<?php echo (defined('CUSTOMER_SERVICE_EMAIL') ? constant('CUSTOMER_SERVICE_EMAIL') : null);?>
</a>
</p><?php }
}
