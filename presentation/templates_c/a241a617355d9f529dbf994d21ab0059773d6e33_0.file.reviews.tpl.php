<?php
/* Smarty version 4.3.0, created on 2023-01-12 10:51:13
  from 'C:\xampp\htdocs\Tshirtshop\presentation\templates\reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bfd811e8e105_22468492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a241a617355d9f529dbf994d21ab0059773d6e33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\templates\\reviews.tpl',
      1 => 1673517068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfd811e8e105_22468492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"reviews",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mTotalReviews != 0) {?>
    <h2>Customer reviews:</h2>
    <ul class="reviews-list">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mReviews) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <li>
                <p>
                    Review by <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->mReviews[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</strong> on
                    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mReviews[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['created_on'];?>

                </p>
                <p><?php echo $_smarty_tpl->tpl_vars['obj']->value->mReviews[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['review'];?>
</p>
                <p>Rating: [<?php echo $_smarty_tpl->tpl_vars['obj']->value->mReviews[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rating'];?>
 of 5]</p>
        </li><?php
}
}
?>
    </ul>
<?php } else { ?>
    <h2>Be the first person to voice your opinion!</h2>
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mEnableAddProductReviewForm) {?>
        <h2>Add a review:</h2>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToProduct;?>
">
        <table class="review-table">
            <tr>
                <td class="add-review">From: <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->mReviewerName;?>
</strong></td>
            </tr>
            <tr>
                <td>
                    <textarea name="review" rows="3" cols="65">[Add your review here]</textarea>
                </td>
            </tr>
            <tr>
                <td class="add-review">
                    <table class="review-table">
                        <tr>
                            <td>
                                Your Rating:
                                <input type="radio" name="rating" value="1" /> 1
                                <input type="radio" name="rating" value="2" /> 2
                                <input type="radio" name="rating" value="3" checked="checked" /> 3
                                <input type="radio" name="rating" value="4" /> 4
                                <input type="radio" name="rating" value="5" /> 5
                            </td>
                            <td align="right">
                                <input type="submit" name="AddProductReview" value="Add review" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else { ?>
    <p>You must log in to add a review.</p>
<?php }
}
}
