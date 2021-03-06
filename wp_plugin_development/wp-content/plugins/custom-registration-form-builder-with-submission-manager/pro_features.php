<?php
/*Controls custom field creation in the dashboard area*/
global $wpdb;
$textdomain = 'custom-registration-form-pro-with-submission-manager';
$crf_forms =$wpdb->prefix."crf_forms";
$path =  plugin_dir_url(__FILE__); 
?>
<style>
h3{
	 font-size:15px;
	 margin-bottom:50px;
	color:#646464;
}
.cler{
	clear:both;
}
#pro-features{
float: left;
font-family: "Roboto",sans-serif;
margin-left: 30px;
margin-top: 35px;
max-width: 883px;
width: 100%;
margin-bottom: 50px;
}
#pro-features .pro-features-gold-right{
	background:#fff;
	position:relative;
    box-shadow: 0 1px 2px -1px #c7c7c7;
	height:auto;
	width:400px;
	padding:10px;
	padding-bottom:60px;
	margin-top:-110px;
	margin-left:232px;
}
#pro-features h1{
	color:#646464;
	font-weight:bold;
	margin:0;
	font-size:19px;
	text-align:center;
}
#pro-features .silver-link{
	padding-left:55px;
	padding-right:55px;
	margin:0;
}
#pro-features .silver-link li{
	list-style:none;
	color:#4b4b4b;
	font-size:14px;
	padding-top:15px;
	margin:0 !important;
}
#pro-features .silver-link .manual-icon{
	background:url(<?php echo $path; ?>images/manual_approvals.png) no-repeat left center;
	padding-left:40px;
	
}
#pro-features .silver-link .role-icon{
	background:url(<?php echo $path; ?>images/user_roles.png) no-repeat left center;
	padding-left:40px;
}
#pro-features .silver-link .export-icon{
	background:url(<?php echo $path; ?>images/export-icon.png) no-repeat left center;
	padding-left:40px;
}
#pro-features .silver-link .file-icon{
	background:url(<?php echo $path; ?>images/file-icon.png) no-repeat left center;
	padding-left:40px;
}
#pro-features .silver-link .form-analytics{
	background:url(<?php echo $path; ?>images/form-analytics.png) no-repeat left center;
	padding-left:40px;
}
#pro-features .silver-link .field-analytics{
	background:url(<?php echo $path; ?>images/fieldanalytics.png) no-repeat left center;
	padding-left:40px;
}

#pro-features .silver-link li span{
	border-bottom:1px solid #e1e1e1;
	padding-bottom:15px;
	display:block;
	
}
#pro-features button{
	border:none;
	cursor:pointer;
}
.button-box{
	text-align:center;
	padding-left:128px;
}
.pro-features-silver-left .pro-silver-btn{
	text-align:center;
	background:url(<?php echo $path; ?>images/silver-btn-bg.png) no-repeat center;
	width:144px;
	height:69px;
	display:block;
	margin-top:40px;
	margin-bottom:40px;
	font-weight:bold;
	font-size:35px;
	color:#969696;

}
.pro-features-gold-right .pro-gold-btn{
	text-align:center;
	background:url(<?php echo $path; ?>images/silver-btn-bg.png) no-repeat center;
	width:144px;
	height:69px;
	display:block;
	margin-top:40px;
	margin-bottom:40px;
	font-weight:bold;
	font-size:35px;
	color:#969696;
	cursor:default !important;
	outline:none !important;
}
.pro-footer{
	text-align:center;
	margin-left:-10px;
	margin-right:-10px;
}
.pro-footer h4{
	color:#969696;
	font-weight:bold;
	border-top:1px solid #e1e1e1;
	padding-top:15px;
	margin-top:50px;
	margin-bottom:15px;
	font-size:14px;
}
.pro-footer a{
	text-decoration:none;
	color:#fff;
	font-size:15px;
	text-transform:uppercase;
	font-weight:normal;
	line-height:100px;
}
.pro-footer .green-box{
	box-shadow: 0 1px 2px -1px #c7c7c7;
	position:absolute;
	background:#ff6c6c;
	border-radius:50%;
	height:100px;
	width:100px;
	margin-left:160px;
	margin-top:0px;
}
.pro-features-silver-left .pro-footer h4{
	margin-top:148px;}

/*******popup-css*******/

