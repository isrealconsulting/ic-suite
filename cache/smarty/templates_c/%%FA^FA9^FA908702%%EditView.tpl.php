<?php /* Smarty version 2.6.11, created on 2015-12-04 10:22:04
         compiled from include/EditView/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/EditView/EditView.tpl', 50, false),array('function', 'math', 'include/EditView/EditView.tpl', 124, false),array('function', 'sugar_field', 'include/EditView/EditView.tpl', 213, false),array('function', 'sugar_evalcolumn', 'include/EditView/EditView.tpl', 218, false),array('modifier', 'upper', 'include/EditView/EditView.tpl', 54, false),array('modifier', 'count', 'include/EditView/EditView.tpl', 126, false),)), $this); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['headerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
{sugar_include include=$includes}

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>

<div id="<?php echo $this->_tpl_vars['form_name']; ?>
_tabs"
<?php if ($this->_tpl_vars['useTabs']): ?>
class="yui-navset"
<?php endif; ?>
>
    <?php if ($this->_tpl_vars['useTabs']): ?>
    {* Generate the Tab headers *}
    <?php echo smarty_function_counter(array('name' => 'tabCount','start' => -1,'print' => false,'assign' => 'tabCount'), $this);?>

    <ul class="yui-nav">
    <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
        <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

        <?php ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));  $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
        <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == true )): ?>
        <li class="selected"><a id="tab<?php echo $this->_tpl_vars['tabCount']; ?>
" href="javascript:void(<?php echo $this->_tpl_vars['tabCount']; ?>
)"><em>{sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}</em></a></li>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <?php endif; ?>
    <div <?php if ($this->_tpl_vars['useTabs']): ?>class="yui-content"<?php endif; ?>>

<?php $this->assign('tabIndexVal', 0);  echo smarty_function_counter(array('name' => 'panelCount','start' => -1,'print' => false,'assign' => 'panelCount'), $this);?>

<?php echo smarty_function_counter(array('name' => 'tabCount','start' => -1,'print' => false,'assign' => 'tabCount'), $this);?>

<?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
 echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

<?php ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));  $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
  <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == true )): ?>
    <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

    <?php if ($this->_tpl_vars['tabCount'] != 0): ?></div><?php endif; ?>
    <div id='tabcontent<?php echo $this->_tpl_vars['tabCount']; ?>
'>
  <?php endif; ?>

<?php if ($this->_tpl_vars['label'] == 'DEFAULT'): ?>
  <div id="detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
" >
<?php else: ?>
  <div id="detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
<?php endif; ?>

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<?php if (! is_array ( $this->_tpl_vars['panel'] )): ?>
    {sugar_include type='php' file='<?php echo $this->_tpl_vars['panel']; ?>
'}
<?php else: ?>

<?php if (! empty ( $this->_tpl_vars['label'] ) && ! is_int ( $this->_tpl_vars['label'] ) && $this->_tpl_vars['label'] != 'DEFAULT' && $this->_tpl_vars['showSectionPanelsTitles'] && ( ! isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) || ( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == false ) ) && $this->_tpl_vars['view'] != 'QuickCreate'): ?>
<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(<?php echo $this->_foreach['section']['iteration']; ?>
);">
  <img border="0" id="detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(<?php echo $this->_foreach['section']['iteration']; ?>
);">
  <img border="0" id="detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
  {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
  <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['panelDefault'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['panelDefault'] == 'collapsed' && isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == false )): ?>
    <?php $this->assign('panelState', $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['panelDefault']); ?>
  <?php else: ?>
    <?php $this->assign('panelState', 'expanded'); ?>
  <?php endif; ?>
  <?php if (isset ( $this->_tpl_vars['panelState'] ) && $this->_tpl_vars['panelState'] == 'collapsed'): ?>
    <script>
      document.getElementById('detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
').className += ' collapsed';
    </script>
    <?php else: ?>
    <script>
      document.getElementById('detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
').className += ' expanded';
    </script>
  <?php endif; ?>
</h4>
 <?php endif; ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" <?php if ($this->_tpl_vars['label'] == 'DEFAULT'): ?> id='Default_{$module}_Subpanel' <?php else: ?> id='<?php echo $this->_tpl_vars['label']; ?>
' <?php endif; ?> class="yui3-skin-sam edit view panelContainer">


<?php $this->assign('rowCount', 0);  $this->assign('ACCKEY', '');  $_from = $this->_tpl_vars['panel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	<?php echo smarty_function_math(array('assign' => 'rowCount','equation' => ($this->_tpl_vars['rowCount'])." + 1"), $this);?>

	
	<?php $this->assign('columnsInRow', count($this->_tpl_vars['rowData'])); ?>
	<?php $this->assign('columnsUsed', 0); ?>

        <?php echo smarty_function_counter(array('name' => 'colCount','start' => 0,'print' => false,'assign' => 'colCount'), $this);?>


	<?php $_from = $this->_tpl_vars['rowData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>

	<?php echo smarty_function_counter(array('name' => 'colCount','print' => false), $this);?>


	<?php if (count ( $this->_tpl_vars['rowData'] ) == $this->_tpl_vars['colCount']): ?>
		<?php $this->assign('colCount', 0); ?>
	<?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideIf'] )): ?>
    	{if !(<?php echo $this->_tpl_vars['colData']['field']['hideIf']; ?>
) }
    <?php endif; ?>

		<?php if (empty ( $this->_tpl_vars['def']['templateMeta']['labelsOnTop'] ) && empty ( $this->_tpl_vars['colData']['field']['hideLabel'] )): ?>
		<td valign="top" id='<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
_label' width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope="col">
			<?php if (isset ( $this->_tpl_vars['colData']['field']['customLabel'] )): ?>
			   <label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
"><?php echo $this->_tpl_vars['colData']['field']['customLabel']; ?>
</label>
			<?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
			   {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
			   {$label|strip_semicolon}:
			<?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
			   {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
			   {$label|strip_semicolon}:
			<?php else: ?>
			    &nbsp;
			<?php endif; ?>
							<?php if (( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['required'] && ( ! isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) || $this->_tpl_vars['colData']['field']['displayParams']['required'] ) ) || ( isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) && $this->_tpl_vars['colData']['field']['displayParams']['required'] )): ?>
			    <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
			<?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] ) || isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] ) && isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
              <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] )): ?>
                {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['colData']['field']['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
              <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
              <?php endif; ?>
              {sugar_help text=$popupText WIDTH=-1}
            <?php endif; ?>

		</td>
		<?php endif; ?>
		{counter name="fieldsUsed"}
		<?php echo smarty_function_math(array('assign' => 'tabIndexVal','equation' => ($this->_tpl_vars['tabIndexVal'])." + 1"), $this);?>

		<?php if ($this->_tpl_vars['tabIndexVal'] == 1): ?> <?php $this->assign('ACCKEY', $this->_tpl_vars['APP']['LBL_FIRST_INPUT_EDIT_VIEW_KEY']);  else:  $this->assign('ACCKEY', '');  endif; ?>
		<?php if (! empty ( $this->_tpl_vars['colData']['field']['tabindex'] ) && $this->_tpl_vars['colData']['field']['tabindex'] != 0): ?>
		    <?php $this->assign('tabindex', $this->_tpl_vars['colData']['field']['tabindex']); ?>
                        <?php if ($this->_tpl_vars['colData']['field']['name'] == 'email1'): ?><script>SUGAR.TabFields['<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
'] = '<?php echo $this->_tpl_vars['tabindex']; ?>
';</script><?php endif; ?>
		<?php else: ?>
		    {** if not explicitly assigned, we will default to 0 for 508 compliance reasons, instead of the calculated tabIndexVal value **}
		    <?php $this->assign('tabindex', 0); ?>
		<?php endif; ?>
		<td valign="top" width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['field']; ?>
%' <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?>>
			<?php if (! empty ( $this->_tpl_vars['def']['templateMeta']['labelsOnTop'] )): ?>
				<?php if (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
				    <?php if (! empty ( $this->_tpl_vars['colData']['field']['label'] )): ?>
			   		    <label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
">{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
				    <?php endif; ?>
				<?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
			  		<label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
">{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
				<?php endif; ?>

								<?php if (( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['required'] && ( ! isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) || $this->_tpl_vars['colData']['field']['displayParams']['required'] ) ) || ( isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) && $this->_tpl_vars['colData']['field']['displayParams']['required'] )): ?>
				    <span class="required" title="<?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_TITLE']; ?>
"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
				<?php endif; ?>
				<?php if (! isset ( $this->_tpl_vars['colData']['field']['label'] ) || ! empty ( $this->_tpl_vars['colData']['field']['label'] )): ?>
				<br>
				<?php endif; ?>
			<?php endif; ?>

		<?php echo $this->_tpl_vars['colData']['field']['prefix']; ?>


			<?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] && ! empty ( $this->_tpl_vars['colData']['field']['fields'] )): ?>
			    <?php $_from = $this->_tpl_vars['colData']['field']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField']):
?>
			        <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['subField']['name']]): ?>
			        	{counter name="panelFieldCount"}
			            <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['tabindex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['subField']['name']],'displayType' => 'EditView','displayParams' => $this->_tpl_vars['subField']['displayParams'],'formName' => $this->_tpl_vars['form_name'],'module' => $this->_tpl_vars['module']), $this);?>
&nbsp;
			        <?php endif; ?>
			    <?php endforeach; endif; unset($_from); ?>
			<?php elseif (! empty ( $this->_tpl_vars['colData']['field']['customCode'] ) && empty ( $this->_tpl_vars['colData']['field']['customCodeRenderField'] )): ?>
				{counter name="panelFieldCount"}
				<?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field']['customCode'],'colData' => $this->_tpl_vars['colData'],'accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['tabindex']), $this);?>

			<?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
				{counter name="panelFieldCount"}
			    <?php echo $this->_tpl_vars['colData']['displayParams']; ?>

				<?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['tabindex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'EditView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type'],'formName' => $this->_tpl_vars['form_name'],'module' => $this->_tpl_vars['module']), $this);?>

			<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['colData']['field']['customCode'] ) && ! empty ( $this->_tpl_vars['colData']['field']['customCodeRenderField'] )): ?>
	    {counter name="panelFieldCount"}
	    <?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field']['customCode'],'colData' => $this->_tpl_vars['colData'],'tabindex' => $this->_tpl_vars['tabindex']), $this);?>

    <?php endif; ?>
    <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideIf'] )): ?>
		{else}
		<td></td><td></td>
		{/if}
    <?php endif; ?>

	<?php endforeach; endif; unset($_from); ?>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
<?php endforeach; endif; unset($_from); ?>
</table>
<?php if (! empty ( $this->_tpl_vars['label'] ) && ! is_int ( $this->_tpl_vars['label'] ) && $this->_tpl_vars['label'] != 'DEFAULT' && $this->_tpl_vars['showSectionPanelsTitles'] && ( ! isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) || ( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == false ) ) && $this->_tpl_vars['view'] != 'QuickCreate'): ?>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(<?php echo $this->_foreach['section']['iteration']; ?>
, '<?php echo $this->_tpl_vars['panelState']; ?>
'); {rdelim}); </script>
<?php endif; ?>

<?php endif; ?>

</div>
{if $panelFieldCount == 0}

<script>document.getElementById("<?php echo $this->_tpl_vars['label']; ?>
").style.display='none';</script>
{/if}
<?php endforeach; endif; unset($_from); ?>
</div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['useTabs']): ?>
{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
<script type="text/javascript">
var <?php echo $this->_tpl_vars['form_name']; ?>
_tabs = new YAHOO.widget.TabView("<?php echo $this->_tpl_vars['form_name']; ?>
_tabs");
<?php echo $this->_tpl_vars['form_name']; ?>
_tabs.selectTab(0);
</script>
<?php endif; ?>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("<?php echo $this->_tpl_vars['form_name']; ?>
",
    function () {ldelim} initEditView(document.forms.<?php echo $this->_tpl_vars['form_name']; ?>
) {rdelim});
//window.setTimeout(, 100);
<?php if ($this->_tpl_vars['module'] == 'Users'): ?>
window.onbeforeunload = function () {ldelim} return disableOnUnloadEditView(); {rdelim};
<?php else: ?>
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
<?php endif; ?>
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>