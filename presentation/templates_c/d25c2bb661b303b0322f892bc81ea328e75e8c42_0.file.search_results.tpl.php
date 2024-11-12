<?php
/* Smarty version 4.3.0, created on 2023-01-03 12:36:41
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b41349a861f0_09781684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd25c2bb661b303b0322f892bc81ea328e75e8c42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\search_results.tpl',
      1 => 1672740280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_63b41349a861f0_09781684 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Search results</h1>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
