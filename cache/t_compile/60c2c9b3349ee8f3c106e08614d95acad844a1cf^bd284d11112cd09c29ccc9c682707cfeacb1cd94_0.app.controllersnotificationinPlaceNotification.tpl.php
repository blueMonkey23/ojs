<?php
/* Smarty version 4.5.5, created on 2026-01-16 09:20:03
  from 'app:controllersnotificationinPlaceNotification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_6969a053bb4866_58515486',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'bd284d11112cd09c29ccc9c682707cfeacb1cd94' =>
          [
              0 => 'app:controllersnotificationinPlaceNotification.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:controllers/notification/notificationOptions.tpl' => 1,
     ],
], false)) {
    function content_6969a053bb4866_58515486(Smarty_Internal_Template $_smarty_tpl)
    {
        echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['notificationId']->value,'javascript' ]);?>
').pkpHandler('$.pkp.controllers.NotificationHandler',
		{
			<?php $_smarty_tpl->_subTemplateRender('app:controllers/notification/notificationOptions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, [], 0, false);
        ?>
		});
	});
<?php echo '</script'; ?>
>
<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['notificationId']->value ]);?>
" class="pkp_notification <?php echo $_smarty_tpl->tpl_vars['notificationStyleClass']->value;?>
"></div>
<?php }
    }
