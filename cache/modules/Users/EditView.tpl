

{$ROLLOVER}
<script type="text/javascript" src="{sugar_getjspath file='modules/Emails/javascript/vars.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_emails.js'}"></script>
<link rel="stylesheet" type="text/css" href="{sugar_getjspath file='modules/Users/PasswordRequirementBox.css'}">
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type='text/javascript' src='{sugar_getjspath file='include/SubPanel/SubPanelTiles.js'}'></script>
<script type='text/javascript'>
var ERR_RULES_NOT_MET = '{$MOD.ERR_RULES_NOT_MET}';
var ERR_ENTER_OLD_PASSWORD = '{$MOD.ERR_ENTER_OLD_PASSWORD}';
var ERR_ENTER_NEW_PASSWORD = '{$MOD.ERR_ENTER_NEW_PASSWORD}';
var ERR_ENTER_CONFIRMATION_PASSWORD = '{$MOD.ERR_ENTER_CONFIRMATION_PASSWORD}';
var ERR_REENTER_PASSWORDS = '{$MOD.ERR_REENTER_PASSWORDS}';
</script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/User.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/UserEditView.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/PasswordRequirementBox.js'}'></script>
{$ERROR_STRING}
<!-- This is here for the external API forms -->
<form name="DetailView" id="DetailView" method="POST" action="index.php">
<input type="hidden" name="record" id="record" value="{$ID}">
<input type="hidden" name="module" value="Users">
<input type="hidden" name="return_module" value="Users">
<input type="hidden" name="return_id" value="{$RETURN_ID}">
<input type="hidden" name="return_action" value="EditView">
</form>
<form name="EditView" enctype="multipart/form-data" id="EditView" method="POST" action="index.php">
<input type="hidden" name="display_tabs_def">
<input type="hidden" name="hide_tabs_def">
<input type="hidden" name="remove_tabs_def">
<input type="hidden" name="module" value="Users">
<input type="hidden" name="record" id="record" value="{$ID}">
<input type="hidden" name="action">
<input type="hidden" name="page" value="EditView">
<input type="hidden" name="return_module" value="{$RETURN_MODULE}">
<input type="hidden" name="return_id" value="{$RETURN_ID}">
<input type="hidden" name="return_action" value="{$RETURN_ACTION}">
<input type="hidden" name="password_change" id="password_change" value="false">
<input type="hidden" name="required_password" id="required_password" value='{$REQUIRED_PASSWORD}' >
<input type="hidden" name="old_user_name" value="{$USER_NAME}">
<input type="hidden" name="type" value="{$REDIRECT_EMAILS_TYPE}">
<input type="hidden" id="is_group" name="is_group" value='{$IS_GROUP}' {$IS_GROUP_DISABLED}>
<input type="hidden" id='portal_only' name='portal_only' value='{$IS_PORTALONLY}' {$IS_PORTAL_ONLY_DISABLED}>
<input type="hidden" name="is_admin" id="is_admin" value='{$IS_FOCUS_ADMIN}' {$IS_ADMIN_DISABLED} >
<input type="hidden" name="is_current_admin" id="is_current_admin" value='{$IS_ADMIN}' >
<input type="hidden" name="edit_self" id="edit_self" value='{$EDIT_SELF}' >
<input type="hidden" name="required_email_address" id="required_email_address" value='{$REQUIRED_EMAIL_ADDRESS}' >
<input type="hidden" name="isDuplicate" id="isDuplicate" value="{$isDuplicate}">
<div id="popup_window"></div>
<script type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");

{literal}
//Override so we do not force submit, just simulate the 'save button' click
SUGAR.EmailAddressWidget.prototype.forceSubmit = function() { document.getElementById('Save').click();}

