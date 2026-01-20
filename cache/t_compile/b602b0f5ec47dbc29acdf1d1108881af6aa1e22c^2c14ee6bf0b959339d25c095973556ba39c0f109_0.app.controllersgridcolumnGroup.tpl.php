<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:39
  from 'app:controllersgridcolumnGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e1ba142f9_59976708',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '2c14ee6bf0b959339d25c095973556ba39c0f109' =>
          [
              0 => 'app:controllersgridcolumnGroup.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e1ba142f9_59976708(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<colgroup>
	<?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
        $_smarty_tpl->tpl_vars['column']->do_else = true;
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
                $_smarty_tpl->tpl_vars['column']->do_else = false;
                ?>
				<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('indent')) {?>
			<?php continue 1;?>
		<?php }?>
		<col class="grid-column column-<?php echo $_smarty_tpl->tpl_vars['column']->value->getId();?>
"
		<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('width')) {?>
			style="width: <?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('width');?>
%;"
		<?php }?> />
	<?php
            }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</colgroup>
<?php }
}
