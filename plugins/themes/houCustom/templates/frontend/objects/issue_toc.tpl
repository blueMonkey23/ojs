{**
 * templates/frontend/objects/issue_toc.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief View of an Issue which displays a full table of contents.
 *
 * @uses $issue Issue The issue
 * @uses $issueTitle string Title of the issue. May be empty
 * @uses $issueSeries string Vol/No/Year string for the issue
 * @uses $issueGalleys array Galleys for the entire issue
 * @uses $hasAccess bool Can this user access galleys for this context?
 * @uses $publishedSubmissions array Lists of articles published in this issue
 *   sorted by section.
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 * @uses $heading string HTML heading element, default: h2
 *}
{if !$heading}
	{assign var="heading" value="h2"}
{/if}
{assign var="articleHeading" value="h3"}
{if $heading == "h3"}
	{assign var="articleHeading" value="h4"}
{elseif $heading == "h4"}
	{assign var="articleHeading" value="h5"}
{elseif $heading == "h5"}
	{assign var="articleHeading" value="h6"}
{/if}
<div class="obj_issue_toc issue-toc-enhanced">

	{* Indicate if this is only a preview *}
	{if !$issue->getPublished()}
		{include file="frontend/components/notification.tpl" type="warning" messageKey="editor.issues.preview"}
	{/if}

	{* Issue introduction area above articles *}
	<div class="heading issue-heading-card">

		<div class="issue-header-wrapper">
			{* Issue cover image *}
			{assign var=issueCover value=$issue->getLocalizedCoverImageUrl()}
			{if $issueCover}
				<div class="cover issue-cover-image">
					{capture assign="defaultAltText"}
						{translate key="issue.viewIssueIdentification" identification=$issue->getIssueIdentification()|escape}
					{/capture}
					<img src="{$issueCover|escape}" alt="{$issue->getLocalizedCoverImageAltText()|escape|default:$defaultAltText}">
				</div>
			{/if}

			<div class="issue-meta-info">
				{* Description *}
				{if $issue->hasDescription()}
					<div class="description issue-description">
						{$issue->getLocalizedDescription()|strip_unsafe_html}
					</div>
				{/if}

				{* PUb IDs (eg - URN) *}
				<div class="pub-ids-wrapper">
					{foreach from=$pubIdPlugins item=pubIdPlugin}
						{assign var=pubId value=$issue->getStoredPubId($pubIdPlugin->getPubIdType())}
						{if $pubId}
							{assign var="resolvingUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
							<div class="pub_id pub-id-item {$pubIdPlugin->getPubIdType()|escape}">
								<span class="type">
									{$pubIdPlugin->getPubIdDisplayType()|escape}:
								</span>
								<span class="id">
									{if $resolvingUrl}
										<a href="{$resolvingUrl|escape}">
											{$resolvingUrl}
										</a>
									{else}
										{$pubId}
									{/if}
								</span>
							</div>
						{/if}
					{/foreach}

					{* DOI *}
					{assign var=doiObject value=$issue->getData('doiObject')}
					{if $doiObject}
						{assign var="doiUrl" value=$doiObject->getData('resolvingUrl')|escape}
						<div class="pub_id doi pub-id-item">
							<span class="type">
								DOI:
							</span>
							<span class="id">
								<a href="{$doiUrl|escape}">
									{$doiUrl}
								</a>
							</span>
						</div>
					{/if}
				</div>

				{* Published date *}
				{if $includeIssuePublishDate && $issue->getDatePublished()}
					<div class="published published-date-info">
						<svg class="date-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
							<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
							<line x1="16" y1="2" x2="16" y2="6"></line>
							<line x1="8" y1="2" x2="8" y2="6"></line>
							<line x1="3" y1="10" x2="21" y2="10"></line>
						</svg>
						<span class="label">
							{translate key="submissions.published"}:
						</span>
						<span class="value">
							{$issue->getDatePublished()|date_format:$dateFormatShort}
						</span>
					</div>				{/if}				{/if}
			</div>
		</div>
	</div>

	{* Full-issue galleys *}
	{if $issueGalleys}
		<div class="galleys issue-galleys-section">
			<{$heading} id="issueTocGalleyLabel" class="galleys-title">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
					<polyline points="14 2 14 8 20 8"></polyline>
				</svg>
				{translate key="issue.fullIssue"}
			</{$heading}>
			<ul class="galleys_links galley-links-list">
				{foreach from=$issueGalleys item=galley}
					<li class="galley-link-item">
						{include file="frontend/objects/galley_link.tpl" parent=$issue labelledBy="issueTocGalleyLabel" purchaseFee=$currentJournal->getData('purchaseIssueFee') purchaseCurrency=$currentJournal->getData('currency')}
					</li>
				{/foreach}
			</ul>
		</div>
	{/if}

	{* Articles *}
	<div class="sections articles-sections">
	{foreach name=sections from=$publishedSubmissions item=section}
		<div class="section article-section-card">
		{if $section.articles}
			{if $section.title}
				<{$heading} class="section-header">
					<span class="section-badge">Section</span>
					{$section.title|escape}
				</{$heading}>
			{/if}
			<ul class="cmp_article_list articles article-grid">
				{foreach from=$section.articles item=article}
					<li class="article-item">
						{include file="frontend/objects/article_summary.tpl" heading=$articleHeading}
					</li>
				{/foreach}
			</ul>
		{/if}
		</div>
	{/foreach}
	</div><!-- .sections -->
</div>