EditView_tabs.on('contentReady', function(e){
{/literal}
{if $ID}
{literal}
    var eapmTabIndex = 4;
    {/literal}{if !$SHOW_THEMES}{literal}eapmTabIndex = 3;{/literal}{/if}{literal}
    EditView_tabs.getTab(eapmTabIndex).set('dataSrc','index.php?sugar_body_only=1&module=Users&subpanel=eapm&action=SubPanelViewer&inline=1&record={/literal}{$ID}{literal}&layout_def_key=UserEAPM&inline=1&ajaxSubpanel=true');
    EditView_tabs.getTab(eapmTabIndex).set('cacheData',true);
    EditView_tabs.getTab(eapmTabIndex).on('dataLoadedChange',function(){
        //reinit action menus
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

    if ( document.location.hash == '#tab5' ) {
        EditView_tabs.selectTab(eapmTabIndex);
    }
{/literal}
{/if}

{if $scroll_to_cal}
    {literal}
        //we are coming from the tour welcome page, so we need to simulate a click on the 4th tab
        // and scroll to the calendar_options div after the tabs have rendered
        document.getElementById('tab4').click();
        document.getElementById('calendar_options').scrollIntoView();
    {/literal}
{/if}

});
</script>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td>
{sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons=$ACTION_BUTTON_HEADER flat=true}
</td>
<td align="right" nowrap>
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
</td>
</tr>
</table>
<div id="EditView_tabs" class="yui-navset">
<ul class="yui-nav">
<li class="selected"><a id="tab1" href="#tab1"><em>{$MOD.LBL_USER_INFORMATION}</em></a></li>
<li {if $CHANGE_PWD == 0}style='display:none'{/if}><a id="tab2" href="#tab2"><em>{$MOD.LBL_CHANGE_PASSWORD_TITLE}</em></a></li>
{if $SHOW_THEMES}
<li><a id="tab3" href="#tab3" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_THEME}</em></a></li>
{/if}
<li><a id="tab4" href="#tab4" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_ADVANCED}</em></a></li>
{if $ID}
<li><a id="tab5" href="#tab5" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_EAPM_SUBPANEL_TITLE}</em></a></li>
{/if}
</ul>
<div class="yui-content">
<div>
<!-- BEGIN METADATA GENERATED CONTENT -->{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_USER_INFORMATION' module='Users'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_USER_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='user_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.user_name.value) <= 0}
{assign var="value" value=$fields.user_name.default_value }
{else}
{assign var="value" value=$fields.user_name.value }
{/if}  
<input type='text' name='{$fields.user_name.name}' 
id='{$fields.user_name.name}' size='30' 
maxlength='60' 
value='{$value}' title=''      accesskey='7'  >
<td valign="top" id='first_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' 
id='{$fields.first_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='status_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Users'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
{if $IS_ADMIN}
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''       
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.status.options }
{capture name="field_val"}{$fields.status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''          
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
<input
id="{$fields.status.name}-input"
name="{$fields.status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
id="btn-clear-{$fields.status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}');sync_{$fields.status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.status.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.status.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}{else}{$STATUS_READONLY}{/if}
<td valign="top" id='last_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' 
id='{$fields.last_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='UserType_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_TYPE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}
{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='picture_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
{/if}
<div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EMPLOYEE_INFORMATION' module='Users'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EMPLOYEE_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='employee_status_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
{if $IS_ADMIN}<span id='employee_status_span'>
{$fields.employee_status.value}</span>{else}{$EMPLOYEE_STATUS_READONLY}{/if}
<td valign="top" id='show_on_employees_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strval($fields.show_on_employees.value) == "1" || strval($fields.show_on_employees.value) == "yes" || strval($fields.show_on_employees.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.show_on_employees.name}" value="0"> 
<input type="checkbox" id="{$fields.show_on_employees.name}" 
name="{$fields.show_on_employees.name}" 
value="1" title='' tabindex="0" {$checked} >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='title_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
{if $IS_ADMIN}
{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if}  
<input type='text' name='{$fields.title.name}' 
id='{$fields.title.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      >{else}{$TITLE_READONLY}{/if}
<td valign="top" id='phone_work_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_WORK_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='department_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
{if $IS_ADMIN}
{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if}  
<input type='text' name='{$fields.department.name}' 
id='{$fields.department.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      >{else}{$DEPT_READONLY}{/if}
<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
{if $IS_ADMIN}
<input type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.reports_to_name.id_name}" 
id="{$fields.reports_to_name.id_name}" 
value="{$fields.reports_to_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.reports_to_name.name}" id="btn_{$fields.reports_to_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.reports_to_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","last_name":"reports_to_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" id="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.reports_to_name.name}', '{$fields.reports_to_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.reports_to_name.name}']) != 'undefined'",
		enableQS
);
</script>{else}{$REPORTS_TO_READONLY}{/if}
<td valign="top" id='phone_other_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  
<input type='text' name='{$fields.phone_other.name}' id='{$fields.phone_other.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
<td valign="top" id='phone_home_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.phone_home.value) <= 0}
{assign var="value" value=$fields.phone_home.default_value }
{else}
{assign var="value" value=$fields.phone_home.value }
{/if}  
<input type='text' name='{$fields.phone_home.name}' id='{$fields.phone_home.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''       
>
{if isset($fields.messenger_type.value) && $fields.messenger_type.value != ''}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
{else}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.messenger_type.options }
{capture name="field_val"}{$fields.messenger_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.messenger_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''          
>
{if isset($fields.messenger_type.value) && $fields.messenger_type.value != ''}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
{else}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.default}
{/if}
</select>
<input
id="{$fields.messenger_type.name}-input"
name="{$fields.messenger_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.messenger_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.messenger_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.messenger_type.name}-input', '{$fields.messenger_type.name}');sync_{$fields.messenger_type.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.messenger_type.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.messenger_type.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.messenger_type.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.messenger_type.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.messenger_type.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.messenger_type.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if}  
<input type='text' name='{$fields.messenger_id.name}' 
id='{$fields.messenger_id.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='address_street_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STREET' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.address_street.value) <= 0}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if}  
<input type='text' name='{$fields.address_street.name}' 
id='{$fields.address_street.name}' size='30' 
maxlength='150' 
value='{$value}' title=''      >
<td valign="top" id='address_city_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_CITY' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if}  
<input type='text' name='{$fields.address_city.name}' 
id='{$fields.address_city.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='address_state_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STATE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if}  
<input type='text' name='{$fields.address_state.name}' 
id='{$fields.address_state.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if}  
<input type='text' name='{$fields.address_postalcode.name}' 
id='{$fields.address_postalcode.name}' size='30' 
maxlength='20' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='address_country_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if}  
<input type='text' name='{$fields.address_country.name}' 
id='{$fields.address_country.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='description_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Users'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="4" 
cols="60" 
title='' tabindex="0" 
 >{$value}</textarea>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
{/if}
</div></div>

