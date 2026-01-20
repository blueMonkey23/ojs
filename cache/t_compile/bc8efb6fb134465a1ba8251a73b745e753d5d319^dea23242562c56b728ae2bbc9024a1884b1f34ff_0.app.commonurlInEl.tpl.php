<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:47
  from 'app:commonurlInEl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e2375b0a4_80538707',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'dea23242562c56b728ae2bbc9024a1884b1f34ff' =>
          [
              0 => 'app:commonurlInEl.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e2375b0a4_80538707(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['inVueEl']->value) {?>
<component is="script">
<?php } else {
    echo '<script'; ?>
>
<?php }?>
	// Initialize JS handler.
	$(function() {
		$('div#<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['inElElId']->value,'javascript' ]);?>
')
			.last()
			.pkpHandler(
				'$.pkp.controllers.UrlInDivHandler',
				{
					sourceUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['json_encode'][0], [ $_smarty_tpl->tpl_vars['inElUrl']->value ]);?>
,
					refreshOn: <?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['json_encode'][0], [ $_smarty_tpl->tpl_vars['refreshOn']->value ]);?>

				}
			);
	});
<?php if ($_smarty_tpl->tpl_vars['inVueEl']->value) {?>
</component>
<?php } else {
    echo '</script'; ?>
>
<?php }?>

<<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
 id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['inElElId']->value ]);?>
"<?php if ($_smarty_tpl->tpl_vars['inElClass']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['inElClass']->value ]);?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['inElPlaceholder']->value;?>
</<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
>
<?php }
    }
