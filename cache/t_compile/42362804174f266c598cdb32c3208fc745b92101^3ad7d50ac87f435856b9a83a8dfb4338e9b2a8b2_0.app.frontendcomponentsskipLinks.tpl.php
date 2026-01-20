<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:53
  from 'app:frontendcomponentsskipLinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_6967450183a097_68472118',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '3ad7d50ac87f435856b9a83a8dfb4338e9b2a8b2' =>
          [
              0 => 'app:frontendcomponentsskipLinks.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_6967450183a097_68472118(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
 <nav class="cmp_skip_to_content" aria-label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.description'],$_smarty_tpl ]);?>
">
	<a href="#pkp_content_main"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.main'],$_smarty_tpl ]);?>
</a>
	<a href="#siteNav"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.nav'],$_smarty_tpl ]);?>
</a>
	<?php if (!$_smarty_tpl->tpl_vars['requestedPage']->value || $_smarty_tpl->tpl_vars['requestedPage']->value === 'index') {?>
		<?php if ($_smarty_tpl->tpl_vars['activeTheme']->value && $_smarty_tpl->tpl_vars['activeTheme']->value->getOption('showDescriptionInJournalIndex')) {?>
			<a href="#homepageAbout"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.about'],$_smarty_tpl ]);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && call_user_func_array($_smarty_tpl->registered_plugins['modifier']['count'][0], [ $_smarty_tpl->tpl_vars['announcements']->value ])) {?>
			<a href="#homepageAnnouncements"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.announcements'],$_smarty_tpl ]);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
			<a href="#homepageIssue"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.issue'],$_smarty_tpl ]);?>
</a>
		<?php }?>
	<?php }?>
	<a href="#pkp_content_footer"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.skip.footer'],$_smarty_tpl ]);?>
</a>
</nav>
<?php }
    }
