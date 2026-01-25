{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *
 * @hook Templates::Index::journal []
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div class="page_index_journal">

	{* Hero Section *}
	{if $activeTheme && !$activeTheme->getOption('useHomepageImageAsHeader') && $homepageImage}
		<section class="hero-section">
			<div class="hero-image-wrapper">
				<img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" 
					{if $homepageImage.altText} alt="{$homepageImage.altText|escape}"{/if}
					 class="hero-image">
				<div class="hero-overlay">
					<div class="hero-content">
						<h1 class="hero-title">{$currentJournal->getLocalizedName()|escape}</h1>
						{if $currentJournal->getLocalizedData('description')}
							<p class="hero-description">{$currentJournal->getLocalizedData('description')|strip_tags|truncate:200}</p>
						{/if}
					</div>
				</div>
			</div>
		</section>
	{/if}

	{call_hook name="Templates::Index::journal"}

	{if $highlights->count()}
		<section class="highlights-section">
			<div class="container">
				<h2 class="section-title">{translate key="plugins.generic.highlight.title"}</h2>
				{include file="frontend/components/highlights.tpl" highlights=$highlights}
			</div>
		</section>
	{/if}

	{* Journal Description *}
	{if $activeTheme && $activeTheme->getOption('showDescriptionInJournalIndex')}
		<section class="homepage_about">
			<div class="container">
				<a id="homepageAbout"></a>
				<div class="about-content">
					<h2 class="section-title">{translate key="about.aboutContext"}</h2>
					<div class="about-description">
						{$currentContext->getLocalizedData('description')}
					</div>
				</div>
			</div>
		</section>
	{/if}

	{* Announcements Section *}
	<div class="announcements-wrapper">
		<div class="container">
			{include file="frontend/objects/announcements_list.tpl" numAnnouncements=$numAnnouncementsHomepage}
		</div>
	</div>

	{* Latest issue *}
	{if $issue}
		<section class="current_issue">
			<div class="container">
				<a id="homepageIssue"></a>
				<div class="current-issue-header">
					<h2 class="section-title">
						<span class="issue-badge">New</span>
						{translate key="journal.currentIssue"}
					</h2>
					<div class="current_issue_title">
						{$issue->getIssueIdentification()|escape}
					</div>
				</div>
				<div class="issue-content">
					{include file="frontend/objects/issue_toc.tpl" heading="h3"}
				</div>
				<div class="text-center">
					<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="issue" op="archive"}" class="btn btn-primary read_more">
						{translate key="journal.viewAllIssues"}
						<span class="arrow">→</span>
					</a>
				</div>
			</div>
		</section>
	{/if}

	{* Additional Homepage Content *}
	{if $additionalHomeContent}
		<section class="additional_content">
			<div class="container">
				<div class="additional-content-wrapper">
					{$additionalHomeContent}
				</div>
			</div>
		</section>
	{/if}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
