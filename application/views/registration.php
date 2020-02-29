

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <script language="javascript" type="text/javascript">
        //window.history.forward(1);

        var dtCh = "/";
        var minYear = 1900;
        var maxYear = 2100;

        function isInteger(s) {
            var i;
            for (i = 0; i < s.length; i++) {
                // Check that current character is number.
                var c = s.charAt(i);
                if (((c < "0") || (c > "9"))) return false;
            }
            // All characters are numbers.
            return true;
        }

        function stripCharsInBag(s, bag) {
            var i;
            var returnString = "";
            // Search through string's characters one by one.
            // If character is not in bag, append to returnString.
            for (i = 0; i < s.length; i++) {
                var c = s.charAt(i);
                if (bag.indexOf(c) == -1) returnString += c;
            }
            return returnString;
        }

        function daysInFebruary(year) {
            // February has 29 days in any year evenly divisible by four,
            // EXCEPT for centurial years which are not also divisible by 400.
            return (((year % 4 == 0) && ((!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28);
        }
        function DaysArray(n) {
            for (var i = 1; i <= n; i++) {
                this[i] = 31
                if (i == 4 || i == 6 || i == 9 || i == 11) { this[i] = 30 }
                if (i == 2) { this[i] = 29 }
            }
            return this
        }
        function isDate(dtStr) {
            var daysInMonth = DaysArray(12)
            var pos1 = dtStr.indexOf(dtCh)
            var pos2 = dtStr.indexOf(dtCh, pos1 + 1)
            var strDay = dtStr.substring(0, pos1)
            var strMonth = dtStr.substring(pos1 + 1, pos2)
            var strYear = dtStr.substring(pos2 + 1)
            strYr = strYear
            //	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
            //	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
            for (var i = 1; i <= 3; i++) {
                if (strYr.charAt(0) == "0" && strYr.length > 1) strYr = strYr.substring(1)
            }
            month = strMonth
            day = strDay
            year = parseInt(strYr)
            //	alert("pos1="+pos1+",pos2="+pos2+",strMonth.length="+strMonth.length+",month="+month+",year="+year);
            if (pos1 == -1 || pos2 == -1) {
                alert("The date format should be : dd/mm/yyyy")
                return false
            }
            if (strDay.length < 2 || day < 1 || day > 31 || (month == 2 && day > daysInFebruary(year)) || day > daysInMonth[month]) {
                alert("Please enter a valid day")
                return false
            }
            if (strMonth.length < 2 || month < 1 || month > 12) {
                alert("Please enter a valid month")
                return false
            }

            if (strYear.length != 4 || year == 0 || year < minYear || year > maxYear) {
                alert("Please enter a valid 4 digit year between " + minYear + " and " + maxYear)
                return false
            }
            if (dtStr.indexOf(dtCh, pos2 + 1) != -1 || isInteger(stripCharsInBag(dtStr, dtCh)) == false) {
                alert("Please enter a valid date")
                return false
            }
            return true
        }

        function Validate() {
            if ((document.getElementById("txtIntroducerId").value) == "") {
                alert("Please Enter Introducer Id....");
                document.getElementById("txtIntroducerId").focus();
                return false;
            }

            if ((document.getElementById("txtParentId").value) == "") {
                alert("Please Enter Parent Id....");
                document.getElementById("txtParentId").focus();
                return false;
            }

            if ((document.getElementById("txtPinNo").value) == "") {
                alert("Please Enter Pin Number....");
                document.getElementById("txtPinNo").focus();
                return false;
            }

            if ((document.getElementById("txtBusinessPlan").value) == "") {
                alert("Please Select Business Plan....");
                document.getElementById("txtBusinessPlan").focus();
                return false;
            }

            if ((document.getElementById("txtMemberName").value) == "") {
                alert("Please Enter Member Name....");
                document.getElementById("txtMemberName").focus();
                return false;
            }

            if ((document.getElementById("txtJoiningDate").value) == "") {
                alert("Please Enter Member Joining Date....");
                document.getElementById("txtJoiningDate").focus();
                return false;
            }
            if ((document.getElementById("txtMobileNumber").value) == "") {
                alert("Please Enter Mobile Number....");
                document.getElementById("txtMobileNumber").focus();
                return false;
            }
            if ((document.getElementById("ddlCountry").value) == "Select Country ...") {
                alert("Please Select Country Name......");
                document.getElementById("ddlCountry").focus();
                return false;
            }
            if ((document.getElementById("ddlState").value) == "Select State ...") {
                alert("Please Select State Name......");
                document.getElementById("ddlState").focus();
                return false;
            }
            if ((document.getElementById("txtCity").value) == "") {
                alert("Please Enter City....");
                document.getElementById("txtCity").focus();
                return false;
            }
            if ((document.getElementById("txtPayDate").value) == "") {
                alert("Please Enter Pay Date....");
                document.getElementById("txtPayDate").focus();
                return false;
            }
            //Date Of Birth Validation
            if ((document.getElementById("txtDateOfBirth").value) != "") {
                var dt1 = document.getElementById("txtDateOfBirth").value
                if (isDate(dt1) == false) {
                    document.getElementById("txtDateOfBirth").focus();
                    return false;
                }
            }
            //Joining date validation
            var dt3 = document.getElementById("txtJoiningDate").value
            if (isDate(dt3) == false) {
                document.getElementById("txtJoiningDate").focus();
                return false;
            }

            // Pay Date Validation
            var dt5 = document.getElementById("txtPayDate").value
            if (isDate(dt5) == false) {
                document.getElementById("txtPayDate").focus();
                return false;
            }

            var requestMgr = Sys.WebForms.PageRequestManager.getInstance();
            requestMgr.add_initializeRequest(InitializeRequest);
            requestMgr.add_endRequest(EndRequest);
            function InitializeRequest(sender, args) {
                $get(args._postBackElement.id).disabled = true;

            }
            function EndRequest(sender, args) {
                $get(sender._postBackSettings.sourceElement.id).disabled = false;
            }
            return true;
        }


        function CheckNumericValue(e) {
            var key;
            key = e.which ? e.which : e.keyCode;
            if ((key >= 48 && key <= 57) || key == 13 || key == 8 || key == 9 || key == 27 || key == 46) {
                return true;
            }
            else {
                alert("Please Enter Number Only...");
                return false;
            }
        }
        function containsAlphabets(e) {
            var tempString = "";
            var key;
            key = e.which ? e.which : e.keyCode;
            if ((key >= 65 && key <= 90) || (key >= 97 && key <= 122) || (key == 32) || (key == 8) || (key == 127)) {
                return true;
            }
            else {
                alert("Please Enter Alphabets only");
                return false;
            }
        }

        
    </script>
    <script type="text/javascript">

        function UpperCase(ctrlID) {
            var txtMemberPANNumber = document.getElementById(ctrlID).value;
            if (txtMemberPANNumber != "") {
                document.getElementById(ctrlID).value = txtMemberPANNumber.toUpperCase();
            }
        }

        function ValidatePAN(ctrlID) {
            var txtMemberPANNumber = document.getElementById(ctrlID).value;
            if (txtMemberPANNumber.value != "") {
                var ObjVal = txtMemberPANNumber;
                var panPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                var matchArray = ObjVal.match(panPattern);

                if (matchArray == null) {
                    alert('Invalid PAN Card No.');
                    return false;
                }

                return true;
            }
        }

    </script>
    
    <title>
	Madi Ratnam Gold REGISTRATION
</title><meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" /><meta name="author" />
<link href="<?php echo base_url();?>assets/User/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/User/assets/css/metro.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/User/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/User/assets/css/style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/User/assets/css/style_responsive.css" rel="stylesheet" />
<link id="style_color" href="<?php echo base_url();?>assets/User/assets/css/style_default.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/User/assets/uniform/css/uniform.default.css" />
<link rel="shortcut icon" href="<?php echo base_url();?>assets/favicon.html" />
    <script src="<?php echo base_url();?>assets/ajax/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/ajax/frmvalidation.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/ajax/jqueryajax.js" type="text/javascript"></script>
</head>
<body class="login" style="background-image: url('<?php echo base_url();?>assets/images/Background-Textures-113.jpg');">
    <form name="Form1" method="post" action="./JoinUs.aspx" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnSubmit')" id="Form1">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="ToolkitScriptManager1_HiddenField" id="ToolkitScriptManager1_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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dWUoZXZlbnQpZAIgDw9kFgIfAAUYY29udGFpbnNBbHBoYWJldHMoZXZlbnQpZAI8DxAPFgYfAQULRGVzY3JpcHRpb24fAgUOQnVzaW5lc3NQbGFuSWQfA2dkEBUCDFBhY2thZ2UgRnJlZQxQYWNrYWdlIEZyZWUVAgEwATEUKwMCZ2cWAWZkAkAPEGRkFgBkAkYPD2QWAh8ABR9yZXR1cm4gY29udGFpbnNBbHBoYWJldHMoZXZlbnQpZAJIDw8WBB4EVGV4dAUKMjgvMDIvMjAyMB4HRW5hYmxlZGhkZAJKDxBkZBYBZmQCTA8PZBYCHwAFH3JldHVybiBDaGVja051bWVyaWNWYWx1ZShldmVudClkAk4PD2QWAh8ABR9yZXR1cm4gQ2hlY2tOdW1lcmljVmFsdWUoZXZlbnQpZAJeDxAPFgYfAQUIQmFua05hbWUfAgUGQmFua0lkHwNnZBAVNA5BTExBSEFCQUQgQkFOSxVBTUVSSUNBTiBFWFBSRVNTIEJBTksLQU5ESFJBIEJBTksNQVJZQVZBUlQgQkFOSw1BWElTIEJBTksgTFREDEJBTkRIQU4gQkFOSw5CQU5LIE9GIEJBUk9EQQ1CQU5LIE9GIElORElBEkJBTksgT0YgTUFIQVJBU1RSQSBCQVJPREEgVVRURVIgUFJBREVTSCBHUkFNSU4gQkFOSxZCT01CQVkgTUVSQ0FOVElMRSBCQU5LC0NBTkFSQSBCQU5LDENFTlRSQUwgQkFOSw9DSVRZIEJBTksgSU5ESUETQ0lUWSBVTklPTiBCQU5LIExURBBDT1JQT1JBVElPTiBCQU5LCURFTkEgQkFOSwxGRURFUkFMIEJBTksLR1JBTUlEIEJBTksESEJDTAlIREZDIEJBTkseSElORFVTVEFOIENPT1BFUkFUSVZFIEJBTksgTFREBEhTQkMOSUNJQ0kgQkFOSyBMVEQJSURCSSBCQU5LC0lORElBTiBCQU5LFElORElBTiBPVkVSU0VBUyBCQU5LEklORFVTSU5EIEJBTksgTFRELg5JTkcgVllTWUEgQkFOSxRKQU1NVSAmIEtBU0hNSVIgQkFOSxNLQVJOQVRBS0EgQkFOSyBMVEQuE0tPVEFLIE1BSEVORFJBIEJBTksYT1JJRU5UQUwgQkFOSyBPRiBDT01FUkNFGU9SSUVOVEFMIEJBTksgT0YgQ09NTUVSQ0UVUFVOSkFCIEFORCBTSU5ESCBCQU5LFFBVTkpBQiBOQVRJT05BTCBCQU5LFVNUQU5EQVJEIENIQVJURUQgQkFOSx5TVEFURSBCQU5LIE9GIEJJS0FORVIgJiBKQUlQVVIWU1RBVEUgQkFOSyBPRiBIWURSQUJBRBNTVEFURSBCQU5LIE9GIElORElBE1NUQVRFIEJBTksgT0YgSU5ET1IVU1RBVEUgQkFOSyBPRiBQQVRZQUxBF1NUQVRFIEJBTksgT0YgVFJBVkFOS09SDlNZTkRJQ0FURSBCQU5LCFVDTyBCQU5LE1VOSU9OIEJBTksgT0YgSU5ESUEUVU5JVEVEIEJBTksgT0YgSU5ESUEIVVRJIEJBTksaVVRLQVJTSCBTTUFMTCBGSU5BTkNFIEJBTkseVVRUQVIgUFJBREVTSCBDTy1PUFJBVElWRSBCQU5LClZJSllBIEJBTksIWUVTIEJBTksVNAIxNwIzMwIyMgI1MAEzAjQ1ATgCMTUCMTECNDQCMTgCMTACNDACMzQCNDcBNwE5AjUxAjQ2AjMyATUCMTQCMzUBNAE2AjQxAjE2AjI5AjMwAjIzAjI0AjE5AjEzAjI1AjI2ATECMzYCNDICMzcBMgIzOQIzOAI0MwIyNwIyOAIxMgI1MgIzMQI0OQI0OAIyMQIyMBQrAzRnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnFgFmZAJiDw9kFgIfAAUfcmV0dXJuIGNvbnRhaW5zQWxwaGFiZXRzKGV2ZW50KWQCaA8QZGQWAWZkAmoPD2QWAh8ABR9yZXR1cm4gY29udGFpbnNBbHBoYWJldHMoZXZlbnQpZAJsDxBkZBYBZmQCbg8PZBYCHwAFH3JldHVybiBDaGVja051bWVyaWNWYWx1ZShldmVudClkAnAPDxYCHwQFCjI4LzAyLzIwMjBkZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBAUGUkJMZWZ0BQZSQkxlZnQFB1JCUmlnaHQFB1JCUmlnaHQW2EpR1fXpyoLC2NnozoKx0Pi2DfR6Rr+OPIUMBZlXmg==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['Form1'];
if (!theForm) {
    theForm = document.Form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="<?php echo base_url();?>assets//WebResource.axd?d=k1gUFvWhs7Eylod3m5UHdZdjEIFsYyRbQkRAWktw7bgM-KnCZow3f6E56kCWKA9yhArbgOMHF2crsN6fgXCl9Ye_pm1tnkzBoKnwja8ooZ41&amp;t=637100578300000000" type="text/javascript"></script>


<script src="<?php echo base_url();?>assets//ScriptResource.axd?d=Vfb_POZ0IOedyselEFnbDsYH88N3v3moXehzx0abD9eibuWd5-24XgNpsFPHEguGpd-U5fRuGF0cxBwmL94N5sSmFJ4dHYT3KoMGSfH30SLkOS7vJw8wVs8zf2p1mvPxbzCdrbh9UJMaSSBceA71NA2&amp;t=ffffffffec54f2d7" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=rjng_MMCok1u1RFvm0MLYXi_L4_7sWtgkXWHTNDDpQk6foCEmMTSOmaQ9tuxNjezY6HZGi0NcVuPeuwycx1Ve17J5gav53PjlGl5rpgAi2rcPiM5K5IThEgAN-UkJrQzhga4uH0UvcF9nMZwZj5jxw2&amp;t=ffffffffec54f2d7" type="text/javascript"></script>
<script src="/JoinUs.aspx?_TSM_HiddenField_=ToolkitScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.5.40412.0%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3a1547e793-5b7e-48fe-8490-03a375b13a33%3ade1feab2%3af9cec9bc%3a35576c48" type="text/javascript"></script>
<script src="/WebResource.axd?d=XR2wVWXQBT4v5i5W-1LYeuZ00Mwry1aY6N4kDTLCTVGKTj_RzJF6i5jRxckvtCL1Cm1luMyZC51y5CVqsGreOhU96zYLP4VP83xQdQGM-go1&amp;t=637100578300000000" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
null;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B2F98CBF" />
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0" />
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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" />
</div>

        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="<?php echo base_url();?>index.php">
                <img src="<?php echo base_url();?>assets/Images/Home.png" alt="Home" /></a>
            <a href="login.aspx">
                <img src="<?php echo base_url();?>assets/Images/login.png" width="40%" alt="Login" /></a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="width: 400px">
            <!-- BEGIN LOGIN FORM -->
            <div id="pnlData">

                <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ToolkitScriptManager1', 'Form1', ['tUpdatePanel1',''], [], ['txtUser','','txtIntroducerId','','RBLeft','','RBRight','','btnSubmit','','ddlCountry','','drpLeg',''], 1000000000, '');
//]]>
</script>

                <div id="UpdatePanel1">
	
                        <div class="form-vertical login-form">
                            <h3 class="form-title">Registration</h3>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Sponser Id</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <i class="icon-user"></i>
                                        <input name="txtIntroducerId" type="text" maxlength="100" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtIntroducerId\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtIntroducerId" class="m-wrap placeholder-no-fix" />
                                        <input type="hidden" name="TextBoxWatermarkExtender2_ClientState" id="TextBoxWatermarkExtender2_ClientState" />
                                        
                                        <span id="ReqIntro" style="color: Red; visibility: hidden;">*</span>

                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Sponser Name</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <i class="icon-user"></i>
                                        <input name="txtIntroName" type="text" maxlength="100" id="txtIntroName" disabled="disabled" tabindex="2" class="m-wrap placeholder-no-fix" />
                                        <input type="hidden" name="TextBoxWatermarkExtender1_ClientState" id="TextBoxWatermarkExtender1_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group" style="display: none">
                                <label class="control-label visible-ie8 visible-ie9">Position </label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <select name="drpLeg" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;drpLeg\&#39;,\&#39;\&#39;)&#39;, 0)" id="drpLeg" class="m-wrap placeholder-no-fix" style="width: 291px;">
		<option selected="selected" value="0">Select Position</option>
		<option value="1">Left</option>
		<option value="2">Right</option>

	</select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Enter User Name</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <i class="icon-envelope"></i>
                                        <input name="txtUser" type="text" maxlength="45" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtUser\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtUser" class="m-wrap placeholder-no-fix" />&nbsp;&nbsp;
                                        

                                        <input type="hidden" name="TextBoxWatermarkExtender8_ClientState" id="TextBoxWatermarkExtender8_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Email</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <i class="icon-envelope"></i>
                                        <input name="txtEmail" type="text" maxlength="90" id="txtEmail" class="m-wrap placeholder-no-fix" />
                                        <input type="hidden" name="TextBoxWatermarkExtender3_ClientState" id="TextBoxWatermarkExtender3_ClientState" />
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Name</label>
                                <div class="controls">
                                    <div class="input-icon left">

                                        <select name="ddlTitle" id="ddlTitle" class="m-wrap placeholder-no-fix" style="font-weight: normal; width: 60px;">
                                            <option selected="selected" value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss">Miss</option>
                                            <option value="M/S">M/S</option>

                                        </select>
                                        <input name="txtMemberName" type="text" maxlength="45" id="txtMemberName" class="m-wrap placeholder-no-fix" OnKeyPress="return containsAlphabets(event)" style="width: 188px;" />
                                        <input type="hidden" name="TextBoxWatermarkExtender4_ClientState" id="TextBoxWatermarkExtender4_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Mobile No.</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <select name="ddlCountry" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlCountry" class="m-wrap placeholder-no-fix" style="width:122px;">
		<option selected="selected" value="Select Country ...">Select Country ...</option>
		<option value="1">AFG (93)</option>
		<option value="2">ALB (355)</option>
		<option value="3">DZA (213)</option>
		<option value="4">ASM (1684)</option>
		<option value="5">AND (376)</option>
		<option value="6">AGO (244)</option>
		<option value="7">AIA (1264)</option>
		<option value="8"></option>
		<option value="9">ATG (1268)</option>
		<option value="10">ARG (54)</option>
		<option value="11">ARM (374)</option>
		<option value="12">ABW (297)</option>
		<option value="13">AUS (61)</option>
		<option value="14">AUT (43)</option>
		<option value="15">AZE (994)</option>
		<option value="16">BHS (1242)</option>
		<option value="17">BHR (973)</option>
		<option value="18">BGD (880)</option>
		<option value="19">BRB (1246)</option>
		<option value="20">BLR (375)</option>
		<option value="21">BEL (32)</option>
		<option value="22">BLZ (501)</option>
		<option value="23">BEN (229)</option>
		<option value="24">BMU (1441)</option>
		<option value="25">BTN (975)</option>
		<option value="26">BOL (591)</option>
		<option value="27">BIH (387)</option>
		<option value="28">BWA (267)</option>
		<option value="29"></option>
		<option value="30">BRA (55)</option>
		<option value="31"></option>
		<option value="32">BRN (673)</option>
		<option value="33">BGR (359)</option>
		<option value="34">BFA (226)</option>
		<option value="35">BDI (257)</option>
		<option value="36">KHM (855)</option>
		<option value="37">CMR (237)</option>
		<option value="38">CAN (1)</option>
		<option value="39">CPV (238)</option>
		<option value="40">CYM (1345)</option>
		<option value="41">CAF (236)</option>
		<option value="42">TCD (235)</option>
		<option value="43">CHL (56)</option>
		<option value="44">CHN (86)</option>
		<option value="45"></option>
		<option value="46"></option>
		<option value="47">COL (57)</option>
		<option value="48">COM (269)</option>
		<option value="49">COG (242)</option>
		<option value="50">COD (242)</option>
		<option value="51">COK (682)</option>
		<option value="52">CRI (506)</option>
		<option value="53">CIV (225)</option>
		<option value="54">HRV (385)</option>
		<option value="55">CUB (53)</option>
		<option value="56">CYP (357)</option>
		<option value="57">CZE (420)</option>
		<option value="58">DNK (45)</option>
		<option value="59">DJI (253)</option>
		<option value="60">DMA (1767)</option>
		<option value="61">DOM (1809)</option>
		<option value="62">ECU (593)</option>
		<option value="63">EGY (20)</option>
		<option value="64">SLV (503)</option>
		<option value="65">GNQ (240)</option>
		<option value="66">ERI (291)</option>
		<option value="67">EST (372)</option>
		<option value="68">ETH (251)</option>
		<option value="69">FLK (500)</option>
		<option value="70">FRO (298)</option>
		<option value="71">FJI (679)</option>
		<option value="72">FIN (358)</option>
		<option value="73">FRA (33)</option>
		<option value="74">GUF (594)</option>
		<option value="75">PYF (689)</option>
		<option value="76"></option>
		<option value="77">GAB (241)</option>
		<option value="78">GMB (220)</option>
		<option value="79">GEO (995)</option>
		<option value="80">DEU (49)</option>
		<option value="81">GHA (233)</option>
		<option value="82">GIB (350)</option>
		<option value="83">GRC (30)</option>
		<option value="84">GRL (299)</option>
		<option value="85">GRD (1473)</option>
		<option value="86">GLP (590)</option>
		<option value="87">GUM (1671)</option>
		<option value="88">GTM (502)</option>
		<option value="89">GIN (224)</option>
		<option value="90">GNB (245)</option>
		<option value="91">GUY (592)</option>
		<option value="92">HTI (509)</option>
		<option value="93"></option>
		<option value="94">VAT (39)</option>
		<option value="95">HND (504)</option>
		<option value="96">HKG (852)</option>
		<option value="97">HUN (36)</option>
		<option value="98">ISL (354)</option>
		<option value="99">IND (91)</option>
		<option value="100">CountryIdN (62)</option>
		<option value="101">IRN (98)</option>
		<option value="102">IRQ (964)</option>
		<option value="103">IRL (353)</option>
		<option value="104">ISR (972)</option>
		<option value="105">ITA (39)</option>
		<option value="106">JAM (1876)</option>
		<option value="107">JPN (81)</option>
		<option value="108">JOR (962)</option>
		<option value="109">KAZ (7)</option>
		<option value="110">KEN (254)</option>
		<option value="111">KIR (686)</option>
		<option value="112">PRK (850)</option>
		<option value="113">KOR (82)</option>
		<option value="114">KWT (965)</option>
		<option value="115">KGZ (996)</option>
		<option value="116">LAO (856)</option>
		<option value="117">LVA (371)</option>
		<option value="118">LBN (961)</option>
		<option value="119">LSO (266)</option>
		<option value="120">LBR (231)</option>
		<option value="121">LBY (218)</option>
		<option value="122">LIE (423)</option>
		<option value="123">LTU (370)</option>
		<option value="124">LUX (352)</option>
		<option value="125">MAC (853)</option>
		<option value="126">MKD (389)</option>
		<option value="127">MDG (261)</option>
		<option value="128">MWI (265)</option>
		<option value="129">MYS (60)</option>
		<option value="130">MDV (960)</option>
		<option value="131">MLI (223)</option>
		<option value="132">MLT (356)</option>
		<option value="133">MHL (692)</option>
		<option value="134">MTQ (596)</option>
		<option value="135">MRT (222)</option>
		<option value="136">MUS (230)</option>
		<option value="137"></option>
		<option value="138">MEX (52)</option>
		<option value="139">FSM (691)</option>
		<option value="140">MDA (373)</option>
		<option value="141">MCO (377)</option>
		<option value="142">MNG (976)</option>
		<option value="143">MSR (1664)</option>
		<option value="144">MAR (212)</option>
		<option value="145">MOZ (258)</option>
		<option value="146">MMR (95)</option>
		<option value="147">NAM (264)</option>
		<option value="148">NRU (674)</option>
		<option value="149">NPL (977)</option>
		<option value="150">NLD (31)</option>
		<option value="151">ANT (599)</option>
		<option value="152">NCL (687)</option>
		<option value="153">NZL (64)</option>
		<option value="154">NIC (505)</option>
		<option value="155">NER (227)</option>
		<option value="156">NGA (234)</option>
		<option value="157">NIU (683)</option>
		<option value="158">NFK (672)</option>
		<option value="159">MNP (1670)</option>
		<option value="160">NOR (47)</option>
		<option value="161">OMN (968)</option>
		<option value="162">PAK (92)</option>
		<option value="163">PLW (680)</option>
		<option value="164"></option>
		<option value="165">PAN (507)</option>
		<option value="166">PNG (675)</option>
		<option value="167">PRY (595)</option>
		<option value="168">PER (51)</option>
		<option value="169">PHL (63)</option>
		<option value="170">PCN (0)</option>
		<option value="171">POL (48)</option>
		<option value="172">PRT (351)</option>
		<option value="173">PRI (1787)</option>
		<option value="174">QAT (974)</option>
		<option value="175">REU (262)</option>
		<option value="176">ROM (40)</option>
		<option value="177">RUS (70)</option>
		<option value="178">RWA (250)</option>
		<option value="179">SHN (290)</option>
		<option value="180">KNA (1869)</option>
		<option value="181">LCA (1758)</option>
		<option value="182">SPM (508)</option>
		<option value="183">VCT (1784)</option>
		<option value="184">WSM (684)</option>
		<option value="185">SMR (378)</option>
		<option value="186">STP (239)</option>
		<option value="187">SAU (966)</option>
		<option value="188">SEN (221)</option>
		<option value="189"></option>
		<option value="190">SYC (248)</option>
		<option value="191">SLE (232)</option>
		<option value="192">SGP (65)</option>
		<option value="193">SVK (421)</option>
		<option value="194">SVN (386)</option>
		<option value="195">SLB (677)</option>
		<option value="196">SOM (252)</option>
		<option value="197">ZAF (27)</option>
		<option value="198"></option>
		<option value="199">ESP (34)</option>
		<option value="200">LKA (94)</option>
		<option value="201">SDN (249)</option>
		<option value="202">SUR (597)</option>
		<option value="203">SJM (47)</option>
		<option value="204">SWZ (268)</option>
		<option value="205">SWE (46)</option>
		<option value="206">CHE (41)</option>
		<option value="207">SYR (963)</option>
		<option value="208">TWN (886)</option>
		<option value="209">TJK (992)</option>
		<option value="210">TZA (255)</option>
		<option value="211">THA (66)</option>
		<option value="212"></option>
		<option value="213">TGO (228)</option>
		<option value="214">TKL (690)</option>
		<option value="215">TON (676)</option>
		<option value="216">TTO (1868)</option>
		<option value="217">TUN (216)</option>
		<option value="218">TUR (90)</option>
		<option value="219">TKM (7370)</option>
		<option value="220">TCA (1649)</option>
		<option value="221">TUV (688)</option>
		<option value="222">UGA (256)</option>
		<option value="223">UKR (380)</option>
		<option value="224">ARE (971)</option>
		<option value="225">GBR (44)</option>
		<option value="226">USA (1)</option>
		<option value="227"></option>
		<option value="228">URY (598)</option>
		<option value="229">UZB (998)</option>
		<option value="230">VUT (678)</option>
		<option value="231">VEN (58)</option>
		<option value="232">VNM (84)</option>
		<option value="233">VGB (1284)</option>
		<option value="234">VIR (1340)</option>
		<option value="235">WLF (681)</option>
		<option value="236">ESH (212)</option>
		<option value="237">YEM (967)</option>
		<option value="238">ZMB (260)</option>
		<option value="239">ZWE (263)</option>

	</select>                                        
                                        <input name="txtMobileNumber" type="text" maxlength="13" id="txtMobileNumber" onchange="CheckNumericValue(e)" class="m-wrap placeholder-no-fix" OnKeyPress="return CheckNumericValue(event)" style="width:127px;position: static" />
                                        <input type="hidden" name="TextBoxWatermarkExtender5_ClientState" id="TextBoxWatermarkExtender5_ClientState" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">City/State </label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <input name="txtCity" type="text" id="txtCity" tabindex="23" class="m-wrap placeholder-no-fix" OnKeyPress="containsAlphabets(event)" />
                                        <input type="hidden" name="TextBoxWatermarkExtender7_ClientState" id="TextBoxWatermarkExtender7_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Country</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Pan Number</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <input name="txtAdd" type="text" id="txtAdd" tabindex="19" class="m-wrap placeholder-no-fix" style="position: static" />
                                        <input type="hidden" name="TextBoxWatermarkExtender6_ClientState" id="TextBoxWatermarkExtender6_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Pan Number</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <input name="txtMemberPANNumber" type="text" maxlength="10" id="txtMemberPANNumber" onkeypress="UpperCase(&#39;panno&#39;);" onkeyup="UpperCase(&#39;panno&#39;);" onchange="return ValidatePAN(&#39;panno&#39;)" class="m-wrap placeholder-no-fix" />
                                        <input type="hidden" name="TextBoxWatermarkExtender9_ClientState" id="TextBoxWatermarkExtender9_ClientState" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label visible-ie8 visible-ie9">Gender</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <select name="ddlGender" id="ddlGender" class="m-wrap placeholder-no-fix" style="width: 291px;">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <label class="checkbox">
                                    <span style="color: Red;">
                                        <input id="rdchk" type="checkbox" name="rdchk" /></span>  * I accept the <a id="fancybox-manual-b" href="javascript:;">Terms and Conditions</a>

                                </label>
                                <input type="submit" name="btnSubmit" value="Register" onclick="return Validate();" id="btnSubmit" class="btn green pull-right" style="color: White;" />


                                <i class="m-icon-swapright m-icon-white"></i>
                            </div>
                            <div style="display: none">
                                
                                
                                
                                <span style="font-family:Trebuchet MS;font-size:10pt;font-weight:bold;position: static"><input id="RBLeft" type="radio" name="RBLeft" value="RBLeft" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;RBLeft\&#39;,\&#39;\&#39;)&#39;, 0)" tabindex="8" /><label for="RBLeft">Left</label></span>
                                <span style="display:inline-block;font-family:Trebuchet MS;font-size:10pt;font-weight:bold;width:70px;position: static"><input id="RBRight" type="radio" name="RBRight" value="RBRight" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;RBRight\&#39;,\&#39;\&#39;)&#39;, 0)" tabindex="9" /><label for="RBRight">Right</label></span>
                                
                                
                                
                                
                                

                   <?php $this->load->view('footer')?>             
                                
                                
                                
                                
                                
                                <input name="txtPincode" type="text" maxlength="6" id="txtPincode" tabindex="20" onchange="CheckNumericValue(e)" OnKeyPress="return CheckNumericValue(event)" style="width:124px;position: static" />
                                <select name="ddlState" id="ddlState" tabindex="22" style="width:221px;">

	</select>
                                <input name="txtPassword" type="text" id="txtPassword" tabindex="25" style="width:191px;" />
                                
                                
                                
                                
                                <input name="txtMemberAccountNumber" type="text" id="txtMemberAccountNumber" tabindex="27" style="width:221px;position: static" />
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    
</div>
            </div>


        </div>
        
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
WebForm_AutoFocus('txtIntroducerId');Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender2_ClientState","WatermarkText":"Enter Sponser ID","id":"TextBoxWatermarkExtender2"}, null, null, $get("txtIntroducerId"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender1_ClientState","WatermarkText":"Sponser Name","id":"TextBoxWatermarkExtender1"}, null, null, $get("txtIntroName"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender8_ClientState","WatermarkText":"User Id Which You Want","id":"TextBoxWatermarkExtender8"}, null, null, $get("txtUser"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender3_ClientState","WatermarkText":"Write Your Email","id":"TextBoxWatermarkExtender3"}, null, null, $get("txtEmail"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender4_ClientState","WatermarkText":"Write Full Name","id":"TextBoxWatermarkExtender4"}, null, null, $get("txtMemberName"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender5_ClientState","WatermarkText":"Phone Number","id":"TextBoxWatermarkExtender5"}, null, null, $get("txtMobileNumber"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender7_ClientState","WatermarkText":"City/State","id":"TextBoxWatermarkExtender7"}, null, null, $get("txtCity"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender6_ClientState","WatermarkText":"Address","id":"TextBoxWatermarkExtender6"}, null, null, $get("txtAdd"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"TextBoxWatermarkExtender9_ClientState","WatermarkText":"Pan Number","id":"TextBoxWatermarkExtender9"}, null, null, $get("txtMemberPANNumber"));
});
//]]>
</script>
</form>
</body>
</html>
