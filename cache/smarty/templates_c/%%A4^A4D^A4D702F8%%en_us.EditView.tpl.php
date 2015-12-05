<?php /* Smarty version 2.6.11, created on 2015-12-04 22:16:34
         compiled from include/SugarFields/Fields/Address/en_us.EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'include/SugarFields/Fields/Address/en_us.EditView.tpl', 39, false),array('modifier', 'cat', 'include/SugarFields/Fields/Address/en_us.EditView.tpl', 40, false),array('modifier', 'lower', 'include/SugarFields/Fields/Address/en_us.EditView.tpl', 51, false),array('modifier', 'in_array', 'include/SugarFields/Fields/Address/en_us.EditView.tpl', 51, false),array('modifier', 'default', 'include/SugarFields/Fields/Address/en_us.EditView.tpl', 57, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
<?php $this->assign('key', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)));  $this->assign('street', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_address_street') : smarty_modifier_cat($_tmp, '_address_street')));  $this->assign('city', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_address_city') : smarty_modifier_cat($_tmp, '_address_city')));  $this->assign('state', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_address_state') : smarty_modifier_cat($_tmp, '_address_state')));  $this->assign('country', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_address_country') : smarty_modifier_cat($_tmp, '_address_country')));  $this->assign('postalcode', ((is_array($_tmp=$this->_tpl_vars['displayParams']['key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_address_postalcode') : smarty_modifier_cat($_tmp, '_address_postalcode'))); ?>
<fieldset id='<?php echo $this->_tpl_vars['key']; ?>
_address_fieldset'>
<legend>{sugar_translate label='LBL_<?php echo $this->_tpl_vars['key']; ?>
_ADDRESS' module='<?php echo $this->_tpl_vars['module']; ?>
'}</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="<?php echo $this->_tpl_vars['street']; ?>
_label" width='25%' scope='row' >
<label for="<?php echo $this->_tpl_vars['street']; ?>
">{sugar_translate label='LBL_<?php echo $this->_tpl_vars['key']; ?>
_STREET' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
{if $fields.<?php echo $this->_tpl_vars['street']; ?>
.required || <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['street'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['displayParams']['required']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['displayParams']['required']))): ?>true<?php else: ?>false<?php endif; ?>}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td width="*">
<?php if ($this->_tpl_vars['displayParams']['maxlength']): ?>
<textarea id="<?php echo $this->_tpl_vars['street']; ?>
" name="<?php echo $this->_tpl_vars['street']; ?>
" maxlength="<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
" rows="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['rows'])) ? $this->_run_mod_handler('default', true, $_tmp, 4) : smarty_modifier_default($_tmp, 4)); ?>
" cols="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['cols'])) ? $this->_run_mod_handler('default', true, $_tmp, 60) : smarty_modifier_default($_tmp, 60)); ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">{$fields.<?php echo $this->_tpl_vars['street']; ?>
.value}</textarea>
<?php else: ?>
<textarea id="<?php echo $this->_tpl_vars['street']; ?>
" name="<?php echo $this->_tpl_vars['street']; ?>
" rows="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['rows'])) ? $this->_run_mod_handler('default', true, $_tmp, 4) : smarty_modifier_default($_tmp, 4)); ?>
" cols="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['cols'])) ? $this->_run_mod_handler('default', true, $_tmp, 60) : smarty_modifier_default($_tmp, 60)); ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">{$fields.<?php echo $this->_tpl_vars['street']; ?>
.value}</textarea>
<?php endif; ?>
</td>
</tr>

<tr>

<td id="<?php echo $this->_tpl_vars['city']; ?>
_label" width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope='row' >
<label for="<?php echo $this->_tpl_vars['city']; ?>
">{sugar_translate label='LBL_CITY' module='<?php echo $this->_tpl_vars['module']; ?>
'}:
{if $fields.<?php echo $this->_tpl_vars['city']; ?>
.required || <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['city'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['displayParams']['required']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['displayParams']['required']))): ?>true<?php else: ?>false<?php endif; ?>}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="<?php echo $this->_tpl_vars['city']; ?>
" id="<?php echo $this->_tpl_vars['city']; ?>
" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" <?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'<?php endif; ?> value='{$fields.<?php echo $this->_tpl_vars['city']; ?>
.value}' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">
</td>
</tr>

<tr>
<td id="<?php echo $this->_tpl_vars['state']; ?>
_label" width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope='row' >
<label for="<?php echo $this->_tpl_vars['state']; ?>
">{sugar_translate label='LBL_STATE' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
{if $fields.<?php echo $this->_tpl_vars['state']; ?>
.required || <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['state'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['displayParams']['required']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['displayParams']['required']))): ?>true<?php else: ?>false<?php endif; ?>}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="<?php echo $this->_tpl_vars['state']; ?>
" id="<?php echo $this->_tpl_vars['state']; ?>
" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" <?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'<?php endif; ?> value='{$fields.<?php echo $this->_tpl_vars['state']; ?>
.value}' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">
</td>
</tr>

<tr>

<td id="<?php echo $this->_tpl_vars['postalcode']; ?>
_label" width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope='row' >

<label for="<?php echo $this->_tpl_vars['postalcode']; ?>
">{sugar_translate label='LBL_POSTAL_CODE' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
{if $fields.<?php echo $this->_tpl_vars['postalcode']; ?>
.required || <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['postalcode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['displayParams']['required']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['displayParams']['required']))): ?>true<?php else: ?>false<?php endif; ?>}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="<?php echo $this->_tpl_vars['postalcode']; ?>
" id="<?php echo $this->_tpl_vars['postalcode']; ?>
" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" <?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'<?php endif; ?> value='{$fields.<?php echo $this->_tpl_vars['postalcode']; ?>
.value}' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">
</td>
</tr>

<tr>

<td id="<?php echo $this->_tpl_vars['country']; ?>
_label" width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope='row' >

<label for="<?php echo $this->_tpl_vars['country']; ?>
">{sugar_translate label='LBL_COUNTRY' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
{if $fields.<?php echo $this->_tpl_vars['country']; ?>
.required || <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['displayParams']['required']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['displayParams']['required']))): ?>true<?php else: ?>false<?php endif; ?>}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="<?php echo $this->_tpl_vars['country']; ?>
" id="<?php echo $this->_tpl_vars['country']; ?>
" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" <?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'<?php endif; ?> value='{$fields.<?php echo $this->_tpl_vars['country']; ?>
.value}' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
">
</td>
</tr>

<?php if ($this->_tpl_vars['displayParams']['copy']): ?>
<tr>
<td scope='row' NOWRAP>
{sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
</td>
<td>
<input id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_checkbox" name="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_checkbox" type="checkbox" onclick="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address.syncFields();">
</td>
</tr>
<?php else: ?>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
<?php endif; ?>
</table>
</fieldset>
<script type="text/javascript">
    SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function(){ldelim}
		<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address = new SUGAR.AddressField("<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_checkbox",'<?php echo $this->_tpl_vars['displayParams']['copy']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['key']; ?>
');
	{rdelim});
</script>