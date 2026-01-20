<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:54
  from 'app:frontendcomponentsnavigationMenusdashboardMenuItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_696745022928c0_15352665',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'e9be0ecfd9cc66bba6b2c896d74703d29644ffc5' =>
          [
              0 => 'app:frontendcomponentsnavigationMenusdashboardMenuItem.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_696745022928c0_15352665(Smarty_Internal_Template $_smarty_tpl)
    {
        echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['navigationMenuItem']->value->getLocalizedTitle() ]);?>

<span class="task_count">
	<?php echo $_smarty_tpl->tpl_vars['unreadNotificationCount']->value;?>

</span>
<?php }
    }
