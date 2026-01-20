<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:50:23
  from 'plugins-1-plugins-importexport-doaj-importexport-doaj:settingsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674abf1611a1_09617471',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '267adfbc7b03164b03d4ed5a483597443b725b31' =>
          [
              0 => 'plugins-1-plugins-importexport-doaj-importexport-doaj:settingsForm.tpl',
              1 => 1766649532,
              2 => 'plugins-1-plugins-importexport-doaj-importexport-doaj',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69674abf1611a1_09617471(Smarty_Internal_Template $_smarty_tpl)
    {
        echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#doajSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<div class="semantic-defaults">
<form class="pkp_form" id="doajSettingsForm" method="post" action="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_COMPONENT,'op' => 'manage','plugin' => 'DOAJExportPlugin','category' => 'importexport','verb' => 'save'],$_smarty_tpl ]);?>
">
	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], [ [],$_smarty_tpl ]);?>

	<?php $_block_plugin1 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0] ?? null;
        if (!is_callable($_block_plugin1)) {
            throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormArea', ['id' => 'doajSettingsFormArea']];
        $_block_repeat = true;
        echo $_block_plugin1(['id' => 'doajSettingsFormArea'], null, $_smarty_tpl, $_block_repeat);
        while ($_block_repeat) {
            ob_start();?>
		<?php $_block_plugin2 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
            if (!is_callable($_block_plugin2)) {
                throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
            }
            $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', []];
            $_block_repeat = true;
            echo $_block_plugin2([], null, $_smarty_tpl, $_block_repeat);
            while ($_block_repeat) {
                ob_start();?>
			<p class="pkp_help"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'plugins.importexport.doaj.registrationIntro'],$_smarty_tpl ]);?>
</p>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','id' => 'apiKey','value' => $_smarty_tpl->tpl_vars['apiKey']->value,'label' => 'plugins.importexport.doaj.settings.form.apiKey','maxlength' => '50','size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']],$_smarty_tpl ]);?>

			<span class="instruct"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'plugins.importexport.doaj.settings.form.apiKey.description'],$_smarty_tpl ]);?>
</span><br/>
		<?php $_block_repeat = false;
                echo $_block_plugin2([], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
            if (!is_callable($_block_plugin3)) {
                throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
            }
            $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', ['list' => 'true']];
            $_block_repeat = true;
            echo $_block_plugin3(['list' => 'true'], null, $_smarty_tpl, $_block_repeat);
            while ($_block_repeat) {
                ob_start();?>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'checkbox','id' => 'automaticRegistration','label' => 'plugins.importexport.doaj.settings.form.automaticRegistration.description','checked' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['compare'][0], [ $_smarty_tpl->tpl_vars['automaticRegistration']->value,true ])],$_smarty_tpl ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin3(['list' => 'true'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat = false;
            echo $_block_plugin1(['id' => 'doajSettingsFormArea'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], [ ['submitText' => 'common.save'],$_smarty_tpl ]);?>

	<p><span class="formRequired"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.requiredField'],$_smarty_tpl ]);?>
</span></p>
</form>
</div><?php }
    }
