<?php
/* Smarty version 4.3.0, created on 2022-12-31 05:45:06
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\departments_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63afbe52e62081_82602000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfb47be02217a068dee6854a5ba4cd408c9725a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\departments_list.tpl',
      1 => 1672461327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63afbe52e62081_82602000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"departments_list",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
    <p class="box-title">Choose a Department</p>
    <ul>
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mDepartments) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php if (($_smarty_tpl->tpl_vars['obj']->value->mSelectedDepartment == $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'])) {?>
                <?php $_smarty_tpl->_assignInScope('selected', "class=\"selected\"");?>
            <?php }?>
            <li>
                                <a <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_department'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

                </a>
            </li>
        <?php
}
}
?>
    </ul>
</div>
<?php }
}
