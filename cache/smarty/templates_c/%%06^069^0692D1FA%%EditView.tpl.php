<?php /* Smarty version 2.6.11, created on 2015-12-04 10:22:04
         compiled from cache/modules/Users/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/Users/EditView.tpl', 4, false),array('function', 'sugar_action_menu', 'cache/modules/Users/EditView.tpl', 93, false),array('function', 'sugar_include', 'cache/modules/Users/EditView.tpl', 114, false),array('function', 'counter', 'cache/modules/Users/EditView.tpl', 120, false),array('function', 'sugar_getimagepath', 'cache/modules/Users/EditView.tpl', 123, false),array('function', 'sugar_translate', 'cache/modules/Users/EditView.tpl', 126, false),array('function', 'html_options', 'cache/modules/Users/EditView.tpl', 196, false),array('function', 'sugar_help', 'cache/modules/Users/EditView.tpl', 1115, false),array('function', 'sugar_image', 'cache/modules/Users/EditView.tpl', 1438, false),array('modifier', 'default', 'cache/modules/Users/EditView.tpl', 119, false),array('modifier', 'strip_semicolon', 'cache/modules/Users/EditView.tpl', 137, false),array('modifier', 'lookup', 'cache/modules/Users/EditView.tpl', 221, false),array('modifier', 'count', 'cache/modules/Users/EditView.tpl', 301, false),)), $this); ?>


<?php echo $this->_tpl_vars['ROLLOVER']; ?>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Emails/javascript/vars.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_emails.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/PasswordRequirementBox.css'), $this);?>
">
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/SubPanel/SubPanelTiles.js'), $this);?>
'></script>
<script type='text/javascript'>
var ERR_RULES_NOT_MET = '<?php echo $this->_tpl_vars['MOD']['ERR_RULES_NOT_MET']; ?>
';
var ERR_ENTER_OLD_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_OLD_PASSWORD']; ?>
';
var ERR_ENTER_NEW_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_NEW_PASSWORD']; ?>
';
var ERR_ENTER_CONFIRMATION_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_CONFIRMATION_PASSWORD']; ?>
';
var ERR_REENTER_PASSWORDS = '<?php echo $this->_tpl_vars['MOD']['ERR_REENTER_PASSWORDS']; ?>
';
</script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/User.js'), $this);?>
'></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/UserEditView.js'), $this);?>
'></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/PasswordRequirementBox.js'), $this);?>
'></script>
<?php echo $this->_tpl_vars['ERROR_STRING']; ?>

<!-- This is here for the external API forms -->
<form name="DetailView" id="DetailView" method="POST" action="index.php">
<input type="hidden" name="record" id="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
<input type="hidden" name="module" value="Users">
<input type="hidden" name="return_module" value="Users">
<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
<input type="hidden" name="return_action" value="EditView">
</form>
<form name="EditView" enctype="multipart/form-data" id="EditView" method="POST" action="index.php">
<input type="hidden" name="display_tabs_def">
<input type="hidden" name="hide_tabs_def">
<input type="hidden" name="remove_tabs_def">
<input type="hidden" name="module" value="Users">
<input type="hidden" name="record" id="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
<input type="hidden" name="action">
<input type="hidden" name="page" value="EditView">
<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
<input type="hidden" name="password_change" id="password_change" value="false">
<input type="hidden" name="required_password" id="required_password" value='<?php echo $this->_tpl_vars['REQUIRED_PASSWORD']; ?>
' >
<input type="hidden" name="old_user_name" value="<?php echo $this->_tpl_vars['USER_NAME']; ?>
">
<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['REDIRECT_EMAILS_TYPE']; ?>
">
<input type="hidden" id="is_group" name="is_group" value='<?php echo $this->_tpl_vars['IS_GROUP']; ?>
' <?php echo $this->_tpl_vars['IS_GROUP_DISABLED']; ?>
>
<input type="hidden" id='portal_only' name='portal_only' value='<?php echo $this->_tpl_vars['IS_PORTALONLY']; ?>
' <?php echo $this->_tpl_vars['IS_PORTAL_ONLY_DISABLED']; ?>
>
<input type="hidden" name="is_admin" id="is_admin" value='<?php echo $this->_tpl_vars['IS_FOCUS_ADMIN']; ?>
' <?php echo $this->_tpl_vars['IS_ADMIN_DISABLED']; ?>
 >
<input type="hidden" name="is_current_admin" id="is_current_admin" value='<?php echo $this->_tpl_vars['IS_ADMIN']; ?>
' >
<input type="hidden" name="edit_self" id="edit_self" value='<?php echo $this->_tpl_vars['EDIT_SELF']; ?>
' >
<input type="hidden" name="required_email_address" id="required_email_address" value='<?php echo $this->_tpl_vars['REQUIRED_EMAIL_ADDRESS']; ?>
' >
<input type="hidden" name="isDuplicate" id="isDuplicate" value="<?php echo $this->_tpl_vars['isDuplicate']; ?>
">
<div id="popup_window"></div>
<script type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");

<?php echo '
//Override so we do not force submit, just simulate the \'save button\' click
SUGAR.EmailAddressWidget.prototype.forceSubmit = function() { document.getElementById(\'Save\').click();}

EditView_tabs.on(\'contentReady\', function(e){
'; ?>

<?php if ($this->_tpl_vars['ID']):  echo '
    var eapmTabIndex = 4;
    ';  if (! $this->_tpl_vars['SHOW_THEMES']):  echo 'eapmTabIndex = 3;';  endif;  echo '
    EditView_tabs.getTab(eapmTabIndex).set(\'dataSrc\',\'index.php?sugar_body_only=1&module=Users&subpanel=eapm&action=SubPanelViewer&inline=1&record=';  echo $this->_tpl_vars['ID'];  echo '&layout_def_key=UserEAPM&inline=1&ajaxSubpanel=true\');
    EditView_tabs.getTab(eapmTabIndex).set(\'cacheData\',true);
    EditView_tabs.getTab(eapmTabIndex).on(\'dataLoadedChange\',function(){
        //reinit action menus
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

    if ( document.location.hash == \'#tab5\' ) {
        EditView_tabs.selectTab(eapmTabIndex);
    }
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['scroll_to_cal']): ?>
    <?php echo '
        //we are coming from the tour welcome page, so we need to simulate a click on the 4th tab
        // and scroll to the calendar_options div after the tabs have rendered
        document.getElementById(\'tab4\').click();
        document.getElementById(\'calendar_options\').scrollIntoView();
    '; ?>

<?php endif; ?>

});
</script>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td>
<?php echo smarty_function_sugar_action_menu(array('id' => 'userEditActions','class' => 'clickMenu fancymenu','buttons' => $this->_tpl_vars['ACTION_BUTTON_HEADER'],'flat' => true), $this);?>

</td>
<td align="right" nowrap>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php echo $this->_tpl_vars['APP']['NTC_REQUIRED']; ?>

</td>
</tr>
</table>
<div id="EditView_tabs" class="yui-navset">
<ul class="yui-nav">
<li class="selected"><a id="tab1" href="#tab1"><em><?php echo $this->_tpl_vars['MOD']['LBL_USER_INFORMATION']; ?>
</em></a></li>
<li <?php if ($this->_tpl_vars['CHANGE_PWD'] == 0): ?>style='display:none'<?php endif; ?>><a id="tab2" href="#tab2"><em><?php echo $this->_tpl_vars['MOD']['LBL_CHANGE_PASSWORD_TITLE']; ?>
</em></a></li>
<?php if ($this->_tpl_vars['SHOW_THEMES']): ?>
<li><a id="tab3" href="#tab3" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
;'><em><?php echo $this->_tpl_vars['MOD']['LBL_THEME']; ?>
</em></a></li>
<?php endif; ?>
<li><a id="tab4" href="#tab4" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
;'><em><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED']; ?>
</em></a></li>
<?php if ($this->_tpl_vars['ID']): ?>
<li><a id="tab5" href="#tab5" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
;'><em><?php echo $this->_tpl_vars['MOD']['LBL_EAPM_SUBPANEL_TITLE']; ?>
</em></a></li>
<?php endif; ?>
</ul>
<div class="yui-content">
<div>
<!-- BEGIN METADATA GENERATED CONTENT --><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_INFORMATION','module' => 'Users'), $this);?>

<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_USER_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='user_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['user_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['user_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['user_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
' size='30' 
maxlength='60' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='7'  >
<td valign="top" id='first_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' 
maxlength='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='status_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']):  if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['status']['options']);  ob_start();  echo $this->_tpl_vars['fields']['status']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['status']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
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
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['status']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['status']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif;  else:  echo $this->_tpl_vars['STATUS_READONLY'];  endif; ?>
<td valign="top" id='last_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' 
maxlength='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='UserType_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']):  echo $this->_tpl_vars['USER_TYPE_DROPDOWN'];  else:  echo $this->_tpl_vars['USER_TYPE_READONLY'];  endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='picture_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="detailpanel_2" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_INFORMATION','module' => 'Users'), $this);?>

<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EMPLOYEE_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='employee_status_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']): ?><span id='employee_status_span'>
<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>
</span><?php else:  echo $this->_tpl_vars['EMPLOYEE_STATUS_READONLY'];  endif; ?>
<td valign="top" id='show_on_employees_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_ON_EMPLOYEES','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" 
value="1" title='' tabindex="0" <?php echo $this->_tpl_vars['checked']; ?>
 >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='title_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']):  if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      ><?php else:  echo $this->_tpl_vars['TITLE_READONLY'];  endif; ?>
<td valign="top" id='phone_work_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='department_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']):  if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      ><?php else:  echo $this->_tpl_vars['DEPT_READONLY'];  endif; ?>
<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['IS_ADMIN']): ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['reports_to_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","last_name":"reports_to_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['reports_to_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script><?php else:  echo $this->_tpl_vars['REPORTS_TO_READONLY'];  endif; ?>
<td valign="top" id='phone_other_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<td valign="top" id='phone_home_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_home']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['messenger_type']['value'] ) && $this->_tpl_vars['fields']['messenger_type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['messenger_type']['options']);  ob_start();  echo $this->_tpl_vars['fields']['messenger_type']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['messenger_type']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['messenger_type']['value'] ) && $this->_tpl_vars['fields']['messenger_type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['messenger_type']['options'],'selected' => $this->_tpl_vars['fields']['messenger_type']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
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
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['messenger_type']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif; ?>
<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='address_street_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_street']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_street']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_street']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
' size='30' 
maxlength='150' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<td valign="top" id='address_city_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='address_state_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' size='30' 
maxlength='20' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='address_country_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_COUNTRY','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="4" 
cols="60" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
<?php endif; ?>
</div></div>

<!-- END METADATA GENERATED CONTENT -->
<div id="email_options">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th align="left" scope="row" colspan="4">
<h4><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_OPTIONS_TITLE']; ?>
</h4>
</th>
</tr>
<tr>
<td scope="row" width="17%">
<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL']; ?>
:  <?php if ($this->_tpl_vars['REQUIRED_EMAIL_ADDRESS']): ?><span class="required" id="mandatory_email"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php endif; ?>
</td>
<td>
<?php echo $this->_tpl_vars['NEW_EMAIL']; ?>

</td>
</tr>
<tr id="email_options_link_type" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
<td scope="row" width="17%">
<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_LINK_TYPE']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EMAIL_LINK_TYPE_HELP'],'WIDTH' => 450), $this);?>

</td>
<td>
<select id="email_link_type" name="email_link_type" tabindex='410'>
<?php echo $this->_tpl_vars['EMAIL_LINK_TYPE']; ?>

</select>
</td>
</tr>
<?php if (! $this->_tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']): ?>
<tr id="mail_smtpserver_tr">
<td width="20%" scope="row"><span id="mail_smtpserver_label"><?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_PROVIDER']; ?>
</span></td>
<td width="30%" ><slot><?php echo $this->_tpl_vars['mail_smtpdisplay']; ?>
<input id='mail_smtpserver' name='mail_smtpserver' type="hidden" value='<?php echo $this->_tpl_vars['mail_smtpserver']; ?>
' /></slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
<?php if (! empty ( $this->_tpl_vars['mail_smtpauth_req'] )): ?>
<tr id="mail_smtpuser_tr">
<td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label"><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SMTPUSER']; ?>
</span></td>
<td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="<?php echo $this->_tpl_vars['mail_smtpuser']; ?>
" tabindex='1' ></slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
<tr id="mail_smtppass_tr">
<td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label"><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SMTPPASS']; ?>
</span></td>
<td width="30%" ><slot>
<input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="<?php echo $this->_tpl_vars['mail_smtppass']; ?>
" tabindex='1'>
<a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none"><?php echo $this->_tpl_vars['APP']['LBL_CHANGE_PASSWORD']; ?>
</a>
</slot></td>
<td>&nbsp;</td>
<td >&nbsp;</td>
</tr>
<?php endif; ?>
<tr id="test_outbound_settings_tr">
<td width="17%" scope="row"><input type="button" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_TEST_OUTBOUND_SETTINGS']; ?>
" onclick="startOutBoundEmailSettingsTest();"></td>
<td width="33%" >&nbsp;</td>
<td width="17%">&nbsp;</td>
<td width="33%" >&nbsp;</td>
</tr>
<?php endif; ?>
</table>
</div>
</div>
<div>
<?php if (( $this->_tpl_vars['CHANGE_PWD'] ) == '1'): ?>
<div id="generate_password">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td width='40%'>
<table width='100%' cellspacing='0' cellpadding='0' border='0' >
<tr>
<th align="left" scope="row" colspan="4">
<h4><?php echo $this->_tpl_vars['MOD']['LBL_CHANGE_PASSWORD_TITLE']; ?>
</h4><br>
<?php echo $this->_tpl_vars['ERROR_PASSWORD']; ?>

</th>
</tr>
</table>
<!-- hide field if user is admin that is not editing themselves -->
<div id='generate_password_old_password' <?php if (( $this->_tpl_vars['IS_ADMIN'] && ! $this->_tpl_vars['ADMIN_EDIT_SELF'] )): ?> style='display:none' <?php endif; ?>>
<table width='100%' cellspacing='0' cellpadding='0' border='0' >
<tr>
<td width='35%' scope="row">
<?php echo $this->_tpl_vars['MOD']['LBL_OLD_PASSWORD']; ?>

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
<?php echo $this->_tpl_vars['MOD']['LBL_NEW_PASSWORD']; ?>

<span class="required" id="mandatory_pwd"><?php if (( $this->_tpl_vars['REQUIRED_PASSWORD'] )):  echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL'];  endif; ?></span>
</td>
<td class='dataField'>
<input name='new_password' id= "new_password" type='password' tabindex='2' onkeyup="password_confirmation();newrules('<?php echo $this->_tpl_vars['PWDSETTINGS']['minpwdlength']; ?>
','<?php echo $this->_tpl_vars['PWDSETTINGS']['maxpwdlength']; ?>
','<?php echo $this->_tpl_vars['REGEX']; ?>
');" />
</td>
<td width='40%'>
</td>
</tr>
<tr>
<td scope="row" width='35%'>
<?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_PASSWORD']; ?>

</td>
<td class='dataField'>
<input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' onkeyup="password_confirmation();"  >
</td>
<td width='40%'>
<div id="comfirm_pwd_match" class="error" style="display: none;"><?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_MISMATCH']; ?>
</div>

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
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
'>
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
<?php else: ?>
<div id="generate_password">
<input name='old_password' id='old_password' type='hidden'>
<input name='new_password' id= "new_password" type='hidden'>
<input name='confirm_new_password' id='confirm_pwd' type='hidden'>
</div>
<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['SHOW_THEMES']): ?>
<div>
<div id="themepicker" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_THEME']; ?>
</h4></td>
</tr>
<tr>
<td width="17%">
<select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
<?php echo $this->_tpl_vars['THEMES']; ?>

</select>
</td>
<td width="33%">
<img id="themePreview" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'themePreview.png'), $this);?>
" border="1" />
</td>
<td width="17%">&nbsp;</td>
<td width="33%">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php endif; ?>
<div>
<div id="settings" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th width="100%" align="left" scope="row" colspan="4"><h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_SETTINGS']; ?>
</slot></h4></th>
</tr>
<tr>
<td scope="row"  valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER_DESC']), $this);?>
</td>
<td ><slot><input type="text" tabindex='12' name="export_delimiter" value="<?php echo $this->_tpl_vars['EXPORT_DELIMITER']; ?>
" size="5"></slot></td>
<td scope="row" width="17%">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS_TEXT']), $this);?>

</td>
<td width="33%">
<slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" <?php echo $this->_tpl_vars['RECEIVE_NOTIFICATIONS']; ?>
></slot>
</td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET_DESC']), $this);?>
</td>
<td ><slot><select tabindex='12' name="default_export_charset"><?php echo $this->_tpl_vars['EXPORT_CHARSET']; ?>
</select></slot></td>
<td scope="row" valign="top">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_REMINDER_TEXT']), $this);?>

</td>
<td valign="top"  nowrap>
<slot><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Meetings/tpls/reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></slot>
</td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']), $this);?>
</td>
<td ><slot><input tabindex='12' type="checkbox" name="use_real_names" <?php echo $this->_tpl_vars['USE_REAL_NAMES']; ?>
></slot></td>
<td scope="row" valign="top">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MAILMERGE_TEXT']), $this);?>

</td>
<td valign="top"  nowrap>
<slot><input tabindex='12' name='mailmerge_on' class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['MAILMERGE_ON']; ?>
></slot>
</td>
</tr>
<!--<?php if (! empty ( $this->_tpl_vars['EXTERNAL_AUTH_CLASS'] ) && ! empty ( $this->_tpl_vars['IS_ADMIN'] )): ?>-->
<tr>
<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_EXTERNAL_AUTH_ONLY']; ?>
 <?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS_1'];  $this->_smarty_vars['capture']['SMARTY_LBL_EXTERNAL_AUTH_ONLY'] = ob_get_contents(); ob_end_clean(); ?>
<td scope="row" nowrap><slot><?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_ONLY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_LBL_EXTERNAL_AUTH_ONLY']), $this);?>
</td>
<td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' <?php echo $this->_tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']; ?>
></td>
<td ></td>
<td ></td>
</tr>
<!--<?php endif; ?>-->
</table>
</div>
<div id="layout">
<table class="edit view" border="0" cellpadding="0" cellspacing="1" width="100%">
<tbody>
<tr>
<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LAYOUT_OPTIONS']; ?>
</h4></th>
</tr>
<tr id="use_group_tabs_row" style="display: <?php echo $this->_tpl_vars['DISPLAY_GROUP_TAB']; ?>
;">
<td scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_USE_GROUP_TABS']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_NAVIGATION_PARADIGM_DESCRIPTION']), $this);?>
</td>
<td colspan="3"><input name="use_group_tabs" type="hidden" value="m"><input id="use_group_tabs" type="checkbox" name="use_group_tabs" <?php echo $this->_tpl_vars['USE_GROUP_TABS']; ?>
 tabindex='12' value="gm"></td>
</tr>
<tr>
<td colspan="4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td scope="row" align="left" style="padding-bottom: 2em;"><?php echo $this->_tpl_vars['TAB_CHOOSER']; ?>
</td>
<td width="90%" valign="top"><BR>&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="17%" scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS_DESCRIPTION']), $this);?>
</td>
<td width="83%" colspan="3"><input type="checkbox" name="user_subpanel_tabs" <?php echo $this->_tpl_vars['SUBPANEL_TABS']; ?>
 tabindex='13'></td>
</tr>
</table>
</div>
<div id="locale" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th width="100%" align="left" scope="row" colspan="4">
<h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_LOCALE']; ?>
</slot></h4></th>
</tr>
<tr>
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_FORMAT']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DATE_FORMAT_TEXT']), $this);?>
</td>
<td width="33%"><slot><select tabindex='14' name='dateformat'><?php echo $this->_tpl_vars['DATEOPTIONS']; ?>
</select></slot></td>
<!-- END: prompttz -->
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CURRENCY_TEXT']), $this);?>
</td>
<td ><slot>
<select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'><?php echo $this->_tpl_vars['CURRENCY']; ?>
</select>
<input type="hidden" id="symbol" value="">
</slot></td>
<!-- END: currency -->
</tr>
<tr>
<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIME_FORMAT']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_TIME_FORMAT_TEXT']), $this);?>
</td>
<td ><slot><select tabindex='14' name='timeformat'><?php echo $this->_tpl_vars['TIMEOPTIONS']; ?>
</select></slot></td>
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot>
<?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS']; ?>
:
</slot></td>
<td ><slot>
<select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'><?php echo $this->_tpl_vars['sigDigits']; ?>
</select>
</slot></td>
<!-- END: currency -->
</tr>
<tr>
<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIMEZONE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_TIMEZONE_TEXT']), $this);?>
</td>
<td ><slot><select tabindex='14' name='timezone'><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['TIMEZONEOPTIONS'],'selected' => $this->_tpl_vars['TIMEZONE_CURRENT']), $this);?>
</select></slot></td>
<!-- BEGIN: currency -->
<td width="17%" scope="row"><slot>
<i><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_EXAMPLE_NAME_FORMAT']; ?>
</i>:
</slot></td>
<td ><slot>
<input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
</slot></td>
<!-- END: currency -->
</tr>
<tr>
<?php if (( $this->_tpl_vars['IS_ADMIN'] )): ?>
<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PROMPT_TIMEZONE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PROMPT_TIMEZONE_TEXT']), $this);?>
</td>
<td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" <?php echo $this->_tpl_vars['PROMPTTZ']; ?>
></slot></td>
<?php else: ?>
<td scope="row"><slot></td>
<td ><slot></slot></td>
<?php endif; ?>
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP_TEXT']), $this);?>
</td>
<td ><slot>
<input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
type='text' maxlength='1' size='1' value='<?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
'
onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
</slot></td></tr>
<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC'];  $this->_smarty_vars['capture']['SMARTY_LOCALE_NAME_FORMAT_DESC'] = ob_get_contents(); ob_end_clean(); ?>
<tr>
<td  scope="row" valign="top"><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_NAME_FORMAT']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_LOCALE_NAME_FORMAT_DESC']), $this);?>
</td>
<td  valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="<?php echo $this->_tpl_vars['default_locale_name_format']; ?>
"><?php echo $this->_tpl_vars['NAMEOPTIONS']; ?>
</select></slot></td>
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP_TEXT']), $this);?>
</td>
<td ><slot>
<input tabindex='14' name='dec_sep' id='default_decimal_seperator'
type='text' maxlength='1' size='1' value='<?php echo $this->_tpl_vars['DEC_SEP']; ?>
'
onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
</slot></td>
</tr>
</table>
</div>
<div id="calendar_options" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_CALENDAR_OPTIONS']; ?>
</h4></th>
</tr>
<tr>
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PUBLISH_KEY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CHOOSE_A_KEY']), $this);?>
</td>
<td width="20%" ><slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="<?php echo $this->_tpl_vars['CALENDAR_PUBLISH_KEY']; ?>
"></slot></td>
<td width="63%" ><slot>&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_YOUR_PUBLISH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</nobr></slot></td>
<td colspan=2><span class="calendar_publish_ok"><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_URL']; ?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
</span></td>
</tr>
<tr>
<td width="17%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SEARCH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td colspan=2><span class="calendar_publish_ok"><?php echo $this->_tpl_vars['CALENDAR_SEARCH_URL']; ?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
</span></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL_HELP']), $this);?>
</slot></td>
<td colspan=2><span class="calendar_publish_ok"><?php echo $this->_tpl_vars['CALENDAR_ICAL_URL']; ?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
</span></td>
</tr>
<tr>
<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_FDOW']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_FDOW_TEXT']), $this);?>
</td>
<td ><slot>
<select tabindex='14' name='fdow'><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FDOWOPTIONS'],'selected' => $this->_tpl_vars['FDOWCURRENT']), $this);?>
</select>
</slot></td>
</tr>
</table>
</div>
</div>
<?php if ($this->_tpl_vars['ID']): ?>
<div id="eapm_area" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
;'>
<div style="text-align:center; width: 100%"><?php echo smarty_function_sugar_image(array('name' => 'loading'), $this);?>
</div>
</div>
<?php endif; ?>
</div>
<script type="text/javascript">

var mail_smtpport = '<?php echo $this->_tpl_vars['MAIL_SMTPPORT']; ?>
';
var mail_smtpssl = '<?php echo $this->_tpl_vars['MAIL_SMTPSSL']; ?>
';
<?php echo '
EmailMan = {};

function Admin_check(){
	if ((\'';  echo $this->_tpl_vars['IS_FOCUS_ADMIN'];  echo '\') && document.getElementById(\'is_admin\').value==\'0\'){
		r=confirm(\'';  echo $this->_tpl_vars['MOD']['LBL_CONFIRM_REGULAR_USER'];  echo '\');
		return r;
		}
	else
		return true;
}


$(document).ready(function() {
	var checkKey = function(key) {
		if(key != \'\') {
			$(".calendar_publish_ok").css(\'display\', \'inline\');
			$(".calendar_publish_none").css(\'display\', \'none\');
	        $(\'#cal_pub_key_span\').html( key );
	        $(\'#ical_pub_key_span\').html( key );
	        $(\'#search_pub_key_span\').html( key );
		} else {
			$(".calendar_publish_ok").css(\'display\', \'none\');
			$(".calendar_publish_none").css(\'display\', \'inline\');
		}
	};
    $(\'#calendar_publish_key\').keyup(function(){
    	checkKey($(this).val());
    });
    $(\'#calendar_publish_key\').change(function(){
    	checkKey($(this).val());
    });
    checkKey($(\'#calendar_publish_key\').val());
});
'; ?>

</script>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<?php echo '
<script type="text/javascript" language="Javascript">
'; ?>

<?php echo $this->_tpl_vars['getNameJs']; ?>

<?php echo $this->_tpl_vars['getNumberJs']; ?>

currencies = <?php echo $this->_tpl_vars['currencySymbolJSON']; ?>
;
themeGroupList = <?php echo $this->_tpl_vars['themeGroupListJSON']; ?>
;

onUserEditView();


</script>
</form>
<div id="testOutboundDialog" class="yui-hidden">
<div id="testOutbound">
<form>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td scope="row">
<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR']; ?>

<span class="required">
<?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

</span>
</td>
<td >
<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $this->_tpl_vars['TEST_EMAIL_ADDRESS']; ?>
">
</td>
</tr>
<tr>
<td scope="row" colspan="2">
<input type="button" class="button" value="   <?php echo $this->_tpl_vars['APP']['LBL_EMAIL_SEND']; ?>
   " onclick="javascript:sendTestEmail();">&nbsp;
<input type="button" class="button" value="   <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
</td>
</tr>
</table>
</form>
</div>
</div>
<?php echo '
<style>
.actionsContainer.footer td {
height:120px;
vertical-align: top;
}
</style>
'; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer">
<tr>
<td>
<?php echo smarty_function_sugar_action_menu(array('id' => 'userEditActions','class' => 'clickMenu fancymenu','buttons' => $this->_tpl_vars['ACTION_BUTTON_FOOTER'],'flat' => true), $this);?>

</td>
<td align="right" nowrap>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php echo $this->_tpl_vars['APP']['NTC_REQUIRED']; ?>

</td>
</tr>
</table><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return disableOnUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script><?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'user_name\', \'user_name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'user_hash\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_HASH','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'system_generated_password\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SYSTEM_GENERATED_PASSWORD','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'pwd_last_changed_date\', \'date\', false,\'Password Last Changed\' );
addToValidate(\'EditView\', \'authenticate_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_AUTHENTICATE_ID','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'sugar_login\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUGAR_LOGIN','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'first_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'last_name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'is_admin\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IS_ADMIN','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'external_auth_only\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EXT_AUTHENTICATE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'receive_notifications\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RECEIVE_NOTIFICATIONS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', true,\'Date Entered\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', true,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY_ID','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_BY_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_COUNTRY','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'UserType\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'portal_only\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_ONLY_USER','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'show_on_employees\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_ON_EMPLOYEES','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'employee_status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email1\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email_link_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_LINK_TYPE','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'is_group\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_GROUP_USER','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Users','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Users','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Users','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'reports_to_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Users','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Users','for_js' => true), $this); echo '\', \'reports_to_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_reports_to_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
