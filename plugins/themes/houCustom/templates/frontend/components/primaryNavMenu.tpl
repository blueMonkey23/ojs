{**
 * templates/frontend/components/primaryNavMenu.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Primary navigation menu list for OJS - Enhanced Version
 *}
<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list nav-enhanced">

	{if $enableAnnouncements}
		<li class="nav-item">
			<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="announcement"}" class="nav-link">
				<svg class="nav-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
					<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
				</svg>
				<span>{translate key="announcement.announcements"}</span>
			</a>
		</li>
	{/if}

	{if $currentJournal}

		{if $currentJournal->getData('publishingMode') != \APP\journal\Journal::PUBLISHING_MODE_NONE}
			<li class="nav-item">
				<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="issue" op="current"}" class="nav-link">
					<svg class="nav-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
						<polyline points="14 2 14 8 20 8"></polyline>
						<line x1="12" y1="18" x2="12" y2="12"></line>
						<line x1="9" y1="15" x2="15" y2="15"></line>
					</svg>
					<span>{translate key="navigation.current"}</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="issue" op="archive"}" class="nav-link">
					<svg class="nav-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
					</svg>
					<span>{translate key="navigation.archives"}</span>
				</a>
			</li>
		{/if}

		<li class="nav-item has-dropdown">
			<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="about"}" class="nav-link">
				<svg class="nav-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<circle cx="12" cy="12" r="10"></circle>
					<line x1="12" y1="16" x2="12" y2="12"></line>
					<line x1="12" y1="8" x2="12.01" y2="8"></line>
				</svg>
				<span>{translate key="navigation.about"}</span>
				<svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<polyline points="6 9 12 15 18 9"></polyline>
				</svg>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="about"}">
						{translate key="about.aboutContext"}
					</a>
				</li>
				<li>
					<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="about" op="editorialMasthead"}">
						{translate key="common.editorialMasthead"}
					</a>
				</li>
				<li>
					<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="about" op="submissions"}">
						{translate key="about.submissions"}
					</a>
				</li>
				{if $currentJournal->getData('mailingAddress') || $currentJournal->getData('contactName')}
					<li>
						<a href="{url router=PKP\core\PKPApplication::ROUTE_PAGE page="about" op="contact"}">
							{translate key="about.contact"}
						</a>
					</li>
				{/if}
			</ul>
		</li>
	{/if}
</ul>
