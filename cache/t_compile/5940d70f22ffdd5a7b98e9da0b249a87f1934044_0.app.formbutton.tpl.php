<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:36
  from 'app:formbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e18a063a7_83575874',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '5940d70f22ffdd5a7b98e9da0b249a87f1934044' =>
          [
              0 => 'app:formbutton.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e18a063a7_83575874(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><button class="pkp_button <?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['FBV_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['FBV_buttonParams']->value;?>
><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
    echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => $_smarty_tpl->tpl_vars['FBV_label']->value],$_smarty_tpl ]);
} else {
    echo $_smarty_tpl->tpl_vars['FBV_label']->value;
}?></button>
<?php }
    }
