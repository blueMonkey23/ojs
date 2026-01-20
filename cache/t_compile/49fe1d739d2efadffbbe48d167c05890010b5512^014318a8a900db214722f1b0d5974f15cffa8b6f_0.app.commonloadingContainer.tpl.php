<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:47
  from 'app:commonloadingContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e23672619_21319126',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '014318a8a900db214722f1b0d5974f15cffa8b6f' =>
          [
              0 => 'app:commonloadingContainer.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e23672619_21319126(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<div class="pkp_loading">
	<span class="pkp_spinner"></span>
	<span class="message"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.loading'],$_smarty_tpl ]);?>
</span>
</div>
<?php }
    }
