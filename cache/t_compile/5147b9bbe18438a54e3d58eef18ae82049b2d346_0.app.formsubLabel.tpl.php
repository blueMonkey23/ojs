<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:50:23
  from 'app:formsubLabel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674abf3c3e32_02549127',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '5147b9bbe18438a54e3d58eef18ae82049b2d346' =>
          [
              0 => 'app:formsubLabel.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69674abf3c3e32_02549127(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['FBV_uniqId']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value) {?>
		<?php $_smarty_tpl->_assignInScope('forElement', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['FBV_id']->value,'-',$_smarty_tpl->tpl_vars['formLocale']->value,'-',$_smarty_tpl->tpl_vars['FBV_uniqId']->value ]));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('forElement', call_user_func_array($_smarty_tpl->registered_plugins['modifier']['concat'][0], [ $_smarty_tpl->tpl_vars['FBV_id']->value,'-',$_smarty_tpl->tpl_vars['FBV_uniqId']->value ]));?>
	<?php }
	} else { ?>
	<?php $_smarty_tpl->_assignInScope('forElement', $_smarty_tpl->tpl_vars['FBV_id']->value);
	}?>
<label class="sub_label<?php if ($_smarty_tpl->tpl_vars['FBV_error']->value) {?> error<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['FBV_suppressId']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['forElement']->value ]);?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['FBV_subLabelTranslate']->value) {
	    echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['FBV_label']->value ])],$_smarty_tpl ]);
	} else {
	    echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['FBV_label']->value ]);
	}
        if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?>
</label>
<?php }
    }
