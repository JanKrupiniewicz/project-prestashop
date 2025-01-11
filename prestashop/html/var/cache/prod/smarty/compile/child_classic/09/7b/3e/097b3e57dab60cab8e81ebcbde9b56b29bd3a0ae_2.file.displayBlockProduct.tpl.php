<?php
/* Smarty version 3.1.47, created on 2024-12-10 23:19:28
  from '/var/www/html/themes/child_classic/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6758be7001a124_97924335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '097b3e57dab60cab8e81ebcbde9b56b29bd3a0ae' => 
    array (
      0 => '/var/www/html/themes/child_classic/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl',
      1 => 1733859764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6758be7001a124_97924335 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['elements']->value) {?>
    <div id="block-reassurance">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                <li><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value['text'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
"/> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
