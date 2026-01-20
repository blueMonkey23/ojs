<?php
/* Smarty version 4.5.5, created on 2026-01-14 14:25:52
  from 'app:frontendpagesarticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69674500e47351_43396891',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '1c372c95cd85572e0fbc9a53d0323a0b229cfc78' =>
          [
              0 => 'app:frontendpagesarticle.tpl',
              1 => 1766649532,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:frontend/components/header.tpl' => 1,
         'app:frontend/components/breadcrumbs_article.tpl' => 2,
         'app:frontend/objects/article_details.tpl' => 1,
         'app:frontend/components/footer.tpl' => 1,
     ],
], false)) {
    function content_69674500e47351_43396891(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_subTemplateRender('app:frontend/components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['pageTitleTranslated' => call_user_func_array($_smarty_tpl->registered_plugins['modifier']['strip_unsafe_html'][0], [ $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getLocalizedFullTitle(null, 'html') ])], 0, false);
        ?>

<div class="page page_article">
	<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender('app:frontend/components/breadcrumbs_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['currentTitle' => $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle()], 0, false);
	    ?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('app:frontend/components/breadcrumbs_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['currentTitleKey' => 'common.publication'], 0, true);
	    ?>
	<?php }?>

		<?php $_smarty_tpl->_subTemplateRender('app:frontend/objects/article_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, [], 0, false);
        ?>

	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], [ ['name' => 'Templates::Article::Footer::PageFooter'],$_smarty_tpl ]);?>


</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender('app:frontend/components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, [], 0, false);
    }
}
