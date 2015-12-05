<?php /* Smarty version 2.6.11, created on 2015-12-05 02:39:57
         compiled from modules/ModuleBuilder/tpls/MBModule/dropdown.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 78, false),)), $this); ?>
 <div>&nbsp;
<link rel="stylesheet" type="text/css" href="modules/ModuleBuilder/tpls/ListEditor.css"></link>
<link rel="stylesheet" type="text/css" href="modules/ModuleBuilder/tpls/MBModule/dropdown.css"></link> 
<form name='dropdown_form' onsubmit = "return false">
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='<?php echo $this->_tpl_vars['action']; ?>
'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['module_name']; ?>
'>
<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['package_name']; ?>
'>
<input type='hidden' id='list_value' name='list_value' value=''>
<?php if (( $this->_tpl_vars['refreshTree'] )): ?>
<input type='hidden' name='refreshTree' value='1'>
<?php endif; ?>
<table>
	<tr>
		<td colspan='3'>
			<input id = "saveBtn" type='button' class='button' onclick='SimpleList.handleSave()' value='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
'>
			<input type='button' class='button' onclick='SimpleList.undo()' value='<?php echo $this->_tpl_vars['MOD']['LBL_BTN_UNDO']; ?>
'>
			<input type='button' class='button' onclick='SimpleList.redo()' value='<?php echo $this->_tpl_vars['MOD']['LBL_BTN_REDO']; ?>
'>
			<input type='button' class='button' name='cancel' value='<?php echo $this->_tpl_vars['MOD']['LBL_BTN_CANCEL']; ?>
' onclick='ModuleBuilder.tabPanel.get("activeTab").close()'>
		</td>
	</tr>
	<tr>
		<td colspan='2'>
			<hr/>
		</td>
	</tr>
	<tr>
		<td>
			<span class='mbLBLL'><?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_TITLE_NAME']; ?>
:&nbsp;</span>
			<?php if ($this->_tpl_vars['name']): ?>
			<input type='hidden' id='dropdown_name' name='dropdown_name' value='<?php echo $this->_tpl_vars['dropdown_name']; ?>
'><?php echo $this->_tpl_vars['dropdown_name']; ?>

			<?php else: ?>
			<input type='text' id='dropdown_name' name='dropdown_name' value=<?php echo $this->_tpl_vars['prepopulated_name']; ?>
>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td class='mbLBLL'>
			<?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_LANGUAGE']; ?>
:&nbsp;
			<?php echo smarty_function_html_options(array('name' => 'dropdown_lang','options' => $this->_tpl_vars['available_languages'],'selected' => $this->_tpl_vars['selected_lang'],'onchange' => 'this.form.action.value="dropdown";ModuleBuilder.handleSave("dropdown_form")'), $this);?>

		</td>
	</tr>
	<tr>
		<td style='padding-top:10px;' class='mbLBLL'><?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_ITEMS']; ?>
:</td>
	</tr>
	<tr>
		<td><b><?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_ITEM_NAME']; ?>
</b><span class='fieldValue'>[<?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_ITEM_LABEL']; ?>
]<span></td>
	</tr>
	<tr>
		<td colspan='3'>
		    <ul id="ul1" class="listContainer">
		    <?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['val']):
?>
                <?php if (( ! isset ( $this->_tpl_vars['val'] ) || $this->_tpl_vars['val'] == '' )):  $this->assign('name', $this->_tpl_vars['MOD']['LBL_BLANK']);  endif; ?>
		    	<li class="draggable" id="<?php echo $this->_tpl_vars['name']; ?>
" >
			      <table width='100%'>
			        <tr>
			           <td>
			               <b><?php echo $this->_tpl_vars['name']; ?>
</b>
			               <input id='value_<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['val']; ?>
' type = 'hidden'>
			               <span class='fieldValue' id='span_<?php echo $this->_tpl_vars['name']; ?>
'>
			                   <?php if (( ! isset ( $this->_tpl_vars['val'] ) || $this->_tpl_vars['val'] == '' )): ?>[<?php echo $this->_tpl_vars['MOD']['LBL_BLANK']; ?>
]<?php else: ?>[<?php echo $this->_tpl_vars['val']; ?>
]<?php endif; ?>
			               </span>
			               <span class='fieldValue' id='span_edit_<?php echo $this->_tpl_vars['name']; ?>
' style='display:none'>
			                   <input type='text' id='input_<?php echo $this->_tpl_vars['name']; ?>
' value="<?php echo $this->_tpl_vars['val']; ?>
" onBlur='SimpleList.setDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", this.value, true)' >
			               </span>
			           </td>
			           <td align='right'>
			               <a href='javascript:void(0)' onclick='SimpleList.editDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", true)'>
			               <?php echo $this->_tpl_vars['editImage']; ?>
</a>
			               &nbsp;
			               <a href='javascript:void(0)' onclick='SimpleList.deleteDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", true)'>
			               <?php echo $this->_tpl_vars['deleteImage']; ?>
</a>
			           </td>
			        </tr>
			      </table>
			    </li>
			<?php endforeach; endif; unset($_from); ?>
		   </ul>
		</td>
	</tr>
	<tr>
		<td colspan='3'>
		   <table width='100%'>
		    	<tr>
		    		<td class='mbLBLL'><?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_ITEM_NAME']; ?>
:</td><td class='mbLBLL'><?php echo $this->_tpl_vars['MOD']['LBL_DROPDOWN_ITEM_LABEL']; ?>
:</td>
		    	</tr>
		    	<tr>
		    		<td><input type='text' id='drop_name' name='drop_name' maxlength='100'></td>
		    		<td><input type='text' id='drop_value' name='drop_value'></td>
		    	</tr>
		    	<tr><td><input type='button' id='dropdownaddbtn' value='<?php echo $this->_tpl_vars['APP']['LBL_ADD_BUTTON']; ?>
' class='button'></td></tr>
		    </table>
   		</td>
   	</tr>
   	<tr>
   		<td colspan='3'>
   			<input type='button' class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_BTN_SORT_ASCENDING']; ?>
' onclick='SimpleList.sortAscending()'>
   			<input type='button' class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_BTN_SORT_DESCENDING']; ?>
' onclick='SimpleList.sortDescending()'>
   		</td>
   	</tr>
  </table>
  </form>
  <?php echo '
<script>
addForm(\'dropdown_form\');
addToValidate(\'dropdown_form\', \'dropdown_name\', \'DBName\', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_NAME"));
addToValidate(\'dropdown_form\', \'drop_value\', \'varchar\', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_LABEL"));
eval(';  echo $this->_tpl_vars['ul_list'];  echo ');
SimpleList.ul_list = list;
SimpleList.init('; ?>
'<?php echo $this->_tpl_vars['editImage']; ?>
'<?php echo ', '; ?>
'<?php echo $this->_tpl_vars['deleteImage']; ?>
'<?php echo ');
ModuleBuilder.helpSetup(\'dropdowns\',\'editdropdown\');

var addListenerFields = [\'drop_name\',\'drop_value\' ]
YAHOO.util.Event.addListener(addListenerFields,"keydown", function(e){
	if (e.keyCode == 13) {
		YAHOO.util.Event.stopEvent(e);
	}
});

</script>
<script>// Bug in FF4 where it doesn\'t run the last script. Remove when the bug is fixed.</script>
'; ?>

</div>
