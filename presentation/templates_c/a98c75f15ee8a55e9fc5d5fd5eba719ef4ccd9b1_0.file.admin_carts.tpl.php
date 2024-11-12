<?php
/* Smarty version 4.3.0, created on 2023-01-05 16:50:23
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\admin_carts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b6f1bfe195a5_46861261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98c75f15ee8a55e9fc5d5fd5eba719ef4ccd9b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\admin_carts.tpl',
      1 => 1672933379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b6f1bfe195a5_46861261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_carts",'assign'=>"obj"),$_smarty_tpl);?>

<form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartsAdmin;?>
" method="post">
    <h3>Admin users&#039; shopping carts:</h3>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mMessage) {?><p><?php echo $_smarty_tpl->tpl_vars['obj']->value->mMessage;?>
</p><?php }?>
    <p>
        Select carts:
        <?php echo smarty_function_html_options(array('name'=>"days",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mDaysOptions,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mSelectedDaysNumber),$_smarty_tpl);?>

        <input type="submit" name="submit_count" value="Count Old Shopping Carts" />
        <input type="submit" name="submit_delete" value="Delete Old Shopping Carts" />
    </p>
</form><?php }
}
