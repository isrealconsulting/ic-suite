
<span class="color">{$ERROR}</span>
<h4>
<style>
input[disabled] {ldelim}
background-color:lightgray;
{rdelim}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Notes" id="convert_create_Notes" 
{if ($def.required && empty($def.select)) || (!empty($def.default_action) && $def.default_action == "create")} value="true" {/if}/>
<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">   
<input type="hidden" name="case_id" value="{$smarty.request.case_id}">   
<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">   
<input type="hidden" name="email_id" value="{$smarty.request.email_id}">   
<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">   
{if $def.required }
<script type="text/javascript">
mod_array.push('Notes');//Bug#50590 add all required modules to mod_array
</script>
{/if}
{if !$def.required || !empty($def.select)}
<input class="checkbox" type="checkbox" name="newNotes" id="newNotes" onclick="toggleDisplay('createNotes');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Notes');{if !empty($def.select)}toggleNotesSelect();{/if}">
<script type="text/javascript">
 {if !empty($def.default_action) && $def.default_action == "create"}
     {if $lead_conv_activity_opt == 'move' || $lead_conv_activity_opt == 'copy' || $lead_conv_activity_opt == ''}
        YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function(){ldelim}
     {else}
        YAHOO.util.Event.onContentReady('createNotes', function(){ldelim}
     {/if}
		toggleDisplay('createNotes');
		document.getElementById('newNotes').checked = true;
                if (typeof(addRemoveDropdownElement) == 'function')
                    addRemoveDropdownElement('Notes');
        	{rdelim});
 {/if}
{/if}
</script>
</td><td>
{sugar_translate label='LNK_NEW_NOTE' module='Leads'}
</td><td>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}" id ="createNotes" {if !$def.required || !empty($def.select)}style="display:none"{/if}>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='Notesname' 
id='Notesname' size='90' 
maxlength='255' 
value='{$value}' title=''      >
</td>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Notes'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='Notesdescription' name='Notesdescription'
rows="10" 
cols="90" 
title='' tabindex="0" 
 >{$value}</textarea>
</td>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</td>
</tr>
</table>{literal}
<script type="text/javascript">
addForm('ConvertLead');addToValidateBinaryDependency('ConvertLead', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