.manual-approval-popup .popup_html{
	width:355px;
	background:#fff;
	margin-right:10px;
	margin-bottom:10px;
	float:left;
	padding:15px;
}

.manual-approval-popup h3{
	margin:0;
	color:#646464;
	font-size:12px !important;
	margin-bottom:50px;
}
.auto-generated{
	min-height:50px;
	color:#646464;
	font-size:17px;
}
.password-icon{
	background:url(<?php echo $path; ?>images/input-button.png)  no-repeat;
	display:block;
	float:right;
	width:56px;
	height:40px;
	margin-top:-10px;
}
.tex-popup{
	color:#4b4b4b;
	font-size:15px;
}
.tex-popup p{
	color:#4b4b4b;
	font-size:15px;
}
.popup-footer{
	border-top:1px solid #e1e1e1;
	padding-top:12px;
	margin-left:-10px;
	margin-right:-10px;
	text-align:center;
}
.popup-footer a{
	text-decoration:none;
	color:#4aa5f5;
	font-size:15px;
}

.role-based-popup .popup_html{
	width:355px;
	background:#fff;
	float:left;
	padding:15px;
	margin-right:10px;
	margin-bottom:10px;
}
.role-based-popup h3{
	margin:0;
	color:#646464;
	font-size:18px !important;
	margin-bottom:20px;
}
.export-excel-popup .popup_html{
	width:355px;
	background:#fff;
	float:left;
	padding:15px;
	margin-right:10px;
	margin-bottom:10px;
}
.export-excel-popup h3{
	margin:0;
	color:#646464;
	font-size:18px !important;
	margin-bottom:20px;
}
.file-attachment-popup .popup_html{
	margin-right:10px;
	margin-bottom:10px;
	width:355px;
	background:#fff;
	float:left;
	padding:15px;
}
.file-attachment-popup h3{
	margin:0;
	color:#646464;
	font-size:18px !important;
	margin-bottom:20px;
}
.form-analytics-popup{
	margin-right:10px;
	margin-bottom:10px;
	width:355px;
	background:#fff;
	float:left;
	padding:15px;
}
.form-analytics-popup h3{
	margin:0;
	color:#646464;
	font-size:18px !important;
	margin-bottom:20px;
}
.field-analytics-popup .popup_html{
	margin-right:10px;
	margin-bottom:10px;
	width:355px;
	background:#fff;
	float:left;
	padding:12px;
}
.field-analytics-popup h3{
	margin:0;
	color:#646464;
	font-size:18px !important;
	margin-bottom:20px;
}

#pro-features .silver-link li .pro-right-icon{
    background:url(<?php echo $path; ?>images/pro-right-icon.png) no-repeat right top;
    position:relative;
    margin-right:-30px;
    padding-bottom:0;
    margin-top:-2px;
    float:right;
    border-bottom:none;
    display:block;
    width:24px;
    height:24px;
	cursor:pointer;
}

.ui-tooltip {
box-shadow:10px #c7c7c7; min-width:380px;
border-radius:0px;
border:0px; float:left;
}
.ui-tooltip .ui-tooltip-content .popup_html { width:355px;
	background:#fff;
	padding:15px;
	margin-right:10px;
	margin-bottom:10px; float:left;}
.new-pro-features-hedding{
	font-weight:normal !important;
}
.green-box a{
	line-height:normal;
	position:relative;
	top:35px;
}
.pro-banner{
	background:#87c3bf;
	padding-top:14px;
	min-height:211px;
	text-align:center;
}
.pro-banner p {font-family: "Roboto",sans-serif;
    color: #fff;
    font-size: 20px;}
</style>

