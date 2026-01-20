<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:51
  from 'app:controllersgridtaskstask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_696744ffeeb8b2_76204341',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '642608917fb21577c3f7235b556979f3e7c86b25' =>
          [
              0 => 'app:controllersgridtaskstask.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_696744ffeeb8b2_76204341(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><div class="task<?php if (!$_smarty_tpl->tpl_vars['notification']->value->dateRead) {?> unread<?php }?>">
	<span class="message">
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</span>
	<div class="details">
		<?php if ($_smarty_tpl->tpl_vars['isMultiContext']->value && $_smarty_tpl->tpl_vars['context']->value) {?>
			<span class="acronym">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['context']->value->getLocalizedAcronym() ]);?>

			</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['notificationObjectTitle']->value && $_smarty_tpl->tpl_vars['notificationObjectTitle']->value !== '—') {?>
			<span class="submission">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['notificationObjectTitle']->value ]);?>

			</span>
		<?php }?>
	</div>
</div>
<?php }
    }
