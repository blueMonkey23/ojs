<?php
/* Smarty version 4.5.5, created on 2026-01-16 09:20:03
  from 'app:useridentityForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_6969a0536efb57_00332829',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '3bf1b442f14e67e78337527a7cdbbdad83306078' =>
          [
              0 => 'app:useridentityForm.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:controllers/notification/inPlaceNotification.tpl' => 1,
         'app:form/orcidProfile.tpl' => 1,
         'app:linkAction/buttonConfirmationLinkAction.tpl' => 1,
     ],
], false)) {
    function content_6969a0536efb57_00332829(Smarty_Internal_Template $_smarty_tpl)
    {
        echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#identityForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');

		$('#deleteOrcidButton').on('click', function(e) {
			const isModalConfirmTrigger = !e.originalEvent;
			// Only execute logic when button was clicked via ButtonConfirmationModalHandler
			if(isModalConfirmTrigger){
				$('#identityForm').append('<input type="checkbox" id="removeOrcidId" name="removeOrcidId"  checked value="true"/>');
				$('#identityForm').submit();
				$('#removeOrcidId').remove();
			}
		});

		$(function() {
			$('input[name="preferredAvatarInitials"]').on('keyup', function() {
				const capitalizedValue = $(this).val().toUpperCase().trim();
				$(this).val(capitalizedValue);
			});
			});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="identityForm" method="post" action="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['op' => 'saveIdentity'],$_smarty_tpl ]);?>
" enctype="multipart/form-data">
	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], [ [],$_smarty_tpl ]);?>


	<?php $_smarty_tpl->_subTemplateRender('app:controllers/notification/inPlaceNotification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['notificationId' => 'identityFormNotification'], 0, false);
        ?>

	<?php $_block_plugin1 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0] ?? null;
        if (!is_callable($_block_plugin1)) {
            throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormArea', ['id' => 'userNameInfo']];
        $_block_repeat = true;
        echo $_block_plugin1(['id' => 'userNameInfo'], null, $_smarty_tpl, $_block_repeat);
        while ($_block_repeat) {
            ob_start();?>
		<?php $_block_plugin2 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
            if (!is_callable($_block_plugin2)) {
                throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
            }
            $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', ['title' => 'user.username']];
            $_block_repeat = true;
            echo $_block_plugin2(['title' => 'user.username'], null, $_smarty_tpl, $_block_repeat);
            while ($_block_repeat) {
                ob_start();?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['username']->value ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin2(['title' => 'user.username'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat = false;
            echo $_block_plugin1(['id' => 'userNameInfo'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin3 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0] ?? null;
        if (!is_callable($_block_plugin3)) {
            throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormArea', ['id' => 'userFormCompactLeft']];
        $_block_repeat = true;
        echo $_block_plugin3(['id' => 'userFormCompactLeft'], null, $_smarty_tpl, $_block_repeat);
        while ($_block_repeat) {
            ob_start();?>
		<?php $_block_plugin4 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
            if (!is_callable($_block_plugin4)) {
                throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
            }
            $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', ['title' => 'user.name']];
            $_block_repeat = true;
            echo $_block_plugin4(['title' => 'user.name'], null, $_smarty_tpl, $_block_repeat);
            while ($_block_repeat) {
                ob_start();?>
			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','label' => 'user.givenName','multilingual' => 'true','required' => 'true','id' => 'givenName','value' => $_smarty_tpl->tpl_vars['givenName']->value,'maxlength' => '255','inline' => true,'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']],$_smarty_tpl ]);?>

			<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','label' => 'user.familyName','multilingual' => 'true','id' => 'familyName','value' => $_smarty_tpl->tpl_vars['familyName']->value,'maxlength' => '255','inline' => true,'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'onkeyup' => 'this.value = this.value.toUpperCase();'],$_smarty_tpl ]);?>

		<?php $_block_repeat = false;
                echo $_block_plugin4(['title' => 'user.name'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
            }
            array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat = false;
            echo $_block_plugin3(['id' => 'userFormCompactLeft'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin5 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
        if (!is_callable($_block_plugin5)) {
            throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', ['for' => 'preferredPublicName','description' => 'user.preferredPublicName.description']];
        $_block_repeat = true;
        echo $_block_plugin5(['for' => 'preferredPublicName','description' => 'user.preferredPublicName.description'], null, $_smarty_tpl, $_block_repeat);
        while ($_block_repeat) {
            ob_start();?>
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','label' => 'user.preferredPublicName','multilingual' => 'true','name' => 'preferredPublicName','id' => 'preferredPublicName','value' => $_smarty_tpl->tpl_vars['preferredPublicName']->value,'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']],$_smarty_tpl ]);?>

	<?php $_block_repeat = false;
            echo $_block_plugin5(['for' => 'preferredPublicName','description' => 'user.preferredPublicName.description'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


	<?php $_block_plugin6 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
        if (!is_callable($_block_plugin6)) {
            throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
        }
        $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', ['for' => 'preferredAvatarInitials','description' => 'user.preferredAvatarInitials.description']];
        $_block_repeat = true;
        echo $_block_plugin6(['for' => 'preferredAvatarInitials','description' => 'user.preferredAvatarInitials.description'], null, $_smarty_tpl, $_block_repeat);
        while ($_block_repeat) {
            ob_start();?>
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','label' => 'user.preferredAvatarInitials','name' => 'preferredAvatarInitials','maxlength' => '2','id' => 'preferredAvatarInitials','value' => $_smarty_tpl->tpl_vars['preferredAvatarInitials']->value,'size' => $_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']],$_smarty_tpl ]);?>

	<?php $_block_repeat = false;
            echo $_block_plugin6(['for' => 'preferredAvatarInitials','description' => 'user.preferredAvatarInitials.description'], ob_get_clean(), $_smarty_tpl, $_block_repeat);
        }
        array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['orcidEnabled']->value) {?>

	<div class="orcid_container">
				<?php $_block_plugin7 = $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0] ?? null;
	    if (!is_callable($_block_plugin7)) {
	        throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
	    }
	    $_smarty_tpl->smarty->_cache['_tag_stack'][] = ['fbvFormSection', []];
	    $_block_repeat = true;
	    echo $_block_plugin7([], null, $_smarty_tpl, $_block_repeat);
	    while ($_block_repeat) {
	        ob_start();?>
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], [ ['type' => 'text','label' => 'user.orcid','name' => 'orcid','id' => 'orcid','value' => $_smarty_tpl->tpl_vars['orcid']->value,'maxlength' => '46'],$_smarty_tpl ]);?>


		<?php $_smarty_tpl->_subTemplateRender('app:form/orcidProfile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, [], 0, false);
	        ?>
		<?php if ($_smarty_tpl->tpl_vars['orcid']->value && $_smarty_tpl->tpl_vars['orcidAuthenticated']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender('app:linkAction/buttonConfirmationLinkAction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['modalStyle' => 'negative','buttonSelector' => '#deleteOrcidButton','dialogText' => 'orcid.field.deleteOrcidModal.message'], 0, false);
		    ?>
			<button id="deleteOrcidButton" type="button"  class="pkp_button pkp_button_offset" style="margin-left: 1rem"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.delete'],$_smarty_tpl ]);?>
</button>
		<?php }?>
		<?php $_block_repeat = false;
	        echo $_block_plugin7([], ob_get_clean(), $_smarty_tpl, $_block_repeat);
	    }
	    array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>
		<style>
			.orcid_container> .section {
				display:flex;
			}
		</style>
	<?php }?>

	<p>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'privacyUrl', null);
        echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_PAGE,'page' => 'about','op' => 'privacy'],$_smarty_tpl ]);
        $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'user.privacyLink','privacyUrl' => $_smarty_tpl->tpl_vars['privacyUrl']->value],$_smarty_tpl ]);?>

	</p>

	<p><span class="formRequired"><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'common.requiredField'],$_smarty_tpl ]);?>
</span></p>

	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], [ ['hideCancel' => true,'submitText' => 'common.save'],$_smarty_tpl ]);?>

</form>
<?php }
    }