<div id="pro-features">

    <div class="pro-banner">
    <p>Liked what you saw so far? Want more? Our SILVER EDITION adds a host of new features. Sign up below for instant access.</p>
    </div>
    
    <div class="pro-features-gold-right">
    <h1 class="new-pro-features-hedding">Custom User Registration <strong>Form Builder</strong></h1>
    <div class="button-box">
    <button class="pro-gold-btn">Silver</button>
    </div>
    <ul class="silver-link">
        <li class="manual-icon"><span>Manual User Approvals<span class="pro-right-icon" onMouseOver="crftooltip2(this,'.manual-approval-popup')" title=""></span></span></span>
        </li>
        <li class="role-icon"><span>Role Based Forms<span class="pro-right-icon" onMouseOver="crftooltip2(this,'.role-based-popup')" title=""></span></span></span></li>
        <li class="export-icon"><span>Export Submissions to Excel<span class="pro-right-icon" onMouseOver="crftooltip2(this,'.export-excel-popup')" title=""></span></span></span></li>
        <li class="file-icon"><span>File Attachment Field (Repeatable)<span class="pro-right-icon" onMouseOver="crftooltip2(this,'.file-attachment-popup')" title=""></span></span></span></li>
        <li class="field-analytics"><span>Field Analytics<span class="pro-right-icon" onMouseOver="crftooltip2(this,'.field-analytics-popup')" title=""></span></span></span></li>
        </ul>
        <div class="pro-footer">
        <h4>19.95 USD</h4>
        <div class="green-box">
        <a href="http://registrationmagic.com/?download_id=317&edd_action=add_to_cart" target="_blank">UPGRADE NOW</a></div>
        </div>
    
    
    </div><!-------pro-features-gold-right----->
    <div class="cler"></div><!------clerdiv-------->
    <div id="popup" style="display:none;">
       <div class="manual-approval-popup">
       <div class="popup_html">
         <h3>Manual User Approval</h3>
         <div class="auto-generated">
           Auto-Approve Registrations
           <span class="password-icon"></span>
         </div>
         <div class="tex-popup">
         <p>Instead of automatically creating user account on 
           submitting the form, manual approvals allow you to
           check and manually approve each registration.</p>
         </div>
       </div>
       </div>
       
       
       <div class="role-based-popup">
       <div class="popup_html">
       <h3>Role Based Forms</h3>
         <div class="img-box">
         <img src="<?php echo $path; ?>images/role-base.jpg">
         </div>
         <div class="tex-popup">
         <p>You can now assign roles to forms, so that the registered
users are automatically assigned a role. You also have 
the option to allow users to choose roles.</p>
         </div>
       </div>
       </div>
       
       
       <div class="export-excel-popup">
       <div class="popup_html">
       <h3>Export Submissions to Excel</h3>
         <div class="img-box">
         <img src="<?php echo $path; ?>images/Submissions.jpg">
         </div>
         <div class="tex-popup">
         <p>Want all your submissions in a spreadsheet to analyze or
for uploading to your favorite mailing app? This option 
allows you to do that with click of a button.</p>
         </div>
       </div>
       </div>
       
       
       
       <div class="file-attachment-popup">
       <div class="popup_html">
       <h3>File Attachment Field</h3>
          <div class="img-box">
         <img src="<?php echo $path; ?>images/attch-img.jpg">
         </div>
         <div class="tex-popup">
         <p>Instead of automatically creating user account on 
           submitting the form, manual approvals allow you to
           check and manually approve each registration.</p>
         </div>
       </div>
       </div>
       
       
       <div class="form-analytics-popup">
       <div class="popup_html">
       <h3>Form Analytics</h3>
         <div class="img-box">
         <img src="<?php echo $path; ?>images/form-analytics.jpg">
         </div>
         <div class="tex-popup">
         <p>Want all your submissions in a spreadsheet to analyze or
for uploading to your favorite mailing app? This option 
allows you to do that with click of a button.</p>
         </div>
       </div>
       </div>
       
       
       <div class="field-analytics-popup">
       <div class="popup_html">
       <h3>Field Analytics</h3>
         <div class="img-box">
         <img src="<?php echo $path; ?>images/field-analytics-pop.png">
         </div>
         <div class="tex-popup">
         <p>Automatically turn your checkbox, multi-select and radio
fields into insightful pie charts to understand what your
users are selecting.</p>
         </div>
       </div>
       </div>
    
    </div>
    
    <div class="cler"></div><!------clerdiv-------->

</div><!-------Pro-features----->
<script>
function crftooltip2(a,b) {
	html = jQuery(b).html();
    jQuery(a).tooltip({
		position: {
        my: "left top",
        at: "right+5 top-5"},
		width:'350px',
      content: html
    });
  }
</script>
<script>
  jQuery(function() {
    var tooltips = jQuery( ".pro-right-icon" ).tooltip({
      position: {
        my: "left top",
        at: "right+5 top-5"
      }
    });
  });
  </script>