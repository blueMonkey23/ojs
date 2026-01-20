<?php
/* Smarty version 4.5.5, created on 2026-01-14 10:31:39
  from 'app:controllersgridfeaturefeaturesOptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69670e1b1e5e35_61450623',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '4912f05bbf9193b6e3b34341126ecc3fbe974c23' =>
          [
              0 => 'app:controllersgridfeaturefeaturesOptions.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69670e1b1e5e35_61450623(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>{
	<?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, null, 'features', [
            'last' => true,
            'iteration' => true,
            'total' => true,
        ]);
        $_smarty_tpl->tpl_vars['feature']->do_else = true;
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
                $_smarty_tpl->tpl_vars['feature']->do_else = false;
                $_smarty_tpl->tpl_vars['__smarty_foreach_features']->value['iteration']++;
                $_smarty_tpl->tpl_vars['__smarty_foreach_features']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_features']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_features']->value['total'];
                ?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['json_encode'][0], [ $_smarty_tpl->tpl_vars['feature']->value->getId() ]);?>
: {
			JSClass: <?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['json_encode'][0], [ $_smarty_tpl->tpl_vars['feature']->value->getJSClass() ]);?>
,
			options: {
				<?php
                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value->getOptions(), 'optionValue', false, 'optionName', 'featureOptions', [
                    'last' => true,
                    'iteration' => true,
                    'total' => true,
                ]);
                $_smarty_tpl->tpl_vars['optionValue']->do_else = true;
                if ($_from !== null) {
                    foreach ($_from as $_smarty_tpl->tpl_vars['optionName']->value => $_smarty_tpl->tpl_vars['optionValue']->value) {
                        $_smarty_tpl->tpl_vars['optionValue']->do_else = false;
                        $_smarty_tpl->tpl_vars['__smarty_foreach_featureOptions']->value['iteration']++;
                        $_smarty_tpl->tpl_vars['__smarty_foreach_featureOptions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_featureOptions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_featureOptions']->value['total'];
                        ?>
					<?php echo $_smarty_tpl->tpl_vars['optionName']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['optionValue']->value) {?>'<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['optionValue']->value,'javascript' ]);?>
'<?php } else { ?>false<?php }
if (!($_smarty_tpl->tpl_vars['__smarty_foreach_featureOptions']->value['last'] ?? null)) {?>,<?php }?>
				<?php
                    }
                }
                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			}
		}<?php if (!($_smarty_tpl->tpl_vars['__smarty_foreach_features']->value['last'] ?? null)) {?>,<?php }?>
	<?php
        }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}
<?php }
}
