<?php
/* Smarty version 4.5.5, created on 2026-01-06 02:53:20
  from 'app:frontendpagesindexJournal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_695c16b01bb595_63915910',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         'e64e579388e5615e11e939b12134d6ae8679eba6' =>
          [
              0 => 'app:frontendpagesindexJournal.tpl',
              1 => 1767642761,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
         'app:frontend/components/header.tpl' => 1,
         'app:frontend/components/highlights.tpl' => 1,
         'app:frontend/objects/announcements_list.tpl' => 1,
         'app:frontend/objects/issue_toc.tpl' => 1,
         'app:frontend/components/footer.tpl' => 1,
     ],
], false)) {
    function content_695c16b01bb595_63915910(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_subTemplateRender('app:frontend/components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['pageTitleTranslated' => $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()], 0, false);
        ?>

<div class="page_index_journal">

		<div class="hou-welcome-banner">
		<div class="hou-banner-content">
			<h1 class="hou-banner-title">Chào mừng đến với Tạp chí Khoa học</h1>
			<p class="hou-banner-subtitle">Đại học Mở Hà Nội - Nơi khởi đầu ước mơ</p>
			<div class="hou-banner-stats">
				<div class="stat-item">
					<span class="stat-number">500+</span>
					<span class="stat-label">Bài báo</span>
				</div>
				<div class="stat-item">
					<span class="stat-number">1000+</span>
					<span class="stat-label">Tác giả</span>
				</div>
				<div class="stat-item">
					<span class="stat-number">50+</span>
					<span class="stat-label">Số phát hành</span>
				</div>
			</div>
		</div>
	</div>

	<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], [ ['name' => 'Templates::Index::journal'],$_smarty_tpl ]);?>


	<?php if ($_smarty_tpl->tpl_vars['highlights']->value->count()) {?>
		<?php $_smarty_tpl->_subTemplateRender('app:frontend/components/highlights.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['highlights' => $_smarty_tpl->tpl_vars['highlights']->value], 0, false);
	    ?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['activeTheme']->value && !$_smarty_tpl->tpl_vars['activeTheme']->value->getOption('useHomepageImageAsHeader') && $_smarty_tpl->tpl_vars['homepageImage']->value) {?>
		<div class="homepage_image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'],'url' ]);?>
"<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value['altText']) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['homepageImage']->value['altText'] ]);?>
"<?php }?>>
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['activeTheme']->value && $_smarty_tpl->tpl_vars['activeTheme']->value->getOption('showDescriptionInJournalIndex')) {?>
		<section class="homepage_about">
			<a id="homepageAbout"></a>
			<h2><?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'about.aboutContext'],$_smarty_tpl ]);?>
</h2>
			<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('description');?>

		</section>
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender('app:frontend/objects/announcements_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['numAnnouncements' => $_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value], 0, false);
        ?>

		<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
		<section class="current_issue">
			<a id="homepageIssue"></a>
			<h2>
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'journal.currentIssue'],$_smarty_tpl ]);?>

			</h2>
			<div class="current_issue_title">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins['modifier']['escape'][0], [ $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ]);?>

			</div>
			<?php $_smarty_tpl->_subTemplateRender('app:frontend/objects/issue_toc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, ['heading' => 'h3'], 0, false);
		    ?>
			<a href="<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], [ ['router' => PKP\core\PKPApplication::ROUTE_PAGE,'page' => 'issue','op' => 'archive'],$_smarty_tpl ]);?>
" class="read_more">
				<?php echo call_user_func_array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], [ ['key' => 'journal.viewAllIssues'],$_smarty_tpl ]);?>

			</a>
		</section>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
		<div class="additional_content">
			<?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>

		</div>
	<?php }?>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender('app:frontend/components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, [], 0, false);
    }
}
