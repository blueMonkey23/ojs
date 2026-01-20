<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:32:40
  from 'app:managementadditionalDistributionTabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e586757a2_41536411',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '8301664a04f41a920fd15201c977c4f30aeafc09' =>
          [
              0 => 'app:managementadditionalDistributionTabs.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e586757a2_41536411(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<tab id="access" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.distribution.access'],$_smarty_tpl ]);?>
">
	<pkp-form
		v-bind="components.<?php echo APP\components\forms\context\AccessForm::FORM_ACCESS;?>
"
		@set="set"
	/>
</tab>
<tab id="archive" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.website.archiving'],$_smarty_tpl ]);?>
">
	<tabs :is-side-tabs="true" :track-history="true">
		<tab id="pln" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.setup.plnPluginArchiving'],$_smarty_tpl ]);?>
">
			<pkp-form
				v-bind="components.archivePn"
				@set="set"
			/>
		</tab>
		<tab id="lockss" label="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.setup.otherLockss'],$_smarty_tpl ]);?>
">
			<pkp-form
				v-bind="components.<?php echo APP\components\forms\context\ArchivingLockssForm::FORM_ARCHIVING_LOCKSS;?>
"
				@set="set"
			/>
		</tab>
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], [ ['name' => 'Template::Settings::distribution::archiving'],$_smarty_tpl ]);?>

	</tabs>
</tab>
<?php }
    }
