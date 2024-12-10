<?php
/* Smarty version 3.1.48, created on 2024-11-30 22:02:51
  from '/var/www/html/prestashop/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b7d7b01c9e0_06400612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b0896f343a9841ec45e324d25ffd9802725af3' => 
    array (
      0 => '/var/www/html/prestashop/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1732313113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b7d7b01c9e0_06400612 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
