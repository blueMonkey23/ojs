<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:49
  from 'app:controllersgridgridRowSelectInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_696744fd76a180_74877093',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '9dd405d6cbf63d430a9e4f383c94fd3592a082aa' =>
          [
              0 => 'app:controllersgridgridRowSelectInput.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_696744fd76a180_74877093(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><input type="checkbox" id="select-<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['elementId']->value ]);?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['selectName']->value ]);?>
[]" style="height: 15px; width: 15px;" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['elementId']->value ]);?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> />
<?php }
    }
