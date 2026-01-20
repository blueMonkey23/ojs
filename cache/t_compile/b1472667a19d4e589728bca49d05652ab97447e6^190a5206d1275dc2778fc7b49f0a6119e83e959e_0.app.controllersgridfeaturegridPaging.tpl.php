<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:53
  from 'app:controllersgridfeaturegridPaging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_696745014ee7d9_77877016',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '190a5206d1275dc2778fc7b49f0a6119e83e959e' =>
          [
              0 => 'app:controllersgridfeaturegridPaging.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_696745014ee7d9_77877016(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<div class="gridPaging">
	<div class="gridItemsPerPage">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.itemsPerPage'],$_smarty_tpl ]);?>
:<select class="itemsPerPage"></select>
	</div>
	<div class="gridPages">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], [ ['iterator' => $_smarty_tpl->tpl_vars['iterator']->value,'itemsPerPage' => $_smarty_tpl->tpl_vars['currentItemsPerPage']->value],$_smarty_tpl ]);?>

		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], [ ['name' => $_smarty_tpl->tpl_vars['grid']->value->getId(),'iterator' => $_smarty_tpl->tpl_vars['iterator']->value],$_smarty_tpl ]);?>

	</div>
</div>
<?php }
    }
