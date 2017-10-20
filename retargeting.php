<script>

// INSTRUCTIONS

// The VersaTag code should be placed at the top of the <BODY> section of the HTML page.

// To ensure that the full page loads as a prerequisite for the VersaTag

// being activated (and the working mode is set to synchronous mode), place the tag at the bottom of the page. Note, however, that this may

// skew the data for slow-loading pages, and in general is not recommended.

// If the VersaTag code is configured to run in async mode, place the tag at the bottom of the page before the end of the <BODY > section.



//

// NOTE: You can test if the tags are working correctly before the campaign launches

// as follows:  Browse to http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=at, which is 

// a page that lets you set your local machine to 'testing' mode.  In this mode, when

// visiting a page that includes a VersaTag, a new window will open, showing you

// the tags activated by the VersaTag and the data sent by the VersaTag tag to the Sizmek servers.

//

// END of instructions (These instruction lines can be deleted from the actual HTML)



var versaTag = {};

versaTag.id = "6096";

versaTag.sync = 0;

versaTag.dispType = "js";

versaTag.ptcl = "HTTP";

versaTag.bsUrl = "bs.serving-sys.com/BurstingPipe";

//VersaTag activity parameters include all conversion parameters including custom parameters and Predefined parameters. Syntax: "ParamName1":"ParamValue1", "ParamName2":"ParamValue2". ParamValue can be empty.

versaTag.activityParams = {

//Predefined parameters:

"Session":""

//Custom parameters:

};

//Static retargeting tags parameters. Syntax: "TagID1":"ParamValue1", "TagID2":"ParamValue2". ParamValue can be empty.

versaTag.retargetParams = {};

//Dynamic retargeting tags parameters. Syntax: "TagID1":"ParamValue1", "TagID2":"ParamValue2". ParamValue can be empty.

versaTag.dynamicRetargetParams = {};

// Third party tags conditional parameters and mapping rule parameters. Syntax: "CondParam1":"ParamValue1", "CondParam2":"ParamValue2". ParamValue can be empty.

versaTag.conditionalParams = {};

</script>

<script id="ebOneTagUrlId" src="http://ds.serving-sys.com/SemiCachedScripts/ebOneTag.js"></script>

<noscript>

<iframe src="http://bs.serving-sys.com/BurstingPipe?

cn=ot&amp;

onetagid=6096&amp;

ns=1&amp;

activityValues=$$Session=[Session]$$&amp;

retargetingValues=$$$$&amp;

dynamicRetargetingValues=$$$$&amp;

acp=$$$$&amp;"

style="display:none;width:0px;height:0px"></iframe>

</noscript>