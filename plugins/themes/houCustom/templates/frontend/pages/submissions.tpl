{**
 * templates/frontend/pages/submissions.tpl
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view information about submissions - Enhanced Version
 *
 * @uses $currentContext Journal|Press The current journal or press
 * @uses $submissionChecklist array List of requirements for submissions
 * @uses $submissionChecklistAfterContent string Optional data to include after the checklist
 *}
{capture assign="submissionChecklistAfterContent"}
	{if !empty($sections)}
		{foreach from=$sections item="section"}
			{if $section->getLocalizedPolicy()}
				<div class="section_policy">
					<h3>{$section->getLocalizedTitle()|escape}</h3>
					<div class="section-policy-content">
						{$section->getLocalizedPolicy()}
					</div>
					{if $isUserLoggedIn}
						{capture assign="sectionSubmissionUrl"}{url page="submission" sectionId=$section->getId()}{/capture}
						<p class="submit-to-section">
							<a href="{$sectionSubmissionUrl}" class="btn btn-primary btn-sm">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="12" y1="11" x2="12" y2="17"></line>
									<line x1="9" y1="14" x2="15" y2="14"></line>
								</svg>
								{translate key="about.onlineSubmissions.submitToSection" name=$section->getLocalizedTitle()|escape}
							</a>
						</p>
					{/if}
				</div>
			{/if}
		{/foreach}
	{/if}
{/capture}

{include file="frontend/components/header.tpl" pageTitle="about.submissions"}

<div class="page page_submissions submissions-enhanced">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="about.submissions"}
	
	<div class="submissions-header">
		<h1 class="page-title">
			<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
				<polyline points="14 2 14 8 20 8"></polyline>
				<line x1="16" y1="13" x2="8" y2="13"></line>
				<line x1="16" y1="17" x2="8" y2="17"></line>
				<polyline points="10 9 9 9 8 9"></polyline>
			</svg>
			{translate key="about.submissions"}
		</h1>
	</div>

	<div class="cmp_notification submission-notification">
		{if $sections|@count == 0 || $currentContext->getData('disableSubmissions')}
			<svg class="notification-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<circle cx="12" cy="12" r="10"></circle>
				<line x1="12" y1="8" x2="12" y2="12"></line>
				<line x1="12" y1="16" x2="12.01" y2="16"></line>
			</svg>
			{translate key="author.submit.notAccepting"}
		{else}
			<svg class="notification-icon success-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
				<polyline points="22 4 12 14.01 9 11.01"></polyline>
			</svg>
			{if $isUserLoggedIn}
				{capture assign="newSubmission"}<a href="{url page="submission"}" class="action-link">{translate key="about.onlineSubmissions.newSubmission"}</a>{/capture}
				{capture assign="viewSubmissions"}<a href="{url page="submissions"}" class="action-link">{translate key="about.onlineSubmissions.viewSubmissions"}</a>{/capture}
				{translate key="about.onlineSubmissions.submissionActions" newSubmission=$newSubmission viewSubmissions=$viewSubmissions}
			{else}
				{capture assign="login"}<a href="{url page="login"}" class="action-link">{translate key="about.onlineSubmissions.login"}</a>{/capture}
				{capture assign="register"}<a href="{url page="user" op="register"}" class="action-link">{translate key="about.onlineSubmissions.register"}</a>{/capture}
				{translate key="about.onlineSubmissions.registrationRequired" login=$login register=$register}
			{/if}
		{/if}
	</div>

	{assign var="authorGuidelines" value=$currentContext->getLocalizedData('authorGuidelines')}
	{if $authorGuidelines && !preg_match('/^##.*##$/', $authorGuidelines)}
	<div class="author_guidelines content-section" id="authorGuidelines">
		<h2 class="section-heading">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
				<polyline points="14 2 14 8 20 8"></polyline>
				<line x1="16" y1="13" x2="8" y2="13"></line>
				<line x1="16" y1="17" x2="8" y2="17"></line>
			</svg>
			{translate key="about.authorGuidelines"}
			{include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/instructions" sectionTitleKey="about.authorGuidelines"}
		</h2>
		<div class="content-body">
			{$authorGuidelines}
		</div>
	</div>
	{else}
	<div class="author_guidelines content-section empty-state" id="authorGuidelines">
		<h2 class="section-heading">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
				<polyline points="14 2 14 8 20 8"></polyline>
				<line x1="16" y1="13" x2="8" y2="13"></line>
				<line x1="16" y1="17" x2="8" y2="17"></line>
			</svg>
			{translate key="about.authorGuidelines"}
			{include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/instructions" sectionTitleKey="about.authorGuidelines"}
		</h2>
		<div class="content-body empty-message">
			<p><em>Author guidelines have not been configured yet. Please contact the journal manager.</em></p>
		</div>
	</div>
	{/if}

	{if $submissionChecklist && !preg_match('/##.*##/', $submissionChecklist)}
		<div class="submission_checklist content-section">
			<h2 class="section-heading">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<polyline points="9 11 12 14 22 4"></polyline>
					<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
				</svg>
				{translate key="about.submissionPreparationChecklist"}
				{include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/instructions" sectionTitleKey="about.submissionPreparationChecklist"}
			</h2>
			<div class="checklist-body">
				{$submissionChecklist}
			</div>
		</div>
	{else}
		<div class="submission_checklist content-section empty-state">
			<h2 class="section-heading">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<polyline points="9 11 12 14 22 4"></polyline>
					<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
				</svg>
				{translate key="about.submissionPreparationChecklist"}
				{include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/instructions" sectionTitleKey="about.submissionPreparationChecklist"}
			</h2>
			<div class="checklist-body empty-message">
				<p><em>Submission checklist has not been configured yet. Please contact the journal manager.</em></p>
			</div>
		</div>
	{/if}

	{if isset($submissionChecklistAfterContent)}
		<div class="section-policies content-section">
			<h2 class="section-heading">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
					<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
				</svg>
				{translate key="section.sections"}
			</h2>
			<div class="section-policies-grid">
				{$submissionChecklistAfterContent}
			</div>
		</div>
	{/if}

	{if $currentContext->getLocalizedData('copyrightNotice')}
		<div class="copyright_notice content-section">
			<h2 class="section-heading">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<circle cx="12" cy="12" r="10"></circle>
					<path d="M15 9a3 3 0 0 0-6 0v6"></path>
				</svg>
				{translate key="about.copyrightNotice"}
				{include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/instructions" sectionTitleKey="about.copyrightNotice"}
			</h2>
			<div class="content-body">
				{$currentContext->getLocalizedData('copyrightNotice')}
			</div>
		</div>
	{/if}

	{if $currentContext->getLocalizedData('privacyStatement')}
	<div class="privacy_statement content-section" id="privacyStatement">
		<h2 class="section-heading">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
				<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
			</svg>
			{translate key="about.privacyStatement"}
			{include file="frontend/components/editLink.tpl" page="management" op="settings" path="website" anchor="setup/privacy" sectionTitleKey="about.privacyStatement"}
		</h2>
		<div class="content-body">
			{$currentContext->getLocalizedData('privacyStatement')}
		</div>
	</div>
	{/if}

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
