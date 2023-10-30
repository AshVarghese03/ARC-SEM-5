<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
}

?>
<script src="https://cdn03.jotfor.ms/static/prototype.forms.js?3.3.46250" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.46250" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms//js/punycode-1.4.1.min.js"></script>
<script src="https://cdn03.jotfor.ms/js/payments/validategateways.js?v=3.3.46250" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.texts = {"confirmEmail":"E-mail does not match","pleaseWait":"Please wait...","validateEmail":"You need to validate this e-mail","confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","required":"This field is required.","requireOne":"At least one field required.","requireEveryRow":"Every row is required.","requireEveryCell":"Every cell is required.","email":"Enter a valid e-mail address","alphabetic":"This field can only contain letters","numeric":"This field can only contain numeric values","alphanumeric":"This field can only contain letters and numbers.","cyrillic":"This field can only contain cyrillic characters","url":"This field can only contain a valid URL","currency":"This field can only contain currency values.","fillMask":"Field value must fill mask.","uploadExtensions":"You can only upload following files:","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","gradingScoreError":"Score total should only be less than or equal to","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","maxDigitsError":"The maximum digits allowed is","minCharactersError":"The number of characters should not be less than the minimum value:","freeEmailError":"Free email accounts are not allowed","minSelectionsError":"The minimum required number of selections is ","maxSelectionsError":"The maximum number of selections allowed is ","pastDatesDisallowed":"Date must not be in the past.","dateLimited":"This date is unavailable.","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","ageVerificationError":"You must be older than {minAge} years old to submit this form.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","chooseAFile_infoMessage":"Choose a file","maxFileSize_infoMessage":"Max. file size","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","ccInvalidNumber":"Credit Card Number is invalid.","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingProduct":"Please select at least one product.","ccMissingDonation":"Please enter numeric values for donation amount.","disallowDecimals":"Please enter a whole number.","restrictedDomain":"This domain is not allowed","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","requiredLegend":"All fields marked with * are required and must be filled.","geoPermissionTitle":"Permission Denied","geoPermissionDesc":"Check your browser's privacy settings.","geoNotAvailableTitle":"Position Unavailable","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoTimeoutTitle":"Timeout","geoTimeoutDesc":"Please check your internet connection and try again.","appointmentSelected":"You’ve selected {time} on {date}","noSlotsAvailable":"No slots available","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","multipleError":"There are {count} errors on this page. Please correct them before moving on.","oneError":"There is {count} error on this page. Please correct it before moving on.","doneMessage":"Well done! All errors are fixed.","doneButton":"Done","reviewSubmitText":"Review and Submit","nextButtonText":"Next","prevButtonText":"Previous","seeErrorsButton":"See Errors","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","soldOut":"Sold Out","justSoldOut":"Just Sold Out","selectionSoldOut":"Selection Sold Out","subProductItemsLeft":"({count} items left)","startButtonText":"START","submitButtonText":"Submit"};
	JotForm.newPaymentUI = true;
	JotForm.highlightInputs = false;
	JotForm.submitError="jumpToFirstError";
	window.addEventListener('DOMContentLoaded',function(){window.brandingFooter.init({"formID":232815849260461,"campaign":"powered_by_jotform_le","isCardForm":false,"isLegacyForm":true})});	JotForm.isFullSource = true;

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);

    $('input_30').rating({stars:'5',
    inputClassName:'form-textbox',
    imagePath: 'https://cdn.jotfor.ms/images/stars_v2.png',
    cleanFirst:true, value:''});
$('input_30').setAttribute('role','radiogroup');
$('input_30').setAttribute('aria-labelledby','label_30');

    Array.from($('input_30').children).map(function(e, i){e.setAttribute('tabindex',0);
    if(i<5) {e.setAttribute('aria-label',(i+1)+' out of 5');}
    e.setAttribute('role','radio');
    e.setAttribute('aria-describedby', 'label_30');
    e.classList.add('form-star-rating-star', 'Stars');
    e.onkeypress = function(k){if(k.keyCode == 13 || k.keyCode == 32)e.click()}});
	/*INIT-END*/
	});

   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"submit","qid":"14","text":"Submit","type":"control_button"},null,null,{"name":"wouldYou17","qid":"17","text":"Would you recommend it to your friends and colleagues?","type":"control_radio"},null,{"name":"doYou","qid":"19","text":"Do you have any suggestions to improve our product and service?","type":"control_textarea"},null,{"name":"clickTo21","qid":"21","text":"Please leave your email address if you would like us to contact you regarding any questions.","type":"control_text"},null,null,null,null,{"name":"clickTo26","qid":"26","text":"Product Customer Feedback Form ","type":"control_head"},{"name":"fullName27","qid":"27","text":"Full Name","type":"control_fullname"},{"name":"emailAddress","qid":"28","subLabel":"example@example.com","text":"E-mail Address","type":"control_email"},{"name":"toThe","qid":"29","text":"To the best of your knowledge, is this feedback something that others in your situation would also share?","type":"control_radio"},{"name":"howSatisfied30","qid":"30","text":"How satisfied are you with our company overall?","type":"control_rating"}]);}, 20); 
