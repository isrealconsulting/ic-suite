<?php /* Smarty version 2.6.11, created on 2015-12-04 23:20:23
         compiled from cache/modules/Calls/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Calls/ConvertLead.tpl', 17, false),array('function', 'counter', 'cache/modules/Calls/ConvertLead.tpl', 55, false),array('function', 'sugar_getimage', 'cache/modules/Calls/ConvertLead.tpl', 84, false),array('function', 'sugar_getjspath', 'cache/modules/Calls/ConvertLead.tpl', 92, false),array('function', 'html_options', 'cache/modules/Calls/ConvertLead.tpl', 154, false),array('modifier', 'default', 'cache/modules/Calls/ConvertLead.tpl', 45, false),array('modifier', 'strip_semicolon', 'cache/modules/Calls/ConvertLead.tpl', 51, false),)), $this); ?>

<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<h4>
<style>
input[disabled] {
background-color:lightgray;
}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Calls" id="convert_create_Calls" 
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">   
<input type="hidden" name="Callsstatus" value="<?php echo smarty_function_sugar_translate(array('label' => 'call_status_default'), $this);?>
">   
<?php if ($this->_tpl_vars['def']['required']): ?>
<script type="text/javascript">
mod_array.push('Calls');//Bug#50590 add all required modules to mod_array
</script>
<?php endif;  if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newCalls" id="newCalls" onclick="toggleDisplay('createCalls');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Calls');<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>toggleCallsSelect();<?php endif; ?>">
<script type="text/javascript">
 <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
     <?php if ($this->_tpl_vars['lead_conv_activity_opt'] == 'move' || $this->_tpl_vars['lead_conv_activity_opt'] == 'copy' || $this->_tpl_vars['lead_conv_activity_opt'] == ''): ?>
        YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function(){
     <?php else: ?>
        YAHOO.util.Event.onContentReady('createCalls', function(){
     <?php endif; ?>
		toggleDisplay('createCalls');
		document.getElementById('newCalls').checked = true;
                if (typeof(addRemoveDropdownElement) == 'function')
                    addRemoveDropdownElement('Calls');
        	});
 <?php endif;  endif; ?>
</script>
</td><td>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_CALL','module' => 'Leads'), $this);?>

</td><td>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="createCalls" <?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Calls'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='Callsname' 
id='Callsname' size='90' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</td>
</tr>
<tr>
<td valign="top" id='date_start_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE','module' => 'Calls'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="Callsdate_start_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_Callsdate_start.update();" onchange="combo_Callsdate_start.update(); "    >
<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="Callsdate_start_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>
&nbsp;
</td>
<td nowrap>
<div id="Callsdate_start_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="Callsdate_start" name="Callsdate_start" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
">
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
var combo_Callsdate_start = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
", "Callsdate_start", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '', false, true);
//Render the remaining widget fields
text = combo_Callsdate_start.html('');
document.getElementById('Callsdate_start_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_Callsdate_start.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"Callsdate_start_date",'date',false,"Callsdate_start");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
',"Callsdate_start_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
" ,"Callsdate_start_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "Callsdate_start_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
" ,"Callsdate_start_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "Callsdate_start_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
","Callsdate_start_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_Callsdate_start,
	inputField : "Callsdate_start_date",
    form : "ConvertLead",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	button : "Callsdate_start_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
	comboObject: combo_Callsdate_start
	});

	//Call update for first time to round hours and minute values
	combo_Callsdate_start.update(false);

}); 
</script>
</td>
<td valign="top" id='duration_hours_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION','module' => 'Calls'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php echo '
<script type="text/javascript">
    function isValidCallsDuration() { 
        form = document.getElementById(\'ConvertLead\');
        if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) {
            alert(\'';  echo smarty_function_sugar_translate(array('label' => 'NOTICE_DURATION_TIME','module' => 'Calls'), $this); echo '\'); 
            return false;
        }
        return true; 
    }
</script>'; ?>

<input tabindex="0"  name="Callsduration_hours" tabindex="1" size="2" maxlength="2" type="text" value="<?php echo $this->_tpl_vars['fields']['duration_hours']['value']; ?>
"/>
<?php $this->_tpl_vars["minutes_values"] = $this->_tpl_vars["bean"]->minutes_values;  echo smarty_function_html_options(array('name' => 'Callsduration_minutes','options' => $this->_tpl_vars['minutes_values'],'selected' => $this->_tpl_vars['fields']['duration_minutes']['value']), $this);?>
 &nbsp;
<span class="dateFormat"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOURS_MINUTES','module' => 'Calls'), $this);?>

</td>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Calls'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='Callsdescription' name='Callsdescription'
rows="10" 
cols="90" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</td>
</tr>
</table><?php echo '
<script type="text/javascript">
addForm(\'ConvertLead\');addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Calls','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Calls','for_js' => true), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
