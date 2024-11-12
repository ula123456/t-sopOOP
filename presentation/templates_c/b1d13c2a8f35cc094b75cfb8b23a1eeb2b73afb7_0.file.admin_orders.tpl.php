<?php
/* Smarty version 4.3.0, created on 2023-01-10 11:28:19
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\admin_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bd3dc3d9fef9_03114009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d13c2a8f35cc094b75cfb8b23a1eeb2b73afb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\admin_orders.tpl',
      1 => 1673345924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd3dc3d9fef9_03114009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_orders",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?>
    <p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p>
<?php }?>
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">
    <input name="Page" type="hidden" value="Orders" />
    <p>
        <font class="bold-text">Show the most recent</font>
        <input name="recordCount" type="number" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mRecordCount;?>
" />
        <font class="bold-text">orders</font>
        <input type="submit" name="submitMostRecent" value="Go" />
    <p>
        <font class="bold-text">Show orders by customer</font>
        <select name="customer_id">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mCustomers) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomers[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCustomers[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_id'] == $_smarty_tpl->tpl_vars['obj']->value->mCustomerId) {?>
                    selected="selected" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomers[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

                </option>
            <?php
}
}
?>
        </select>
        <input type="submit" name="submitByCustomer" value="Go!" />
    </p>
    <p>
        <font class="bold-text">Get by order ID</font>
        <input name="orderId" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderId;?>
" />
        <input type="submit" name="submitByOrderId" value="Go!" />
    </p>
    </p>
    <p>
        <font class="bold-text">Show all records created between</font>
        <input name="startDate" type="datetime-local" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mStartDate;?>
" />
        <font class="bold-text">and</font>
        <input name="endDate" type="datetime-local" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEndDate;?>
" />
        <input type="submit" name="submitBetweenDates" value="Go!" />
    </p>
    <p>
        <font class="bold-text">Show orders by status</font>
        <?php echo smarty_function_html_options(array('name'=>"status",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mOrderStatusOptions,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mSelectedStatus),$_smarty_tpl);?>

        <input type="submit" name="submitOrdersByStatus" value="Go!" />
    </p>
</form>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mOrders) {?>
    <table class="tss-table">
        <tr>
            <th>Order ID</th>
            <th>Date Created</th>
            <th>Date Shipped</th>
            <th>Status</th>
            <th>Customer</th>
            <th>&nbsp;</th>
        </tr>
        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mOrders) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status']);?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['created_on'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shipped_on'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderStatusOptions[$_smarty_tpl->tpl_vars['status']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                <td align="right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrders[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_order_details_admin'];?>
">View Details</a>
                </td>
            </tr>
        <?php
}
}
?>
    </table>
<?php }
}
}
