<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:50:09
  from 'app:managementtoolsindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674ab1b36fa2_94687818',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '278293d248ef51dbdb97ab3f995f9354dad62c08' =>
          [
              0 => 'app:managementtoolsindex.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69674ab1b36fa2_94687818(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


<?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183523866369674ab1b31860_94891826', 'page');
        ?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/backend.tpl');
    }
    /* {block "page"} */
    class Block_183523866369674ab1b31860_94891826 extends Smarty_Internal_Block
    {
        public $subBlocks = [
            'page' =>
             [
                 0 => 'Block_183523866369674ab1b31860_94891826',
             ],
        ];
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.tools'],$_smarty_tpl ]);?>

	</h1>

	<?php echo '<script'; ?>
 type="text/javascript">
		// Attach the JS file tab handler.
		$(function() {
			$('#managementTabs').pkpHandler('$.pkp.controllers.TabHandler');
		});
	<?php echo '</script'; ?>
>
	<div id="managementTabs" class="pkp_controllers_tab">
		<ul>
			<li><a name="importexport" href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['op' => 'importexport'],$_smarty_tpl ]);?>
"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'navigation.tools.importExport'],$_smarty_tpl ]);?>
</a></li>
			<li><a name="permissions" href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['op' => 'permissions'],$_smarty_tpl ]);?>
"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'settings.libraryFiles.category.permissions'],$_smarty_tpl ]);?>
</a></li>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], [ ['name' => 'Templates::Management::Settings::tools'],$_smarty_tpl ]);?>

		</ul>
	</div>
<?php
        }
    }
/* {/block "page"} */
}
