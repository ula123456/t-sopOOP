<?php
/* Smarty version 4.3.0, created on 2023-01-03 11:00:55
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b3fcd757a9d8_08522892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a7168fea49188be474622274710f0ab38167ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\search_box.tpl',
      1 => 1672739705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b3fcd757a9d8_08522892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"search_box",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
    <p class="box-title">Search the Catalog</p>
    <form class="search_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToSearch;?>
">
        <p>
            <input maxlength="100" id="search_string" name="search_string" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSearchString;?>
" size="19" />
            <input type="submit" value="Go!" /><br />
        </p>
        <p>
            <input type="checkbox" id="all_words" name="all_words" <?php if ($_smarty_tpl->tpl_vars['obj']->value->mAllWords == "on") {?> checked="checked"
                <?php }?> />
            Search for all words
        </p>
    </form>
</div>
<?php }
}
