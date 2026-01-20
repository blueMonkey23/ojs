<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:39
  from 'app:controllersgridgridActionsAbove.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e1b5245d2_70278447',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '804cb53fa097bffc813cde4d940e17151d6a7701' =>
          [
              0 => 'app:controllersgridgridActionsAbove.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:linkAction/linkAction.tpl' => 1,
     ],
], false)) {
    function content_69670e1b5245d2_70278447(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<ul class="actions">
	<?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
        $_smarty_tpl->tpl_vars['action']->do_else = true;
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
                $_smarty_tpl->tpl_vars['action']->do_else = false;
                ?>
		<li>
			<?php $_smarty_tpl->_subTemplateRender('app:linkAction/linkAction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['action' => $_smarty_tpl->tpl_vars['action']->value,'contextId' => $_smarty_tpl->tpl_vars['gridId']->value], 0, true);
                ?>
		</li>
	<?php
            }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
