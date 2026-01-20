<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:33:10
  from 'app:managementcontext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e761974f3_23436330',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '40904e1188cd43a9d1a1b6c8600463d2d9ed96bd' =>
          [
              0 => 'app:managementcontext.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e761974f3_23436330(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


<?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98310631269670e76188812_70706230', 'page');
        ?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/backend.tpl');
    }
    /* {block "page"} */
    class Block_98310631269670e76188812_70706230 extends Smarty_Internal_Block
    {
        public $subBlocks = [
            'page' =>
             [
                 0 => 'Block_98310631269670e76188812_70706230',
             ],
        ];
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.setup'],$_smarty_tpl ]);?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
		<notification>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'site.upgradeAvailable.manager','currentVersion' => $_smarty_tpl->tpl_vars['currentVersion']->value,'latestVersion' => $_smarty_tpl->tpl_vars['latestVersion']->value,'siteAdminName' => $_smarty_tpl->tpl_vars['siteAdmin']->value->getFullName(),'siteAdminEmail' => $_smarty_tpl->tpl_vars['siteAdmin']->value->getEmail()],$_smarty_tpl ]);?>

		</notification>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getData('disableSubmissions')) {?>
		<notification>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.setup.disableSubmissions.notAccepting'],$_smarty_tpl ]);?>

		</notification>
	<?php }?>

	<tabs :track-history="true">
		<tab id="masthead" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.setup.masthead'],$_smarty_tpl ]);?>
">
			<pkp-form
				v-bind="components.<?php echo PKP\components\forms\context\PKPMastheadForm::FORM_MASTHEAD;?>
"
				@set="set"
			/>
		</tab>
		<tab id="contact" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'about.contact'],$_smarty_tpl ]);?>
">
			<pkp-form
				v-bind="components.<?php echo PKP\components\forms\context\PKPContactForm::FORM_CONTACT;?>
"
				@set="set"
			/>
		</tab>
		<tab id="sections" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'section.sections'],$_smarty_tpl ]);?>
">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'sectionsGridUrl', null);
            echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_COMPONENT,'component' => 'grid.settings.sections.SectionGridHandler','op' => 'fetchGrid','escape' => false],$_smarty_tpl ]);
            $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], [ ['id' => 'sectionsGridContainer','url' => $_smarty_tpl->tpl_vars['sectionsGridUrl']->value],$_smarty_tpl ]);?>

		</tab>
		<tab id="categories" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'grid.category.categories'],$_smarty_tpl ]);?>
">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'categoriesUrl', null);
            echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_COMPONENT,'component' => 'grid.settings.category.CategoryCategoryGridHandler','op' => 'fetchGrid','escape' => false],$_smarty_tpl ]);
            $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], [ ['id' => 'categoriesContainer','url' => $_smarty_tpl->tpl_vars['categoriesUrl']->value],$_smarty_tpl ]);?>

		</tab>
	</tabs>
<?php
        }
    }
/* {/block "page"} */
}
