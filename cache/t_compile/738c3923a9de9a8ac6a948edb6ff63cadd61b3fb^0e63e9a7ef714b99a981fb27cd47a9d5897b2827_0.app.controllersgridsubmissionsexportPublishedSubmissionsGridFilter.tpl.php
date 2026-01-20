<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:50:23
  from 'app:controllersgridsubmissionsexportPublishedSubmissionsGridFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674abfad75a6_88291742',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '0e63e9a7ef714b99a981fb27cd47a9d5897b2827' =>
          [
              0 => 'app:controllersgridsubmissionsexportPublishedSubmissionsGridFilter.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69674abfad75a6_88291742(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_assignInScope('formId', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'submissionsListFilter-',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ]));
        echo '<script'; ?>
 type="text/javascript">
	// Attach the form handler to the form.
	$('#<?php echo $_smarty_tpl->tpl_vars['formId']->value;?>
').pkpHandler('$.pkp.controllers.form.ClientFormHandler',
		{
			trackFormChanges: false
		}
	);
<?php echo '</script'; ?>
>
<form class="pkp_form filter" id="<?php echo $_smarty_tpl->tpl_vars['formId']->value;?>
" action="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['op' => 'fetchGrid'],$_smarty_tpl ]);?>
" method="post">
	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], [ [],$_smarty_tpl ]);?>

	<?php $_block_plugin1 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0] ?? null;
        if (!is_callable($_block_plugin1)) {
            throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormArea', ['id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'submissionSearchFormArea',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ])]];
        $_block_repeat = true;
        echo $_block_plugin1(['id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'submissionSearchFormArea',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ])], null, $_smarty_tpl, $_block_repeat);
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
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'select','name' => 'column','id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'column',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ]),'from' => $_smarty_tpl->tpl_vars['filterData']->value['columns'],'selected' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['column'],'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'translate' => false,'inline' => 'true'],$_smarty_tpl ]);?>

			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'search','name' => 'search','id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'search',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ]),'value' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['search'],'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline' => 'true'],$_smarty_tpl ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin2([], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
            if (!is_callable($_block_plugin3)) {
                throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
            }
            $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', []];
            $_block_repeat = true;
            echo $_block_plugin3([], null, $_smarty_tpl, $_block_repeat);
            while ($_block_repeat) {
                ob_start();?>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'select','name' => 'issueId','id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'issueId',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ]),'from' => $_smarty_tpl->tpl_vars['filterData']->value['issues'],'selected' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['issueId'],'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'translate' => false,'inline' => 'true'],$_smarty_tpl ]);?>

			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'select','name' => 'statusId','id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'statusId',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ]),'from' => $_smarty_tpl->tpl_vars['filterData']->value['status'],'selected' => $_smarty_tpl->tpl_vars['filterSelectionData']->value['statusId'],'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'translate' => false,'inline' => 'true'],$_smarty_tpl ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin3([], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], [ ['hideCancel' => true,'submitText' => 'common.search'],$_smarty_tpl ]);?>

	<?php $_block_repeat = false;
            echo $_block_plugin1(['id' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'submissionSearchFormArea',$_smarty_tpl->tpl_vars['filterData']->value['gridId'] ])], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
<?php }
    }
