<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:48
  from 'app:controllersgridlanguageslocaleNameCell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e24424702_50633113',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '10bc12a5a007cede76b0c1742f9748e99dd41f6c' =>
          [
              0 => 'app:controllersgridlanguageslocaleNameCell.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e24424702_50633113(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ 'cell-',$_smarty_tpl->tpl_vars['id']->value ]));
        } else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
        }?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['cellId']->value ]);?>
" <?php }?>class="gridCellContainer">
	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</span>
<?php if ($_smarty_tpl->tpl_vars['incomplete']->value) {?>
	<span class="pkp_form_error">*</span>
<?php }?>


<?php }
    }
