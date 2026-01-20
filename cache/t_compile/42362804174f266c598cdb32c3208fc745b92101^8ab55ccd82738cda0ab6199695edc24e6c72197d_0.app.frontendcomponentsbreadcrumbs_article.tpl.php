<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:54
  from 'app:frontendcomponentsbreadcrumbs_article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_6967450237c9b5_18361656',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '8ab55ccd82738cda0ab6199695edc24e6c72197d' =>
          [
              0 => 'app:frontendcomponentsbreadcrumbs_article.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_6967450237c9b5_18361656(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.breadcrumbLabel'],$_smarty_tpl ]);?>
">
	<ol>
		<li>
			<a href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['page' => 'index','router' => PKP\core\PKPApplication::ROUTE_PAGE],$_smarty_tpl ]);?>
">
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.homepageNavigationLabel'],$_smarty_tpl ]);?>

			</a>
			<span class="separator"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.breadcrumbSeparator'],$_smarty_tpl ]);?>
</span>
		</li>
		<li>
			<a href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_PAGE,'page' => 'issue','op' => 'archive'],$_smarty_tpl ]);?>
">
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.archives'],$_smarty_tpl ]);?>

			</a>
			<span class="separator"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.breadcrumbSeparator'],$_smarty_tpl ]);?>
</span>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
			<li>
				<a href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['page' => 'issue','op' => 'view','path' => $_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()],$_smarty_tpl ]);?>
">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ]);?>

				</a>
				<span class="separator"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.breadcrumbSeparator'],$_smarty_tpl ]);?>
</span>
			</li>
		<?php }?>
		<li class="current" aria-current="page">
			<span aria-current="page">
				<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
					<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => $_smarty_tpl->tpl_vars['currentTitleKey']->value],$_smarty_tpl ]);?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['currentTitle']->value ]);?>

				<?php }?>
			</span>
		</li>
	</ol>
</nav>
<?php }
    }
