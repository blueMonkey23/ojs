<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:54
  from 'app:controllersgridgridActionsBelow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674502101520_06215819',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'df267c1c85b8073ee78f8a0ada089bcd44a12b53' =>
          [
              0 => 'app:controllersgridgridActionsBelow.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:linkAction/linkAction.tpl' => 1,
     ],
], false)) {
    function content_69674502101520_06215819(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<ul class="actions btm">
	<?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value->getActions(PKP\controllers\grid\GridHandler::GRID_ACTION_POSITION_BELOW), 'action');
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
