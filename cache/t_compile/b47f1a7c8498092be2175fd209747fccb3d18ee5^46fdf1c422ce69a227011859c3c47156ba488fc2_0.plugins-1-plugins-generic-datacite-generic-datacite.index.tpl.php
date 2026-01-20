<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:50:32
  from 'plugins-1-plugins-generic-datacite-generic-datacite:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674ac8a7c723_38365994',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '46fdf1c422ce69a227011859c3c47156ba488fc2' =>
          [
              0 => 'plugins-1-plugins-generic-datacite-generic-datacite:index.tpl',
              1 => 1766649532,
              2 => 'plugins-1-plugins-generic-datacite-generic-datacite',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69674ac8a7c723_38365994(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


<?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14752424969674ac8a75bf1_09823670', 'page');
        ?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/backend.tpl');
    }
    /* {block "page"} */
    class Block_14752424969674ac8a75bf1_09823670 extends Smarty_Internal_Block
    {
        public $subBlocks = [
            'page' =>
             [
                 0 => 'Block_14752424969674ac8a75bf1_09823670',
             ],
        ];
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

	<h1 class="app__pageHeading">
		<?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>

	</h1>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'doiManagementUrl', null);
            echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['page' => 'dois'],$_smarty_tpl ]);
            $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'doiSettingsUrl', null);
            echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['page' => 'management','op' => 'settings','path' => 'distribution','anchor' => 'dois'],$_smarty_tpl ]);
            $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<notification type="warning"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'manager.dois.settings.relocated','doiManagementUrl' => $_smarty_tpl->tpl_vars['doiManagementUrl']->value,'doiSettingsUrl' => $_smarty_tpl->tpl_vars['doiSettingsUrl']->value],$_smarty_tpl ]);?>
</notification>
<?php
        }
    }
/* {/block "page"} */
}
