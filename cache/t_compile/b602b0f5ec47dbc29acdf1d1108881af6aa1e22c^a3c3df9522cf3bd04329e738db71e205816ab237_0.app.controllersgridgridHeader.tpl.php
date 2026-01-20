<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:39
  from 'app:controllersgridgridHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e1b3b8028_72360818',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'a3c3df9522cf3bd04329e738db71e205816ab237' =>
          [
              0 => 'app:controllersgridgridHeader.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:controllers/grid/gridActionsAbove.tpl' => 1,
     ],
], false)) {
    function content_69670e1b3b8028_72360818(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><div class="header">

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getTitle()) {?>
		<h4>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['translate'][0], [ $_smarty_tpl->tpl_vars['grid']->value->getTitle() ]);?>

		</h4>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions(PKP\controllers\grid\GridHandler::GRID_ACTION_POSITION_ABOVE)) {?>
		<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions(PKP\controllers\grid\GridHandler::GRID_ACTION_POSITION_ABOVE)) {?>
			<?php $_smarty_tpl->_subTemplateRender('app:controllers/grid/gridActionsAbove.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['actions' => $_smarty_tpl->tpl_vars['grid']->value->getActions(PKP\controllers\grid\GridHandler::GRID_ACTION_POSITION_ABOVE),'gridId' => $_smarty_tpl->tpl_vars['staticId']->value], 0, false);
		    ?>
		<?php }?>
	<?php }?>
</div>

<?php echo $_smarty_tpl->tpl_vars['gridFilterForm']->value;?>

<?php }
    }
