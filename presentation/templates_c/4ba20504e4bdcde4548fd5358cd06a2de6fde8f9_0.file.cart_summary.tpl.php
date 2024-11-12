<?php
/* Smarty version 4.3.0, created on 2023-01-06 06:59:56
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\cart_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b7b8dc5b9f88_52025572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ba20504e4bdcde4548fd5358cd06a2de6fde8f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\cart_summary.tpl',
      1 => 1672984765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b7b8dc5b9f88_52025572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"cart_summary",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box" id="cart-summary">
    <p class="box-title">Cart Summary</p>
    <div id="updating">Updating...</div>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmptyCart) {?>
        <p class="empty-cart">Your shopping cart is empty!</p>
    <?php } else { ?>
        <table class="cart-summary">
            <tbody>
                <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mItems) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <tr>
                        <td width="30" valign="top" align="right">
                            <?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
 x
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attributes'];?>
)
                        </td>
                    </tr>
                <?php
}
}
?>
                <tr>
                    <td colspan="2" class="cart-summary-subtotal">
                        <span class="price">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTotalAmount;?>
</span>
                        <span>
                            [ <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartDetails;?>
">View details</a> ]
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php }?>
</div>
<?php }
}
