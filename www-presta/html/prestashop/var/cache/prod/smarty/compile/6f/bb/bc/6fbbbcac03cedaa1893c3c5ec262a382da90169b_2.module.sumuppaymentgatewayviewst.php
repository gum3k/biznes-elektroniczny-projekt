<?php
/* Smarty version 3.1.48, created on 2024-11-30 21:01:14
  from 'module:sumuppaymentgatewayviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b6f0a2aae68_69711529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbbbcac03cedaa1893c3c5ec262a382da90169b' => 
    array (
      0 => 'module:sumuppaymentgatewayviewst',
      1 => 1732996600,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b6f0a2aae68_69711529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentControllerLink']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="sumPaymentForm"></form>


<?php if ($_smarty_tpl->tpl_vars['popup']->value == 1) {?>
    <div class="sumup-module-wrap">
        <div class="sumup-content">
            <span class="close-sumup-content">×</span>
           <div style="padding-top: 20px">
               <div id="sumup-card"></div>
           </div>
        </div>
    </div>
    <div class="loading sumup_loading" style="display: none">
        <div class="loading-wheel"></div>
    </div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://gateway.sumup.com/gateway/ecom/card/v2/sdk.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var checkoutId = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['checkoutId']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        var locale = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['locale']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        var zip_code = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['zip_code']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        var paymentCurrency = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentCurrency']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        var paymentAmount = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentAmount']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        var paymentControllerLink  = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentControllerLink']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        $(document).ready(function () {
            mountSumupCard(checkoutId, paymentControllerLink, locale, paymentCurrency, paymentAmount, zip_code);

            $('#sumPaymentForm').on('submit', function (e) {
                e.preventDefault();
                toggleSumupModal();
            });
        })
    <?php echo '</script'; ?>
>
<?php }
}
}
