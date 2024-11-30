<?php
/* Smarty version 3.1.48, created on 2024-11-30 20:56:50
  from '/var/www/html/prestashop/modules/sumuppaymentgateway/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b6e0244ace4_84714792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9d1ed298de5423352bf6f0431f7db20c2e5720' => 
    array (
      0 => '/var/www/html/prestashop/modules/sumuppaymentgateway/views/templates/admin/configure.tpl',
      1 => 1732996600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b6e0244ace4_84714792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
    <h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sumup Online Payments','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</h3>
    <div class="row">
        <div class="col-md-1">
            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logoUrl']->value,'htmlall','UTF-8' ));?>
" alt="SumUp" class="img-responsive">
        </div>
        <div class="col-md-11">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A better way to get paid','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</h2>
            <p style="font-size: 14px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The SumUp card terminal in combination with our App allows small merchants to
                accept card payments, using their smartphones or tablets, in a simple, secure and cost-effective
                way. With this module the SumUp comes to Prestashop!','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</p>
            <p style="font-size: 14px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need more info?','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
 - <a href="https://sumup.com/global/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</a></p>
            <p style="font-size: 14px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not a user?','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
 - <a href="https://me.sumup.com/login"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</a></p>
        </div>
    </div>
</div>
<div class="panel">
    <h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</h3>
    <p>
        &raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can get a PDF documentation to configure this module','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
 :
    <ul>
        <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
documentation/readme_en.pdf" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'English','mod'=>'sumuppaymentgateway'),$_smarty_tpl ) );?>
</a></li>
            </ul>
    </p>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
        <div class="alert alert-danger"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'htmlall','UTF-8' ));?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
    <div class="alert alert-success">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['success']->value,'htmlall','UTF-8' ));?>

    </div>
<?php }
}
}
