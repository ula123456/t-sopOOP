<?php
/* Smarty version 4.3.0, created on 2023-01-04 11:51:58
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\admin_attribute_values.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b55a4eca0734_45487462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90943616a3d569d98435b6ecd75de18e59e15e72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\admin_attribute_values.tpl',
      1 => 1672827750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b55a4eca0734_45487462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_attribute_values",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributeValuesAdmin;?>
">
    <h3>
        Editing values for attribute: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeName;?>
 [
        <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">back to attributes ...</a> ]
    </h3>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mAttributeValuesCount == 0) {?>
        <p class="no-items-found">There are no values for this attribute!</p>
    <?php } else { ?>
        <table class="tss-table">
            <tr>
                <th>Attribute Value</th>
                <th width="170">&nbsp;</th>
            </tr>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mAttributeValues) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditItem == $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id']) {?>
                    <tr>
                        <td>
                            <input type="text" name="value" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
" size="30" />
                        </td>
                        <td>
                            <input type="submit" name="submit_update_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
                                value="Update" />
                            <input type="submit" name="cancel" value="Cancel" />
                            <input type="submit" name="submit_delete_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
                                value="Delete" />
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
</td>
                        <td>
                            <input type="submit" name="submit_edit_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
                                value="Edit" />
                            <input type="submit" name="submit_delete_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
                                value="Delete" />
                        </td>
                    </tr>
                <?php }?>
            <?php
}
}
?>
        </table>
    <?php }?><h3>Add new attribute value:</h3>
    <input type="text" name="attribute_value" value="[value]" size="30" />
    <input type="submit" name="submit_add_val_0" value="Add" />
</form><?php }
}