</script>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/form-common.css?v=3ba882e
"/>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.46250&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.46250" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.46250" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.46250">
<style type="text/css" id="form-designer-style">



    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/232815849260461" method="post" name="form_232815849260461" id="232815849260461" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="232815849260461" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_26" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Top">
            <div class="header-logo"><img src="https://www.jotform.com/uploads/waltermiller/form_files/Untitled%20design%20-%202022-04-21T094936.587.6260fe8c8b4335.62147908.png" alt="Product Customer Feedback Form " width="100" class="header-logo-top" /></div>
            <div class="header-text httac htvam">
              <h1 id="header_26" class="form-header" data-component="header">Product Customer Feedback Form </h1>
              <div id="subHeader_26" class="form-subHeader">Thank you for taking time to provide feedback. We appreciate hearing from you and will review your comments carefully. </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_17"><label class="form-label form-label-top form-label-auto" id="label_17" for="input_17" aria-hidden="false"> Would you recommend it to your friends and colleagues? </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_17" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_0" name="q17_wouldYou17" value="Yes" /><label id="label_input_17_0" for="input_17_0">Yes</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_1" name="q17_wouldYou17" value="No" /><label id="label_input_17_1" for="input_17_1">No</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_19"><label class="form-label form-label-top form-label-auto" id="label_19" for="input_19" aria-hidden="false"> Do you have any suggestions to improve our product and service? </label>
        <div id="cid_19" class="form-input-wide" data-layout="full"> <textarea id="input_19" class="form-textarea" name="q19_doYou" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_19"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_rating" id="id_30"><label class="form-label form-label-top form-label-auto" id="label_30" for="input_30" aria-hidden="false"> How satisfied are you with our company overall? </label>
        <div id="cid_30" class="form-input-wide" data-layout="full">
          <div id="input_30" name="q30_howSatisfied30" data-component="rating" data-version="v2"><select name="q30_howSatisfied30">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select></div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_29"><label class="form-label form-label-top form-label-auto" id="label_29" for="input_29" aria-hidden="false"> To the best of your knowledge, is this feedback something that others in your situation would also share? </label>
        <div id="cid_29" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_29" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_0" name="q29_toThe" value="Yes" /><label id="label_input_29_0" for="input_29_0">Yes</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_1" name="q29_toThe" value="No" /><label id="label_input_29_1" for="input_29_1">No</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_21">
        <div id="cid_21" class="form-input-wide" data-layout="full">
          <div id="text_21" class="form-html" data-component="text" tabindex="0">
            <p style="text-align:center;">Please leave your email address if you would like us to contact you regarding any questions.</p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_27"><label class="form-label form-label-top" id="label_27" for="first_27" aria-hidden="false"> Full Name </label>
        <div id="cid_27" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_27" name="q27_fullName27[first]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_27 given-name" size="10" value="" data-component="first" aria-labelledby="label_27 sublabel_27_first" /><label class="form-sub-label" for="first_27" id="sublabel_27_first" style="min-height:13px" aria-hidden="false">First Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"><input type="text" id="last_27" name="q27_fullName27[last]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_27 family-name" size="15" value="" data-component="last" aria-labelledby="label_27 sublabel_27_last" /><label class="form-sub-label" for="last_27" id="sublabel_27_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_email" id="id_28"><label class="form-label form-label-top" id="label_28" for="input_28" aria-hidden="false"> E-mail Address </label>
        <div id="cid_28" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_28" name="q28_emailAddress" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_28 sublabel_input_28" /><label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false">example@example.com</label></span> </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_14">
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField"><button id="input_14" type="submit" class="form-submit-button form-submit-button-simple_black submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Submit</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="232815849260461" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='232815849260461'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "232815849260461-232815849260461";
    }
  </script>
</form><script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.46250"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.46250"></script>
<script type="text/javascript">JotForm.isNewSACL=true;</script>