<!-- END METADATA GENERATED CONTENT -->
<div id="email_options">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th align="left" scope="row" colspan="4">
<h4>{$MOD.LBL_MAIL_OPTIONS_TITLE}</h4>
</th>
</tr>
<tr>
<td scope="row" width="17%">
{$MOD.LBL_EMAIL}:  {if $REQUIRED_EMAIL_ADDRESS}<span class="required" id="mandatory_email">{$APP.LBL_REQUIRED_SYMBOL}</span> {/if}
</td>
<td>
{$NEW_EMAIL}
</td>
</tr>
<tr id="email_options_link_type" style='display:{$HIDE_FOR_GROUP_AND_PORTAL}'>
<td scope="row" width="17%">
{$MOD.LBL_EMAIL_LINK_TYPE}:&nbsp;{sugar_help text=$MOD.LBL_EMAIL_LINK_TYPE_HELP WIDTH=450}
</td>
<td>
<select id="email_link_type" name="email_link_type" tabindex='410'>
{$EMAIL_LINK_TYPE}
</select>
</td>
</tr>
{if !$HIDE_IF_CAN_USE_DEFAULT_OUTBOUND}
<tr id="mail_smtpserver_tr">
<td width="20%" scope="row"><span id="mail_smtpserver_label">{$MOD.LBL_EMAIL_PROVIDER}</span></td>
<td width="30%" ><slot>{$mail_smtpdisplay}<input id='mail_smtpserver' name='mail_smtpserver' type="hidden" value='{$mail_smtpserver}' /></slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
{if !empty($mail_smtpauth_req) }
<tr id="mail_smtpuser_tr">
<td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label">{$MOD.LBL_MAIL_SMTPUSER}</span></td>
<td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="{$mail_smtpuser}" tabindex='1' ></slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
<tr id="mail_smtppass_tr">
<td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label">{$MOD.LBL_MAIL_SMTPPASS}</span></td>
<td width="30%" ><slot>
<input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="{$mail_smtppass}" tabindex='1'>
<a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none">{$APP.LBL_CHANGE_PASSWORD}</a>
</slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
{/if}
<tr id="test_outbound_settings_tr">
<td width="17%" scope="row"><input type="button" class="button" value="{$APP.LBL_EMAIL_TEST_OUTBOUND_SETTINGS}" onclick="startOutBoundEmailSettingsTest();"></td>
<td width="33%" >&nbsp;</td>
<td width="17%">&nbsp;</td>
<td width="33%" >&nbsp;</td>
</tr>
{/if}
</table>
</div>
</div>
<div>
{if ($CHANGE_PWD) == '1'}
<div id="generate_password">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td width='40%'>
<table width='100%' cellspacing='0' cellpadding='0' border='0' >
<tr>
<th align="left" scope="row" colspan="4">
<h4>{$MOD.LBL_CHANGE_PASSWORD_TITLE}</h4><br>
{$ERROR_PASSWORD}
</th>
</tr>
</table>
<!-- hide field if user is admin that is not editing themselves -->
<div id='generate_password_old_password' {if ($IS_ADMIN && !$ADMIN_EDIT_SELF)} style='display:none' {/if}>
<table width='100%' cellspacing='0' cellpadding='0' border='0' >
<tr>
<td width='35%' scope="row">
{$MOD.LBL_OLD_PASSWORD}
</td>
<td >
<input name='old_password' id='old_password' type='password' tabindex='2' onkeyup="password_confirmation();" >
</td>
<td width='40%'>
</td>
</tr>
</table>
</div>
<table width='100%' cellspacing='0' cellpadding='0' border='0' >
<tr>
<td width='35%' scope="row" snowrap>
{$MOD.LBL_NEW_PASSWORD}
<span class="required" id="mandatory_pwd">{if ($REQUIRED_PASSWORD)}{$APP.LBL_REQUIRED_SYMBOL}{/if}</span>
</td>
<td class='dataField'>
<input name='new_password' id= "new_password" type='password' tabindex='2' onkeyup="password_confirmation();newrules('{$PWDSETTINGS.minpwdlength}','{$PWDSETTINGS.maxpwdlength}','{$REGEX}');" />
</td>
<td width='40%'>
</td>
</tr>
<tr>
<td scope="row" width='35%'>
{$MOD.LBL_CONFIRM_PASSWORD}
</td>
<td class='dataField'>
<input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' onkeyup="password_confirmation();"  >
</td>
<td width='40%'>
<div id="comfirm_pwd_match" class="error" style="display: none;">{$MOD.ERR_PASSWORD_MISMATCH}</div>

