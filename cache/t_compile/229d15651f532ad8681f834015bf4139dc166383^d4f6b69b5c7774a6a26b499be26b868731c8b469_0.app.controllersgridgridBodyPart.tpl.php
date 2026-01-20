<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:48
  from 'app:controllersgridgridBodyPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e2459f451_84250058',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'd4f6b69b5c7774a6a26b499be26b868731c8b469' =>
          [
              0 => 'app:controllersgridgridBodyPart.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e2459f451_84250058(Smarty_Internal_Template $_smarty_tpl)
    {
        ?><tbody>
	<?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
        $_smarty_tpl->tpl_vars['row']->do_else = true;
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
                $_smarty_tpl->tpl_vars['row']->do_else = false;
                ?>
		<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

	<?php
            }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr></tr>
</tbody>

<?php }
}
