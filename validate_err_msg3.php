{"payload":{"allShortcutsEnabled":true,"fileTree":{"":{"items":[{"name":"README.md","path":"README.md","contentType":"file"},{"name":"campus.sql","path":"campus.sql","contentType":"file"},{"name":"index.html","path":"index.html","contentType":"file"},{"name":"index.php","path":"index.php","contentType":"file"},{"name":"index2.html","path":"index2.html","contentType":"file"},{"name":"insert.php","path":"insert.php","contentType":"file"},{"name":"login.php","path":"login.php","contentType":"file"},{"name":"style2.css","path":"style2.css","contentType":"file"},{"name":"style3.css","path":"style3.css","contentType":"file"},{"name":"validate2.php","path":"validate2.php","contentType":"file"},{"name":"validate3.html","path":"validate3.html","contentType":"file"},{"name":"validate_err_msg3.php","path":"validate_err_msg3.php","contentType":"file"}],"totalCount":12}},"fileTreeProcessingTime":2.214326,"foldersToFetch":[],"reducedMotionEnabled":"system","repo":{"id":701377282,"defaultBranch":"main","name":"web-development","ownerLogin":"Rissbiggy","currentUserCanPush":true,"isFork":false,"isEmpty":false,"createdAt":"2023-10-06T17:07:36.000+03:00","ownerAvatar":"https://avatars.githubusercontent.com/u/146194315?v=4","public":true,"private":false,"isOrgOwned":false},"symbolsExpanded":false,"treeExpanded":true,"refInfo":{"name":"main","listCacheKey":"v0:1697789279.0","canEdit":true,"refType":"branch","currentOid":"2dded8d8e1920548c8a9e603db92b33dbfd90921"},"path":"validate_err_msg3.php","currentUser":{"id":146194315,"login":"Rissbiggy","userEmail":"omosmaurice12@gmail.com"},"blob":{"rawLines":["<?php\r","if($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r","{\r","    if(empty($_POST[\"name\"]))\r","    {\r","        $nameErr=\"name is a required field\";\r","        echo$nameErr;\r","    }\r","    else\r","    {\r","        $name=test_input($_POST[\"name\"]);\r","        echo $name.\"<br/>\";\r","    }\r","    \r","}\r","if($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r","{\r","    if(empty($_POST[\"email\"]))\r","    {\r","    $emailErr=\"email is a requrired field\";\r","    }\r","    else\r","    {\r","        $email=test_input($_POST[\"email\"]);\r","        echo $email.\"<br/>\";\r","    }\r","}\r","if($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r","{\r","    if(empty($_POST[\"website\"]))\r","    {\r","    $website=\"website is a requrired field\";\r","    }\r","    else\r","    {\r","        $website=test_input($_POST[\"website\"]);\r","        echo $website.\"<br/>;\"\r","    }\r","}\r","f($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r","{\r","    if(empty($_POST[\"comment\"]))\r","    {\r","    $website=\"comment is a requrired field\";\r","    }\r","    else\r","    {\r","        $commennt=test_input($_POST[\"comment\"]);\r","        echo $commennt.\"<br/>;\"\r","    }\r","}\r","f($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r","{\r","    if(empty($_POST[\"gender\"]))\r","    {\r","    $website=\"gender is a requrired field\";\r","    }\r","    else\r","    {\r","        $gender=test_input($_POST[\"gender\"]);\r","        echo $gender.\"<br/>;\"\r","    }\r","}\r","function test_input($data)\r","{\r","    $data=trim($data);\r","    $data=stripslashes($data);\r","    $data=htmlspecialchars($data);\r","    return $data;\r","}\r","?>"],"stylingDirectives":[[{"start":0,"end":5,"cssClass":"pl-ent"}],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":3,"end":11,"cssClass":"pl-s1"},{"start":3,"end":4,"cssClass":"pl-c1"},{"start":4,"end":11,"cssClass":"pl-c1"},{"start":13,"end":27,"cssClass":"pl-s"},{"start":32,"end":36,"cssClass":"pl-s"}],[],[{"start":4,"end":6,"cssClass":"pl-k"},{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":14,"end":19,"cssClass":"pl-c1"},{"start":21,"end":25,"cssClass":"pl-s"}],[],[{"start":8,"end":16,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":18,"end":42,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":12,"end":20,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-c1"}],[],[{"start":4,"end":8,"cssClass":"pl-k"}],[],[{"start":8,"end":13,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":25,"end":31,"cssClass":"pl-s1"},{"start":25,"end":26,"cssClass":"pl-c1"},{"start":26,"end":31,"cssClass":"pl-c1"},{"start":33,"end":37,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":13,"end":18,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":20,"end":25,"cssClass":"pl-s"}],[],[],[],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":3,"end":11,"cssClass":"pl-s1"},{"start":3,"end":4,"cssClass":"pl-c1"},{"start":4,"end":11,"cssClass":"pl-c1"},{"start":13,"end":27,"cssClass":"pl-s"},{"start":32,"end":36,"cssClass":"pl-s"}],[],[{"start":4,"end":6,"cssClass":"pl-k"},{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":14,"end":19,"cssClass":"pl-c1"},{"start":21,"end":26,"cssClass":"pl-s"}],[],[{"start":4,"end":13,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":15,"end":41,"cssClass":"pl-s"}],[],[{"start":4,"end":8,"cssClass":"pl-k"}],[],[{"start":8,"end":14,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":26,"end":32,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"},{"start":27,"end":32,"cssClass":"pl-c1"},{"start":34,"end":39,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":21,"end":26,"cssClass":"pl-s"}],[],[],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":3,"end":11,"cssClass":"pl-s1"},{"start":3,"end":4,"cssClass":"pl-c1"},{"start":4,"end":11,"cssClass":"pl-c1"},{"start":13,"end":27,"cssClass":"pl-s"},{"start":32,"end":36,"cssClass":"pl-s"}],[],[{"start":4,"end":6,"cssClass":"pl-k"},{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":14,"end":19,"cssClass":"pl-c1"},{"start":21,"end":28,"cssClass":"pl-s"}],[],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":14,"end":42,"cssClass":"pl-s"}],[],[{"start":4,"end":8,"cssClass":"pl-k"}],[],[{"start":8,"end":16,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":28,"end":34,"cssClass":"pl-s1"},{"start":28,"end":29,"cssClass":"pl-c1"},{"start":29,"end":34,"cssClass":"pl-c1"},{"start":36,"end":43,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":13,"end":21,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":23,"end":29,"cssClass":"pl-s"}],[],[],[{"start":2,"end":10,"cssClass":"pl-s1"},{"start":2,"end":3,"cssClass":"pl-c1"},{"start":3,"end":10,"cssClass":"pl-c1"},{"start":12,"end":26,"cssClass":"pl-s"},{"start":31,"end":35,"cssClass":"pl-s"}],[],[{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":14,"end":19,"cssClass":"pl-c1"},{"start":21,"end":28,"cssClass":"pl-s"}],[],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":14,"end":42,"cssClass":"pl-s"}],[],[],[],[{"start":8,"end":17,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":29,"end":35,"cssClass":"pl-s1"},{"start":29,"end":30,"cssClass":"pl-c1"},{"start":30,"end":35,"cssClass":"pl-c1"},{"start":37,"end":44,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":13,"end":22,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":24,"end":30,"cssClass":"pl-s"}],[],[],[{"start":2,"end":10,"cssClass":"pl-s1"},{"start":2,"end":3,"cssClass":"pl-c1"},{"start":3,"end":10,"cssClass":"pl-c1"},{"start":12,"end":26,"cssClass":"pl-s"},{"start":31,"end":35,"cssClass":"pl-s"}],[],[{"start":13,"end":19,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":14,"end":19,"cssClass":"pl-c1"},{"start":21,"end":27,"cssClass":"pl-s"}],[],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":14,"end":41,"cssClass":"pl-s"}],[],[],[],[{"start":8,"end":15,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":27,"end":33,"cssClass":"pl-s1"},{"start":27,"end":28,"cssClass":"pl-c1"},{"start":28,"end":33,"cssClass":"pl-c1"},{"start":35,"end":41,"cssClass":"pl-s"}],[{"start":8,"end":12,"cssClass":"pl-k"},{"start":13,"end":20,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-c1"},{"start":22,"end":28,"cssClass":"pl-s"}],[],[],[{"start":20,"end":25,"cssClass":"pl-s1"},{"start":20,"end":21,"cssClass":"pl-c1"}],[],[{"start":4,"end":9,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":15,"end":20,"cssClass":"pl-s1"},{"start":15,"end":16,"cssClass":"pl-c1"}],[{"start":4,"end":9,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":23,"end":28,"cssClass":"pl-s1"},{"start":23,"end":24,"cssClass":"pl-c1"}],[{"start":4,"end":9,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":27,"end":32,"cssClass":"pl-s1"},{"start":27,"end":28,"cssClass":"pl-c1"}],[{"start":4,"end":10,"cssClass":"pl-k"},{"start":11,"end":16,"cssClass":"pl-s1"},{"start":11,"end":12,"cssClass":"pl-c1"}],[],[{"start":0,"end":2,"cssClass":"pl-ent"}]],"csv":null,"csvError":null,"dependabotInfo":{"showConfigurationBanner":null,"configFilePath":null,"networkDependabotPath":"/Rissbiggy/web-development/network/updates","dismissConfigurationNoticePath":"/settings/dismiss-notice/dependabot_configuration_notice","configurationNoticeDismissed":false,"repoAlertsPath":"/Rissbiggy/web-development/security/dependabot","repoSecurityAndAnalysisPath":"/Rissbiggy/web-development/settings/security_analysis","repoOwnerIsOrg":false,"currentUserCanAdminRepo":true},"displayName":"validate_err_msg3.php","displayUrl":"https://github.com/Rissbiggy/web-development/blob/main/validate_err_msg3.php?raw=true","headerInfo":{"blobSize":"1.35 KB","deleteInfo":{"deleteTooltip":"Delete this file"},"editInfo":{"editTooltip":"Edit this file"},"ghDesktopPath":"https://desktop.github.com","gitLfsPath":null,"onBranch":true,"shortPath":"0aeaeb8","siteNavLoginPath":"/login?return_to=https%3A%2F%2Fgithub.com%2FRissbiggy%2Fweb-development%2Fblob%2Fmain%2Fvalidate_err_msg3.php","isCSV":false,"isRichtext":false,"toc":null,"lineInfo":{"truncatedLoc":"71","truncatedSloc":"70"},"mode":"file"},"image":false,"isCodeownersFile":null,"isPlain":false,"isValidLegacyIssueTemplate":false,"issueTemplateHelpUrl":"https://docs.github.com/articles/about-issue-and-pull-request-templates","issueTemplate":null,"discussionTemplate":null,"language":"PHP","languageID":272,"large":false,"loggedIn":true,"newDiscussionPath":"/Rissbiggy/web-development/discussions/new","newIssuePath":"/Rissbiggy/web-development/issues/new","planSupportInfo":{"repoIsFork":null,"repoOwnedByCurrentUser":null,"requestFullPath":"/Rissbiggy/web-development/blob/main/validate_err_msg3.php","showFreeOrgGatedFeatureMessage":null,"showPlanSupportBanner":null,"upgradeDataAttributes":null,"upgradePath":null},"publishBannersInfo":{"dismissActionNoticePath":"/settings/dismiss-notice/publish_action_from_dockerfile","dismissStackNoticePath":"/settings/dismiss-notice/publish_stack_from_file","releasePath":"/Rissbiggy/web-development/releases/new?marketplace=true","showPublishActionBanner":false,"showPublishStackBanner":false},"rawBlobUrl":"https://github.com/Rissbiggy/web-development/raw/main/validate_err_msg3.php","renderImageOrRaw":false,"richText":null,"renderedFileInfo":null,"shortPath":null,"tabSize":8,"topBannersInfo":{"overridingGlobalFundingFile":false,"globalPreferredFundingPath":null,"repoOwner":"Rissbiggy","repoName":"web-development","showInvalidCitationWarning":false,"citationHelpUrl":"https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/creating-a-repository-on-github/about-citation-files","showDependabotConfigurationBanner":null,"actionsOnboardingTip":null},"truncated":false,"viewable":true,"workflowRedirectUrl":null,"symbols":{"timedOut":true,"notAnalyzed":false,"symbols":[]}},"copilotInfo":{"documentationUrl":"https://docs.github.com/copilot/overview-of-github-copilot/about-github-copilot-for-individuals","notices":{"codeViewPopover":{"dismissed":false,"dismissPath":"/settings/dismiss-notice/code_view_copilot_popover"}},"userAccess":{"accessAllowed":false,"hasSubscriptionEnded":false,"orgHasCFBAccess":false,"userHasCFIAccess":false,"userHasOrgs":false,"userIsOrgAdmin":false,"userIsOrgMember":false,"business":null,"featureRequestInfo":null}},"copilotAccessAllowed":true,"csrf_tokens":{"/Rissbiggy/web-development/branches":{"post":"UYG4XbfJMY5A30yqaGN90dl3LzonFggnfemKyGOHckERiLdR7bRV1T6px418ivVMG1R2oRVeoMpccr0rZ9xwxQ"},"/repos/preferences":{"post":"elDC3h1Jrw364CkeqGFo61fymsnMG8yHaLbLCRCl6IesSBOgVnNDl5pXwXpgnDB2Tkx2QR3rF7w0f7OKF9wXaQ"}}},"title":"web-development/validate_err_msg3.php at main · Rissbiggy/web-development"}