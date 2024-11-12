<?php
/* Smarty version 4.3.0, created on 2023-01-10 16:10:11
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\checkout_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bd7fd36deb29_18784064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc605546d2ce1b922b1494bac071734c7253d7de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\checkout_info.tpl',
      1 => 1673362690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd7fd36deb29_18784064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"checkout_info",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCheckout;?>
">
    <h2>Your order consists of the following items:</h2>
    <table class="tss-table">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mCartItems) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attributes'];?>
)</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subtotal'];?>
</td>
            </tr>
        <?php
}
}
?>
    </table>
    <p>Total amount: <font class="price">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTotalAmount;?>
</font>
    </p>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mNoCreditCard == 'yes') {?>
        <p class="error">No credit card details stored.</p>
    <?php } else { ?>
        <p><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCreditCardNote;?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mNoShippingAddress == 'yes') {?>
        <p class="error">Shipping address required to place order.</p>
    <?php } else { ?>
        <p>
            Shipping address: <br />
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['address_1'];?>
<br />
            <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCustomerData['address_2']) {?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['address_2'];?>
<br />
            <?php }?>
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['city'];?>
<br />
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['region'];?>
<br />
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['postal_code'];?>
<br />
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerData['country'];?>
<br /><br />
            Shipping region: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mShippingRegion;?>

        </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mNoCreditCard != 'yes' && $_smarty_tpl->tpl_vars['obj']->value->mNoShippingAddress != 'yes') {?>
        <p>
            Shipping type:
            <select name="shipping">
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mShippingInfo) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mShippingInfo[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shipping_id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mShippingInfo[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shipping_type'];?>

                    </option>
                <?php
}
}
?>
            </select>
        </p>
    <?php }?>
    <input type="submit" name="place_order" value="Place Order" <?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderButtonVisible;?>
 /> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCart;?>
">Edit Shopping Cart</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping;?>
">Continue Shopping</a>
</form><?php }
}