</td>
</tr>
<tr>
<td class='dataLabel'></td>
<td class='dataField'></td>
</td>
</table>
<table width='17%' cellspacing='0' cellpadding='1' border='0'>
<tr>
<td width='50%'>
<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey='{$APP.LBL_SAVE_BUTTON_KEY}' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='{$APP.LBL_SAVE_BUTTON_LABEL}'>
</td>
<td width='50%'>
</td>
</tr>
</table>
</td>
<td width='60%' style="vertical-align:middle;">
</td>
</tr>
</table>
</div>
{else}
<div id="generate_password">
<input name='old_password' id='old_password' type='hidden'>
<input name='new_password' id= "new_password" type='hidden'>
<input name='confirm_new_password' id='confirm_pwd' type='hidden'>
</div>
{/if}
</div>
{if $SHOW_THEMES}
<div>
<div id="themepicker" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
<table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td scope="row" colspan="4"><h4>{$MOD.LBL_THEME}</h4></td>
</tr>
<tr>
<td width="17%">
<select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
{$THEMES}
</select>
</td>
<td width="33%">
<img id="themePreview" src="{sugar_getimagepath file='themePreview.png'}" border="1" />
</td>
<td width="17%">&nbsp;</td>
<td width="33%">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
</div>
{/if}
<div>
<div id="settings" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th width="100%" align="left" scope="row" colspan="4"><h4><slot>{$MOD.LBL_USER_SETTINGS}</slot></h4></th>
</tr>
<tr>
<td scope="row"  valign="top"><slot>{$MOD.LBL_EXPORT_DELIMITER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_DELIMITER_DESC }</td>
<td ><slot><input type="text" tabindex='12' name="export_delimiter" value="{$EXPORT_DELIMITER}" size="5"></slot></td>
<td scope="row" width="17%">
<slot>{$MOD.LBL_RECEIVE_NOTIFICATIONS}:</slot>&nbsp;{sugar_help text=$MOD.LBL_RECEIVE_NOTIFICATIONS_TEXT}
</td>
<td width="33%">
<slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" {$RECEIVE_NOTIFICATIONS}></slot>
</td>
</tr>
<tr>
<td scope="row" valign="top"><slot>{$MOD.LBL_EXPORT_CHARSET}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_CHARSET_DESC }</td>
<td ><slot><select tabindex='12' name="default_export_charset">{$EXPORT_CHARSET}</select></slot></td>
<td scope="row" valign="top">
<slot>{$MOD.LBL_REMINDER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_REMINDER_TEXT }
</td>
<td valign="top"  nowrap>
<slot>{include file="modules/Meetings/tpls/reminders.tpl"}</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top"><slot>{$MOD.LBL_USE_REAL_NAMES}:</slot>&nbsp;{sugar_help text=$MOD.LBL_USE_REAL_NAMES_DESC }</td>
<td ><slot><input tabindex='12' type="checkbox" name="use_real_names" {$USE_REAL_NAMES}></slot></td>
<td scope="row" valign="top">
<slot>{$MOD.LBL_MAILMERGE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_MAILMERGE_TEXT }
</td>
<td valign="top"  nowrap>
<slot><input tabindex='12' name='mailmerge_on' class="checkbox" type="checkbox" {$MAILMERGE_ON}></slot>
</td>
</tr>
<!--{if !empty($EXTERNAL_AUTH_CLASS) && !empty($IS_ADMIN)}-->
<tr>
{capture name=SMARTY_LBL_EXTERNAL_AUTH_ONLY}&nbsp;{$MOD.LBL_EXTERNAL_AUTH_ONLY} {$EXTERNAL_AUTH_CLASS_1}{/capture}
<td scope="row" nowrap><slot>{$EXTERNAL_AUTH_CLASS} {$MOD.LBL_ONLY}:</slot>&nbsp;{sugar_help text=$smarty.capture.SMARTY_LBL_EXTERNAL_AUTH_ONLY}</td>
<td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' {$EXTERNAL_AUTH_ONLY_CHECKED}></td>
<td ></td>
<td ></td>
</tr>
<!--{/if}-->
</table>
</div>
<div id="layout">
<table class="edit view" border="0" cellpadding="0" cellspacing="1" width="100%">
<tbody>
<tr>
<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_LAYOUT_OPTIONS}</h4></th>
</tr>
<tr id="use_group_tabs_row" style="display: {$DISPLAY_GROUP_TAB};">
<td scope="row"><span>{$MOD.LBL_USE_GROUP_TABS}:</span>&nbsp;{sugar_help text=$MOD.LBL_NAVIGATION_PARADIGM_DESCRIPTION }</td>
<td colspan="3"><input name="use_group_tabs" type="hidden" value="m"><input id="use_group_tabs" type="checkbox" name="use_group_tabs" {$USE_GROUP_TABS} tabindex='12' value="gm"></td>
</tr>
<tr>
<td colspan="4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td scope="row" align="left" style="padding-bottom: 2em;">{$TAB_CHOOSER}</td>
<td width="90%" valign="top"><BR>&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="17%" scope="row"><span>{$MOD.LBL_SUBPANEL_TABS}:</span>&nbsp;{sugar_help text=$MOD.LBL_SUBPANEL_TABS_DESCRIPTION }</td>
<td width="83%" colspan="3"><input type="checkbox" name="user_subpanel_tabs" {$SUBPANEL_TABS} tabindex='13'></td>
</tr>
</table>
</div>
<div id="locale" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th width="100%" align="left" scope="row" colspan="4">
<h4><slot>{$MOD.LBL_USER_LOCALE}</slot></h4></th>
</tr>
<tr>
<td width="17%" scope="row"><slot>{$MOD.LBL_DATE_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DATE_FORMAT_TEXT }</td>
<td width="33%"><slot><select tabindex='14' name='dateformat'>{$DATEOPTIONS}</select></slot></td>
<!-- END: prompttz -->
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot>{$MOD.LBL_CURRENCY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CURRENCY_TEXT }</td>
<td ><slot>
<select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'>{$CURRENCY}</select>
<input type="hidden" id="symbol" value="">
</slot></td>
<!-- END: currency -->
</tr>
<tr>
<td scope="row"><slot>{$MOD.LBL_TIME_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIME_FORMAT_TEXT }</td>
<td ><slot><select tabindex='14' name='timeformat'>{$TIMEOPTIONS}</select></slot></td>
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot>
{$MOD.LBL_CURRENCY_SIG_DIGITS}:
</slot></td>
<td ><slot>
<select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'>{$sigDigits}</select>
</slot></td>
<!-- END: currency -->
</tr>
<tr>
<td scope="row"><slot>{$MOD.LBL_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIMEZONE_TEXT }</td>
<td ><slot><select tabindex='14' name='timezone'>{html_options options=$TIMEZONEOPTIONS selected=$TIMEZONE_CURRENT}</select></slot></td>
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot>
<i>{$MOD.LBL_LOCALE_EXAMPLE_NAME_FORMAT}</i>:
</slot></td>
<td ><slot>
<input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
</slot></td>
<!-- END: currency -->
</tr>
<tr>
{if ($IS_ADMIN)}
<td scope="row"><slot>{$MOD.LBL_PROMPT_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_PROMPT_TIMEZONE_TEXT }</td>
<td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" {$PROMPTTZ}></slot></td>
{else}
<td scope="row"><slot></td>
<td ><slot></slot></td>
{/if}
<td width="17%" scope="row"><slot>{$MOD.LBL_NUMBER_GROUPING_SEP}:</slot>&nbsp;{sugar_help text=$MOD.LBL_NUMBER_GROUPING_SEP_TEXT }</td>
<td ><slot>
<input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
type='text' maxlength='1' size='1' value='{$NUM_GRP_SEP}'
onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
</slot></td></tr>
{capture name=SMARTY_LOCALE_NAME_FORMAT_DESC}&nbsp;{$MOD.LBL_LOCALE_NAME_FORMAT_DESC}{/capture}
<tr>
<td  scope="row" valign="top">{$MOD.LBL_LOCALE_DEFAULT_NAME_FORMAT}:&nbsp;{sugar_help text=$smarty.capture.SMARTY_LOCALE_NAME_FORMAT_DESC }</td>
<td  valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="{$default_locale_name_format}">{$NAMEOPTIONS}</select></slot></td>
<td width="17%" scope="row"><slot>{$MOD.LBL_DECIMAL_SEP}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DECIMAL_SEP_TEXT }</td>
<td ><slot>
<input tabindex='14' name='dec_sep' id='default_decimal_seperator'
type='text' maxlength='1' size='1' value='{$DEC_SEP}'
onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
</slot></td>
</tr>
</table>
</div>
<div id="calendar_options" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_CALENDAR_OPTIONS}</h4></th>
</tr>
<tr>
<td width="17%" scope="row"><slot>{$MOD.LBL_PUBLISH_KEY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CHOOSE_A_KEY}</td>
<td width="20%" ><slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="{$CALENDAR_PUBLISH_KEY}"></slot></td>
<td width="63%" ><slot>&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><nobr>{$MOD.LBL_YOUR_PUBLISH_URL|strip_semicolon}:</nobr></slot></td>
<td colspan=2><span class="calendar_publish_ok">{$CALENDAR_PUBLISH_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
</tr>
<tr>
<td width="17%" scope="row"><slot>{$MOD.LBL_SEARCH_URL|strip_semicolon}:</slot></td>
<td colspan=2><span class="calendar_publish_ok">{$CALENDAR_SEARCH_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
</tr>
<tr>
<td width="15%" scope="row"><slot>{$MOD.LBL_ICAL_PUB_URL|strip_semicolon}: {sugar_help text=$MOD.LBL_ICAL_PUB_URL_HELP}</slot></td>
<td colspan=2><span class="calendar_publish_ok">{$CALENDAR_ICAL_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
</tr>
<tr>
<td width="17%" scope="row"><slot>{$MOD.LBL_FDOW}:</slot>&nbsp;{sugar_help text=$MOD.LBL_FDOW_TEXT}</td>
<td ><slot>
<select tabindex='14' name='fdow'>{html_options options=$FDOWOPTIONS selected=$FDOWCURRENT}</select>
</slot></td>
</tr>
</table>
</div>
</div>
{if $ID}
<div id="eapm_area" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'>
<div style="text-align:center; width: 100%">{sugar_image name="loading"}</div>
</div>
{/if}
</div>
<script type="text/javascript">

var mail_smtpport = '{$MAIL_SMTPPORT}';
var mail_smtpssl = '{$MAIL_SMTPSSL}';
{literal}
EmailMan = {};

function Admin_check(){
	if (('{/literal}{$IS_FOCUS_ADMIN}{literal}') && document.getElementById('is_admin').value=='0'){
		r=confirm('{/literal}{$MOD.LBL_CONFIRM_REGULAR_USER}{literal}');
		return r;
		}
	else
		return true;
}


$(document).ready(function() {
	var checkKey = function(key) {
		if(key != '') {
			$(".calendar_publish_ok").css('display', 'inline');
			$(".calendar_publish_none").css('display', 'none');
	        $('#cal_pub_key_span').html( key );
	        $('#ical_pub_key_span').html( key );
	        $('#search_pub_key_span').html( key );
		} else {
			$(".calendar_publish_ok").css('display', 'none');
			$(".calendar_publish_none").css('display', 'inline');
		}
	};
    $('#calendar_publish_key').keyup(function(){
    	checkKey($(this).val());
    });
    $('#calendar_publish_key').change(function(){
    	checkKey($(this).val());
    });
    checkKey($('#calendar_publish_key').val());
});
{/literal}
</script>
{$JAVASCRIPT}
{literal}
<script type="text/javascript" language="Javascript">
{/literal}
{$getNameJs}
{$getNumberJs}
currencies = {$currencySymbolJSON};
themeGroupList = {$themeGroupListJSON};

onUserEditView();


</script>
</form>
<div id="testOutboundDialog" class="yui-hidden">
<div id="testOutbound">
<form>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td scope="row">
{$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}
<span class="required">
{$APP.LBL_REQUIRED_SYMBOL}
</span>
</td>
<td >
<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="{$TEST_EMAIL_ADDRESS}">
</td>
</tr>
<tr>
<td scope="row" colspan="2">
<input type="button" class="button" value="   {$APP.LBL_EMAIL_SEND}   " onclick="javascript:sendTestEmail();">&nbsp;
<input type="button" class="button" value="   {$APP.LBL_CANCEL_BUTTON_LABEL}   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
</td>
</tr>
</table>
</form>
</div>
</div>
{literal}
<style>
.actionsContainer.footer td {
height:120px;
vertical-align: top;
}
</style>
{/literal}
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer">
<tr>
<td>
{sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons=$ACTION_BUTTON_FOOTER flat=true}
</td>
<td align="right" nowrap>
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
</td>
</tr>
</table><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return disableOnUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'user_name', 'user_name', true,'{/literal}{sugar_translate label='LBL_USER_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'user_hash', 'varchar', false,'{/literal}{sugar_translate label='LBL_USER_HASH' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'system_generated_password', 'bool', true,'{/literal}{sugar_translate label='LBL_SYSTEM_GENERATED_PASSWORD' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Password Last Changed' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_AUTHENTICATE_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'sugar_login', 'bool', false,'{/literal}{sugar_translate label='LBL_SUGAR_LOGIN' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'name', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'name', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'is_admin', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_ADMIN' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'{/literal}{sugar_translate label='LBL_EXT_AUTHENTICATE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'{/literal}{sugar_translate label='LBL_RECEIVE_NOTIFICATIONS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_CREATED_BY_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_WORK_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STREET' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_CITY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STATE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'UserType', 'enum', false,'{/literal}{sugar_translate label='LBL_USER_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'portal_only', 'bool', false,'{/literal}{sugar_translate label='LBL_PORTAL_ONLY_USER' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'{/literal}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'employee_status', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_MESSENGER_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_type', 'enum', false,'{/literal}{sugar_translate label='LBL_MESSENGER_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', true,'{/literal}{sugar_translate label='LBL_EMAIL' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'email_link_type', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_LINK_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'is_group', 'bool', false,'{/literal}{sugar_translate label='LBL_GROUP_USER' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Users' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Users' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Users' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users' for_js=true}{literal}', 'reports_to_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
