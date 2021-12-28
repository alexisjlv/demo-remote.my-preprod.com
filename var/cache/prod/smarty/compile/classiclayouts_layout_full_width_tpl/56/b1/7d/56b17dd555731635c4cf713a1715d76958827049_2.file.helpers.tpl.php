<?php
/* Smarty version 3.1.39, created on 2021-12-28 15:39:30
  from '/home/sc4joal1816/demo-remote.my-preprod.com/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61cb21a21a8e56_86457749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b17dd555731635c4cf713a1715d76958827049' => 
    array (
      0 => '/home/sc4joal1816/demo-remote.my-preprod.com/themes/classic/templates/_partials/helpers.tpl',
      1 => 1638864897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cb21a21a8e56_86457749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/sc4joal1816/demo-remote.my-preprod.com/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/56/b1/7d/56b17dd555731635c4cf713a1715d76958827049_2.file.helpers.tpl.php',
    'uid' => '56b17dd555731635c4cf713a1715d76958827049',
    'call_name' => 'smarty_template_function_renderLogo_118007126861cb21a21a5e50_97990329',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_118007126861cb21a21a5e50_97990329 */
if (!function_exists('smarty_template_function_renderLogo_118007126861cb21a21a5e50_97990329')) {
function smarty_template_function_renderLogo_118007126861cb21a21a5e50_97990329(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_118007126861cb21a21a5e50_97990329 */
}
