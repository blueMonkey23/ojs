<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:48
  from 'app:controllersgridpluginspluginGalleryGridFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e24450f24_28374276',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '6bd2369a43ae2b02e9e61c286a4c1873ae7e1037' =>
          [
              0 => 'app:controllersgridpluginspluginGalleryGridFilter.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e24450f24_28374276(Smarty_Internal_Template $_smarty_tpl)
    {
        echo '<script'; ?>
>
	// Attach the form handler to the form.
	$('#pluginGallerySearchForm').pkpHandler('$.pkp.controllers.form.ClientFormHandler',
		{
			trackFormChanges: false
		}
	);
<?php echo '</script'; ?>
>
<form class="pkp_form filter" id="pluginGallerySearchForm" action="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_COMPONENT,'op' => 'fetchGrid'],$_smarty_tpl ]);?>
" method="post">
	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], [ [],$_smarty_tpl ]);?>

	<?php $_block_plugin1 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0] ?? null;
        if (!is_callable($_block_plugin1)) {
            throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormArea', ['id' => 'userSearchFormArea']];
        $_block_repeat = true;
        echo $_block_plugin1(['id' => 'userSearchFormArea'], null, $_smarty_tpl, $_block_repeat);
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
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'select','id' => 'category','from' => $_smarty_tpl->tpl_vars['filterData']->value['categories'],'selected' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['category'],'translate' => false,'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline' => true],$_smarty_tpl ]);?>

			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','id' => 'pluginText','value' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['pluginText'],'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'inline' => true],$_smarty_tpl ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin2([], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], [ ['hideCancel' => true,'submitText' => 'common.search'],$_smarty_tpl ]);?>

	<?php $_block_repeat = false;
            echo $_block_plugin1(['id' => 'userSearchFormArea'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
<?php }
    }
