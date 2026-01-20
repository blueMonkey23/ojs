<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:27:22
  from 'app:linkActionbuttonGenericLinkAction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_6967455a4aab28_55319380',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '48aefe358abe19ab5f30987fe6c0d9e634657e38' =>
          [
              0 => 'app:linkActionbuttonGenericLinkAction.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:linkAction/linkActionOptions.tpl' => 1,
     ],
], false)) {
    function content_6967455a4aab28_55319380(Smarty_Internal_Template $_smarty_tpl)
    {
        echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['buttonSelector']->value,'jsid' ]);?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl->_subTemplateRender('app:linkAction/linkActionOptions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['action' => $_smarty_tpl->tpl_vars['action']->value], 0, false);
        ?>);
	});
<?php echo '</script'; ?>
>
<?php }
    }
