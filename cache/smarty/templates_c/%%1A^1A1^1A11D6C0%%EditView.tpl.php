<?php /* Smarty version 2.6.11, created on 2015-12-04 23:20:23
         compiled from include/SugarFields/Fields/Datetime/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Datetime/EditView.tpl', 38, false),)), $this); ?>
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
<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>
<span class="dateTime">
{assign var=date_value value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['idname']; ?>
" id="<?php echo $this->_tpl_vars['idname']; ?>
" value="{$date_value}" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' <?php echo $this->_tpl_vars['displayParams']['field']; ?>
 tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
' <?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?>   size="11" maxlength="10" >
<?php if (! $this->_tpl_vars['displayParams']['hiddeCalendar']): ?>
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['idname']; ?>
_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
<?php endif;  if ($this->_tpl_vars['displayParams']['showFormats']): ?>
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<?php endif; ?>
</span>
<?php if (! $this->_tpl_vars['displayParams']['hiddeCalendar']): ?>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "<?php echo $this->_tpl_vars['idname']; ?>
",
form : "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "<?php echo $this->_tpl_vars['idname']; ?>
_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
<?php endif; ?>