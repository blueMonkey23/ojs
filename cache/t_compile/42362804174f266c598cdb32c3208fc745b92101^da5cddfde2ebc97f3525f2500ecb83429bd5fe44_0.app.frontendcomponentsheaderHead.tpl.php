<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:53
  from 'app:frontendcomponentsheaderHead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_696745016eaee5_36509828',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'da5cddfde2ebc97f3525f2500ecb83429bd5fe44' =>
          [
              0 => 'app:frontendcomponentsheaderHead.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_696745016eaee5_36509828(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><head>
	<meta charset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['defaultCharset']->value ]);?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['pageTitleTranslated']->value);?>

				<?php if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['requestedPage']->value ]) ?? null) === null || $tmp === '' ? 'index' ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>
			| <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>

		<?php }?>
	</title>

	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], [ ['context' => 'frontend'],$_smarty_tpl ]);?>

	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], [ ['context' => 'frontend'],$_smarty_tpl ]);?>

</head>
<?php }
    }
