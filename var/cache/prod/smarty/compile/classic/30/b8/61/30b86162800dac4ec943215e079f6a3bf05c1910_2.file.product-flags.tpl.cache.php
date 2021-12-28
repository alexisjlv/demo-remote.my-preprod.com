<?php
/* Smarty version 3.1.39, created on 2021-12-28 15:39:30
  from '/home/sc4joal1816/demo-remote.my-preprod.com/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61cb21a20fd805_51978075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b86162800dac4ec943215e079f6a3bf05c1910' => 
    array (
      0 => '/home/sc4joal1816/demo-remote.my-preprod.com/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1638864897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cb21a20fd805_51978075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '142065568061cb21a20faf14_82537514';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207944698161cb21a20fb829_15739106', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_207944698161cb21a20fb829_15739106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_207944698161cb21a20fb829_15739106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
