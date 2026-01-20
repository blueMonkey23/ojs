<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:33:12
  from 'app:controllersgridfeaturegridOrderFinishControls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e78172825_42326314',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'ec1a2f9c270ff648fed57fe3935140e3da44e59c' =>
          [
              0 => 'app:controllersgridfeaturegridOrderFinishControls.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e78172825_42326314(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><div class="grid_controls order_finish_controls">
	<a href="#" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['gridId']->value ]);?>
-saveButton" class="saveButton">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.done'],$_smarty_tpl ]);?>

	</a>
	<a href="#" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['gridId']->value ]);?>
-cancel" class="cancelFormButton">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'grid.action.cancelOrdering'],$_smarty_tpl ]);?>

	</a>
</div>
<?php }
    }
