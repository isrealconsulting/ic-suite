

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li><input type="button" class="button" onClick="showPopup('pdf');" value="{$MOD.LBL_PRINT_AS_PDF}"/></li><li><input type="button" class="button" onClick="showPopup('emailpdf');" value="{$MOD.LBL_EMAIL_PDF}"/></li><li><input type="button" class="button" onClick="showPopup('email');" value="{$MOD.LBL_EMAIL_QUOTE}"/></li><li><input class="button" id="create_contract_button" title="{$MOD.LBL_CREATE_OPPORTUNITY}" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createOpportunity';_form.submit();" name="Create Opportunity" type="button" value="{$MOD.LBL_CREATE_OPPORTUNITY}"/></li><li><input class="button" id="create_contract_button" title="{$MOD.LBL_CREATE_CONTRACT}" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createContract';_form.submit();" name="Create Contract" type="button" value="{$MOD.LBL_CREATE_CONTRACT}"/></li><li><input class="button" id="convert_to_invoice_button" title="{$MOD.LBL_CONVERT_TO_INVOICE}" onclick="var _form = document.getElementById('formDetailView');_form.action.value='converToInvoice';_form.submit();" name="Convert to Invoice" type="button" value="{$MOD.LBL_CONVERT_TO_INVOICE}"/></li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=AOS_Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="AOS_Quotes_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.opportunity.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.opportunity.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.opportunity_id.value)}
{capture assign="detail_url"}index.php?module=Opportunities&action=DetailView&record={$fields.opportunity_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="opportunity_id" class="sugar_field" data-id-value="{$fields.opportunity_id.value}">{$fields.opportunity.value}</span>
{if !empty($fields.opportunity_id.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.number.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NUMBER' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.number.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.number.name}">
{assign var="value" value=$fields.number.value }
{$value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.stage.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STAGE' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.stage.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.stage.options)}
<input type="hidden" class="sugar_field" id="{$fields.stage.name}" value="{ $fields.stage.options }">
{ $fields.stage.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.stage.name}" value="{ $fields.stage.value }">
{ $fields.stage.options[$fields.stage.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.expiration.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EXPIRATION' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.expiration.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.expiration.value) <= 0}
{assign var="value" value=$fields.expiration.default_value }
{else}
{assign var="value" value=$fields.expiration.value }
{/if}
<span class="sugar_field" id="{$fields.expiration.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.invoice_status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INVOICE_STATUS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.invoice_status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.invoice_status.options)}
<input type="hidden" class="sugar_field" id="{$fields.invoice_status.name}" value="{ $fields.invoice_status.options }">
{ $fields.invoice_status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.invoice_status.name}" value="{ $fields.invoice_status.value }">
{ $fields.invoice_status.options[$fields.invoice_status.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.term.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TERM' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.term.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.term.options)}
<input type="hidden" class="sugar_field" id="{$fields.term.name}" value="{ $fields.term.options }">
{ $fields.term.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.term.name}" value="{ $fields.term.value }">
{ $fields.term.options[$fields.term.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.approval_status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_APPROVAL_STATUS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.approval_status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.approval_status.options)}
<input type="hidden" class="sugar_field" id="{$fields.approval_status.name}" value="{ $fields.approval_status.options }">
{ $fields.approval_status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.approval_status.name}" value="{ $fields.approval_status.value }">
{ $fields.approval_status.options[$fields.approval_status.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.approval_issue.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_APPROVAL_ISSUE' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.approval_issue.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.approval_issue.name|escape:'html'|url2html|nl2br}">{$fields.approval_issue.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_account.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ACCOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_account.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.billing_account_id.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.billing_account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="billing_account_id" class="sugar_field" data-id-value="{$fields.billing_account_id.value}">{$fields.billing_account.value}</span>
{if !empty($fields.billing_account_id.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_contact.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_CONTACT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_contact.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.billing_contact_id.value)}
{capture assign="detail_url"}index.php?module=Contacts&action=DetailView&record={$fields.billing_contact_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="billing_contact_id" class="sugar_field" data-id-value="{$fields.billing_contact_id.value}">{$fields.billing_contact.value}</span>
{if !empty($fields.billing_contact_id.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="billing_address_street" value="{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_city" value="{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_state" value="{$fields.billing_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_country" value="{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.billing_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_billing}
</td>
</tr>
</table>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.shipping_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_ADDRESS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.shipping_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="shipping_address_street" value="{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_state" value="{$fields.shipping_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.shipping_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_shipping}
</td>
</tr>
</table>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_LINE_ITEMS' module='AOS_Quotes'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_LINE_ITEMS' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.line_items.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LINE_ITEMS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.line_items.hidden}
{counter name="panelFieldCount"}
<span id='line_items_span'>
{$fields.line_items.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.total_amt.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_AMT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.total_amt.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.total_amt.name}'>
{sugar_number_format var=$fields.total_amt.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.discount_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DISCOUNT_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.discount_amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.discount_amount.name}'>
{sugar_number_format var=$fields.discount_amount.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.subtotal_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBTOTAL_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.subtotal_amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.subtotal_amount.name}'>
{sugar_number_format var=$fields.subtotal_amount.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.shipping_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.shipping_amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.shipping_amount.name}'>
{sugar_number_format var=$fields.shipping_amount.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.shipping_tax_amt.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_TAX_AMT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.shipping_tax_amt.hidden}
{counter name="panelFieldCount"}
<span id='shipping_tax_amt_span'>
{$fields.shipping_tax_amt.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tax_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TAX_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.tax_amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.tax_amount.name}'>
{sugar_number_format var=$fields.tax_amount.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.total_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GRAND_TOTAL' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.total_amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.total_amount.name}'>
{sugar_number_format var=$fields.total_amount.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_LINE_ITEMS").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>