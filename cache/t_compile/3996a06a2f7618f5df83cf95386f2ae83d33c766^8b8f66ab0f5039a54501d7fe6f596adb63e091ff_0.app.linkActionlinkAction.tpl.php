<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:38
  from 'app:linkActionlinkAction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e1a4eb6d6_32022085',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '8b8f66ab0f5039a54501d7fe6f596adb63e091ff' =>
          [
              0 => 'app:linkActionlinkAction.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:linkAction/linkActionButton.tpl' => 1,
         'app:linkAction/linkActionOptions.tpl' => 1,
     ],
], false)) {
    function content_69670e1a4eb6d6_32022085(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['contextId']->value) {?>
	<?php $_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['contextId']->value,'-',$_smarty_tpl->tpl_vars['action']->value->getId(),'-button' ]));
        } else { ?>
	<?php $_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['action']->value->getId(),'-button' ]));
        }?>

<?php $_smarty_tpl->_assignInScope('buttonId', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['uniqid'][0], [ call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['staticId']->value,'-' ]) ]));
        $_smarty_tpl->_subTemplateRender('app:linkAction/linkActionButton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['action' => $_smarty_tpl->tpl_vars['action']->value,'buttonId' => $_smarty_tpl->tpl_vars['buttonId']->value,'anyhtml' => $_smarty_tpl->tpl_vars['anyhtml']->value,'html' => $_smarty_tpl->tpl_vars['html']->value], 0, false);
        ?>

<?php echo '<script'; ?>
>
		$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['buttonId']->value,'jqselector' ]);?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl->_subTemplateRender('app:linkAction/linkActionOptions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['action' => $_smarty_tpl->tpl_vars['action']->value,'selfActivate' => $_smarty_tpl->tpl_vars['selfActivate']->value,'staticId' => $_smarty_tpl->tpl_vars['staticId']->value], 0, false);
        ?>
			);
	});
<?php echo '</script'; ?>
>
<?php }
    }
