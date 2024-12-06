<?php
/* Smarty version 3.1.48, created on 2024-11-30 21:58:52
  from 'module:psemailalertsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b7c8cda7a46_80620749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70f1148674812fc2b12ef98cae998f807e5133a' => 
    array (
      0 => 'module:psemailalertsviewstemplat',
      1 => 1732991817,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_emailalerts/views/templates/front/mailalerts-account-line.tpl' => 1,
  ),
),false)) {
function content_674b7c8cda7a46_80620749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399094348674b7c8cda3c53_21516996', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718518965674b7c8cda4c70_94918117', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_399094348674b7c8cda3c53_21516996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_399094348674b7c8cda3c53_21516996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_718518965674b7c8cda4c70_94918117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_718518965674b7c8cda4c70_94918117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailAlerts']->value, 'mailAlert');
$_smarty_tpl->tpl_vars['mailAlert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->value) {
$_smarty_tpl->tpl_vars['mailAlert']->do_else = false;
?>
        <li class="p-1 m-1" style="display:flex;align-items:center;background:white"><?php $_smarty_tpl->_subTemplateRender('module:ps_emailalerts/views/templates/front/mailalerts-account-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mailAlert'=>$_smarty_tpl->tpl_vars['mailAlert']->value), 0, true);
?></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php } else { ?>
    <div class="alert alert-info" role="alert" data-alert="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No mail alerts yet.','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>
</div>
  <?php }
}
}
/* {/block 'page_content'} */
}
