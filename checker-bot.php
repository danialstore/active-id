{"payload":{"allShortcutsEnabled":true,"fileTree":{"":{"items":[{"name":"LICENSE","path":"LICENSE","contentType":"file"},{"name":"README.md","path":"README.md","contentType":"file"},{"name":"checker-bot.php","path":"checker-bot.php","contentType":"file"},{"name":"composer.json","path":"composer.json","contentType":"file"}],"totalCount":4}},"fileTreeProcessingTime":6.6129359999999995,"foldersToFetch":[],"reducedMotionEnabled":"system","repo":{"id":355421656,"defaultBranch":"main","name":"cc-checker-bot","ownerLogin":"worldbins1","currentUserCanPush":false,"isFork":false,"isEmpty":false,"createdAt":"2021-04-07T08:22:30.000+03:00","ownerAvatar":"https://avatars.githubusercontent.com/u/82518799?v=4","public":true,"private":false},"refInfo":{"name":"main","listCacheKey":"v0:1617811395.784843","canEdit":true,"refType":"branch","currentOid":"0cb4f3bedeb475261f30f1d6c1fdc812e9a83be7"},"path":"checker-bot.php","currentUser":{"id":105604381,"login":"danialstore","userEmail":"danokarash7@gmail.com"},"blob":{"rawBlob":"<?php\r\n    date_default_timezone_set(\"Asia/kolkata\");\r\n    //Data From Webhook\r\n    $content = file_get_contents(\"php://input\");\r\n    $update = json_decode($content, true);\r\n    $chat_id = $update[\"message\"][\"chat\"][\"id\"];\r\n    $message = $update[\"message\"][\"text\"];\r\n    $message_id = $update[\"message\"][\"message_id\"];\r\n    $id = $update[\"message\"][\"from\"][\"id\"];\r\n    $username = $update[\"message\"][\"from\"][\"username\"];\r\n    $firstname = $update[\"message\"][\"from\"][\"first_name\"];\r\n    $start_msg = $_ENV['START_MSG']; \r\n    \r\n    $gate1 = \"xxxxxxxx/api.php\"; /// Your Checker URl with api.php or chk.php\r\n  //$gate2 = \"\";\r\nif($message == \"/start\"){\r\n    send_message($chat_id,$message_id, \"Hey $firstname \\nUse /cmds to View Commands \\n$start_msg\");\r\n}\r\n\r\nif($message == \"/cmds\"){\r\n    send_message($chat_id,$message_id, \"\r\n    !ch xxxxxxxxxxxxxxxx|xx|xxxx|xxx   \r\n    \");\r\n}\r\n\r\n//Gate 1\r\nif(strpos($message, \"!ch\") === 0){\r\n    $cc = substr($message, 4);\r\n    $curl = curl_init();\r\n    curl_setopt_array($curl, [\r\n    CURLOPT_URL => \"$gate1?lista=$cc\",\r\n    CURLOPT_RETURNTRANSFER => true,\r\n    CURLOPT_FOLLOWLOCATION => true,\r\n    CURLOPT_ENCODING => \"\",\r\n    CURLOPT_MAXREDIRS => 10,\r\n    CURLOPT_TIMEOUT => 30,\r\n    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,\r\n    CURLOPT_CUSTOMREQUEST => \"GET\",\r\n    CURLOPT_HTTPHEADER => [\r\n    \"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\",\r\n    \"accept-language: en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7\",\r\n    \"sec-fetch-dest: document\",\r\n    \"sec-fetch-site: none\",\r\n    \"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1\"\r\n   ],\r\n   ]);\r\n\r\n $result = curl_exec($curl);\r\n curl_close($curl);\r\n   send_message($chat_id,$message_id, \"$result \\nChecked By @$username \");\r\n\r\n}\r\n\r\n/*\r\n//Gate 2\r\nif(strpos($message, \"!ch\") === 0){\r\n    $cc = substr($message, 4);\r\n    $curl = curl_init();\r\n    curl_setopt_array($curl, [\r\n    CURLOPT_URL => \"$gate2?lista=$cc\",\r\n    CURLOPT_RETURNTRANSFER => true,\r\n    CURLOPT_FOLLOWLOCATION => true,\r\n    CURLOPT_ENCODING => \"\",\r\n    CURLOPT_MAXREDIRS => 10,\r\n    CURLOPT_TIMEOUT => 30,\r\n    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,\r\n    CURLOPT_CUSTOMREQUEST => \"GET\",\r\n    CURLOPT_HTTPHEADER => [\r\n    \"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng;q=0.8,application/signed-exchange;v=b3;q=0.9\",\r\n    \"accept-language: en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7\",\r\n    \"sec-fetch-dest: document\",\r\n    \"sec-fetch-site: none\",\r\n    \"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1\"\r\n   ],\r\n   ]);\r\n\r\n $result = curl_exec($curl);\r\n curl_close($curl);\r\n   send_message($chat_id,$message_id, \"$result \\nChecked By @$username \");\r\n\r\n}\r\n*/\r\n    function send_message($chat_id,$message_id, $message){\r\n        $text = urlencode($message);\r\n        $apiToken = \"xxxxxx\"; ///Bot api token  \r\n        file_get_contents(\"https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text&parse_mode=html\");\r\n    }\r\n?>\r\n","colorizedLines":null,"stylingDirectives":[[{"start":0,"end":5,"cssClass":"pl-ent"}],[{"start":31,"end":43,"cssClass":"pl-s"}],[{"start":4,"end":23,"cssClass":"pl-c"}],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":34,"end":45,"cssClass":"pl-s"}],[{"start":4,"end":11,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":26,"end":34,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"},{"start":36,"end":40,"cssClass":"pl-c1"}],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":15,"end":22,"cssClass":"pl-s1"},{"start":15,"end":16,"cssClass":"pl-c1"},{"start":24,"end":31,"cssClass":"pl-s"},{"start":35,"end":39,"cssClass":"pl-s"},{"start":43,"end":45,"cssClass":"pl-s"}],[{"start":4,"end":12,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":15,"end":22,"cssClass":"pl-s1"},{"start":15,"end":16,"cssClass":"pl-c1"},{"start":24,"end":31,"cssClass":"pl-s"},{"start":35,"end":39,"cssClass":"pl-s"}],[{"start":4,"end":15,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":18,"end":25,"cssClass":"pl-s1"},{"start":18,"end":19,"cssClass":"pl-c1"},{"start":27,"end":34,"cssClass":"pl-s"},{"start":38,"end":48,"cssClass":"pl-s"}],[{"start":4,"end":7,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":10,"end":17,"cssClass":"pl-s1"},{"start":10,"end":11,"cssClass":"pl-c1"},{"start":19,"end":26,"cssClass":"pl-s"},{"start":30,"end":34,"cssClass":"pl-s"},{"start":38,"end":40,"cssClass":"pl-s"}],[{"start":4,"end":13,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":16,"end":23,"cssClass":"pl-s1"},{"start":16,"end":17,"cssClass":"pl-c1"},{"start":25,"end":32,"cssClass":"pl-s"},{"start":36,"end":40,"cssClass":"pl-s"},{"start":44,"end":52,"cssClass":"pl-s"}],[{"start":4,"end":14,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":17,"end":24,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-c1"},{"start":26,"end":33,"cssClass":"pl-s"},{"start":37,"end":41,"cssClass":"pl-s"},{"start":45,"end":55,"cssClass":"pl-s"}],[{"start":4,"end":14,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":17,"end":22,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-c1"},{"start":18,"end":22,"cssClass":"pl-c1"},{"start":23,"end":34,"cssClass":"pl-s"}],[],[{"start":4,"end":10,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":14,"end":30,"cssClass":"pl-s"},{"start":33,"end":77,"cssClass":"pl-c"}],[{"start":2,"end":16,"cssClass":"pl-c"}],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":3,"end":11,"cssClass":"pl-s1"},{"start":3,"end":4,"cssClass":"pl-c1"},{"start":16,"end":22,"cssClass":"pl-s"}],[{"start":17,"end":25,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-c1"},{"start":26,"end":37,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"},{"start":40,"end":44,"cssClass":"pl-s"},{"start":44,"end":54,"cssClass":"pl-s1"},{"start":44,"end":45,"cssClass":"pl-c1"},{"start":54,"end":55,"cssClass":"pl-s"},{"start":57,"end":84,"cssClass":"pl-s"},{"start":86,"end":96,"cssClass":"pl-s1"},{"start":86,"end":87,"cssClass":"pl-c1"}],[],[],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":3,"end":11,"cssClass":"pl-s1"},{"start":3,"end":4,"cssClass":"pl-c1"},{"start":16,"end":21,"cssClass":"pl-s"}],[{"start":17,"end":25,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-c1"},{"start":26,"end":37,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"},{"start":40,"end":41,"cssClass":"pl-s"}],[{"start":0,"end":40,"cssClass":"pl-s"}],[{"start":0,"end":4,"cssClass":"pl-s"}],[],[],[{"start":0,"end":8,"cssClass":"pl-c"}],[{"start":0,"end":2,"cssClass":"pl-k"},{"start":10,"end":18,"cssClass":"pl-s1"},{"start":10,"end":11,"cssClass":"pl-c1"},{"start":21,"end":24,"cssClass":"pl-s"},{"start":31,"end":32,"cssClass":"pl-c1"}],[{"start":4,"end":7,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"},{"start":17,"end":25,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-c1"},{"start":27,"end":28,"cssClass":"pl-c1"}],[{"start":4,"end":9,"cssClass":"pl-s1"},{"start":4,"end":5,"cssClass":"pl-c1"}],[{"start":22,"end":27,"cssClass":"pl-s1"},{"start":22,"end":23,"cssClass":"pl-c1"}],[{"start":4,"end":15,"cssClass":"pl-c1"},{"start":20,"end":26,"cssClass":"pl-s1"},{"start":20,"end":21,"cssClass":"pl-c1"},{"start":26,"end":33,"cssClass":"pl-s"},{"start":33,"end":36,"cssClass":"pl-s1"},{"start":33,"end":34,"cssClass":"pl-c1"}],[{"start":4,"end":26,"cssClass":"pl-c1"},{"start":30,"end":34,"cssClass":"pl-c1"}],[{"start":4,"end":26,"cssClass":"pl-c1"},{"start":30,"end":34,"cssClass":"pl-c1"}],[{"start":4,"end":20,"cssClass":"pl-c1"}],[{"start":4,"end":21,"cssClass":"pl-c1"},{"start":25,"end":27,"cssClass":"pl-c1"}],[{"start":4,"end":19,"cssClass":"pl-c1"},{"start":23,"end":25,"cssClass":"pl-c1"}],[{"start":4,"end":24,"cssClass":"pl-c1"},{"start":28,"end":49,"cssClass":"pl-c1"}],[{"start":4,"end":25,"cssClass":"pl-c1"},{"start":30,"end":33,"cssClass":"pl-s"}],[{"start":4,"end":22,"cssClass":"pl-c1"}],[{"start":5,"end":148,"cssClass":"pl-s"}],[{"start":5,"end":57,"cssClass":"pl-s"}],[{"start":5,"end":29,"cssClass":"pl-s"}],[{"start":5,"end":25,"cssClass":"pl-s"}],[{"start":5,"end":156,"cssClass":"pl-s"}],[],[],[],[{"start":1,"end":8,"cssClass":"pl-s1"},{"start":1,"end":2,"cssClass":"pl-c1"},{"start":21,"end":26,"cssClass":"pl-s1"},{"start":21,"end":22,"cssClass":"pl-c1"}],[{"start":12,"end":17,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-c1"}],[{"start":16,"end":24,"cssClass":"pl-s1"},{"start":16,"end":17,"cssClass":"pl-c1"},{"start":25,"end":36,"cssClass":"pl-s1"},{"start":25,"end":26,"cssClass":"pl-c1"},{"start":39,"end":46,"cssClass":"pl-s1"},{"start":39,"end":40,"cssClass":"pl-c1"},{"start":46,"end":47,"cssClass":"pl-s"},{"start":49,"end":61,"cssClass":"pl-s"},{"start":61,"end":70,"cssClass":"pl-s1"},{"start":61,"end":62,"cssClass":"pl-c1"},{"start":70,"end":71,"cssClass":"pl-s"}],[],[],[],[{"start":0,"end":3,"cssClass":"pl-c"}],[{"start":0,"end":9,"cssClass":"pl-c"}],[{"start":0,"end":35,"cssClass":"pl-c"}],[{"start":0,"end":31,"cssClass":"pl-c"}],[{"start":0,"end":25,"cssClass":"pl-c"}],[{"start":0,"end":31,"cssClass":"pl-c"}],[{"start":0,"end":39,"cssClass":"pl-c"}],[{"start":0,"end":36,"cssClass":"pl-c"}],[{"start":0,"end":36,"cssClass":"pl-c"}],[{"start":0,"end":28,"cssClass":"pl-c"}],[{"start":0,"end":29,"cssClass":"pl-c"}],[{"start":0,"end":27,"cssClass":"pl-c"}],[{"start":0,"end":51,"cssClass":"pl-c"}],[{"start":0,"end":36,"cssClass":"pl-c"}],[{"start":0,"end":28,"cssClass":"pl-c"}],[{"start":0,"end":147,"cssClass":"pl-c"}],[{"start":0,"end":60,"cssClass":"pl-c"}],[{"start":0,"end":32,"cssClass":"pl-c"}],[{"start":0,"end":28,"cssClass":"pl-c"}],[{"start":0,"end":158,"cssClass":"pl-c"}],[{"start":0,"end":6,"cssClass":"pl-c"}],[{"start":0,"end":7,"cssClass":"pl-c"}],[{"start":0,"end":1,"cssClass":"pl-c"}],[{"start":0,"end":29,"cssClass":"pl-c"}],[{"start":0,"end":20,"cssClass":"pl-c"}],[{"start":0,"end":75,"cssClass":"pl-c"}],[{"start":0,"end":1,"cssClass":"pl-c"}],[{"start":0,"end":2,"cssClass":"pl-c"}],[{"start":0,"end":2,"cssClass":"pl-c"}],[{"start":4,"end":12,"cssClass":"pl-k"},{"start":13,"end":25,"cssClass":"pl-en"},{"start":26,"end":34,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"},{"start":35,"end":46,"cssClass":"pl-s1"},{"start":35,"end":36,"cssClass":"pl-c1"},{"start":48,"end":56,"cssClass":"pl-s1"},{"start":48,"end":49,"cssClass":"pl-c1"}],[{"start":8,"end":13,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":26,"end":34,"cssClass":"pl-s1"},{"start":26,"end":27,"cssClass":"pl-c1"}],[{"start":8,"end":17,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":21,"end":27,"cssClass":"pl-s"},{"start":30,"end":48,"cssClass":"pl-c"}],[{"start":27,"end":55,"cssClass":"pl-s"},{"start":55,"end":64,"cssClass":"pl-s1"},{"start":55,"end":56,"cssClass":"pl-c1"},{"start":64,"end":85,"cssClass":"pl-s"},{"start":85,"end":93,"cssClass":"pl-s1"},{"start":85,"end":86,"cssClass":"pl-c1"},{"start":93,"end":114,"cssClass":"pl-s"},{"start":114,"end":125,"cssClass":"pl-s1"},{"start":114,"end":115,"cssClass":"pl-c1"},{"start":125,"end":131,"cssClass":"pl-s"},{"start":131,"end":136,"cssClass":"pl-s1"},{"start":131,"end":132,"cssClass":"pl-c1"},{"start":136,"end":152,"cssClass":"pl-s"}],[],[{"start":0,"end":2,"cssClass":"pl-ent"}]],"csv":null,"csvError":null,"dependabotInfo":{"showConfigurationBanner":false,"configFilePath":null,"networkDependabotPath":"/worldbins1/cc-checker-bot/network/updates","dismissConfigurationNoticePath":"/settings/dismiss-notice/dependabot_configuration_notice","configurationNoticeDismissed":false,"repoAlertsPath":"/worldbins1/cc-checker-bot/security/dependabot","repoSecurityAndAnalysisPath":"/worldbins1/cc-checker-bot/settings/security_analysis","repoOwnerIsOrg":true,"currentUserCanAdminRepo":false},"displayName":"checker-bot.php","displayUrl":"https://github.com/worldbins1/cc-checker-bot/blob/main/checker-bot.php?raw=true","headerInfo":{"blobSize":"3.2 KB","deleteInfo":{"deletePath":"https://github.com/worldbins1/cc-checker-bot/delete/main/checker-bot.php","deleteTooltip":"Fork this repository and delete the file"},"editInfo":{"editTooltip":"Fork this repository and edit the file"},"ghDesktopPath":"https://desktop.github.com","gitLfsPath":null,"onBranch":true,"shortPath":"de05fb4","siteNavLoginPath":"/login?return_to=https%3A%2F%2Fgithub.com%2Fworldbins1%2Fcc-checker-bot%2Fblob%2Fmain%2Fchecker-bot.php","isCSV":false,"isRichtext":false,"toc":null,"lineInfo":{"truncatedLoc":"88","truncatedSloc":"80"},"mode":"file"},"image":false,"isCodeownersFile":null,"isValidLegacyIssueTemplate":false,"issueTemplateHelpUrl":"https://docs.github.com/articles/about-issue-and-pull-request-templates","issueTemplate":null,"discussionTemplate":null,"language":"PHP","large":false,"loggedIn":true,"newDiscussionPath":"/worldbins1/cc-checker-bot/discussions/new","newIssuePath":"/worldbins1/cc-checker-bot/issues/new","planSupportInfo":{"repoIsFork":null,"repoOwnedByCurrentUser":null,"requestFullPath":"/worldbins1/cc-checker-bot/blob/main/checker-bot.php","showFreeOrgGatedFeatureMessage":null,"showPlanSupportBanner":null,"upgradeDataAttributes":null,"upgradePath":null},"publishBannersInfo":{"dismissActionNoticePath":"/settings/dismiss-notice/publish_action_from_dockerfile","dismissStackNoticePath":"/settings/dismiss-notice/publish_stack_from_file","releasePath":"/worldbins1/cc-checker-bot/releases/new?marketplace=true","showPublishActionBanner":false,"showPublishStackBanner":false},"renderImageOrRaw":false,"richText":null,"renderedFileInfo":null,"tabSize":8,"topBannersInfo":{"overridingGlobalFundingFile":false,"globalPreferredFundingPath":null,"repoOwner":"worldbins1","repoName":"cc-checker-bot","showInvalidCitationWarning":false,"citationHelpUrl":"https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/creating-a-repository-on-github/about-citation-files","showDependabotConfigurationBanner":false,"actionsOnboardingTip":null},"truncated":false,"viewable":true,"workflowRedirectUrl":null,"symbols":{"timedOut":false,"notAnalyzed":false,"symbols":[{"name":"send_message","kind":"function","identStart":2976,"identEnd":2988,"extentStart":2967,"extentEnd":3273,"fullyQualifiedName":"send_message","identUtf16":{"start":{"lineNumber":82,"utf16Col":13},"end":{"lineNumber":82,"utf16Col":25}},"extentUtf16":{"start":{"lineNumber":82,"utf16Col":4},"end":{"lineNumber":86,"utf16Col":5}}}]}},"csrf_tokens":{"/worldbins1/cc-checker-bot/branches":{"post":"Vl1x5jkfIloHfs6oPXE027A3YG0VK2P-9pQkWlQOmH651_a_ANTy9UUiRcSTui3b3g7ixkniYMwp4KCtfH2YZw"}}},"title":"cc-checker-bot/checker-bot.php at main · worldbins1/cc-checker-bot","locale":"en"}