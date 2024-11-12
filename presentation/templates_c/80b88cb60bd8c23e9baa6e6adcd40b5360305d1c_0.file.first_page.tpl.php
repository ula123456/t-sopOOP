<?php
/* Smarty version 4.3.0, created on 2023-01-04 07:28:54
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\first_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b51ca6d76a44_34530985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b88cb60bd8c23e9baa6e6adcd40b5360305d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\first_page.tpl',
      1 => 1672811434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_63b51ca6d76a44_34530985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"first_page",'assign'=>"obj"),$_smarty_tpl);?>

<p class="description">
We hope you have fun developing TShirtShop, the e-commerce store from
Beginning PHP and MySQL E-Commerce: From Novice to Professional!
</p>
<p class="description">
We have the largest collection of t-shirts with postal stamps on Earth!
Browse our departments and cateogories to find your favorite!
</p>
<p>Access the <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">admin page</a>.</p>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
