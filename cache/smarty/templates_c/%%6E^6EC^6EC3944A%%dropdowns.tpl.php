<?php /* Smarty version 2.6.11, created on 2015-12-05 02:38:22
         compiled from modules/ModuleBuilder/tpls/MBModule/dropdowns.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'modules/ModuleBuilder/tpls/MBModule/dropdowns.tpl', 50, false),)), $this); ?>

<div id='dropdowns'>
<input type='button' name='adddropdownbtn'
	value='<?php echo $this->_tpl_vars['LBL_BTN_ADDDROPDOWN']; ?>
' class='button'
	onclick='ModuleBuilder.getContent("module=ModuleBuilder&action=dropdown&refreshTree=1");'>&nbsp;

<hr>
<table width='100%'>
	<colgroup span='3' width='33%'>
	
	
	<tr>
		<?php echo smarty_function_counter(array('name' => 'items','assign' => 'items','start' => 0), $this);?>
 <?php $_from = $this->_tpl_vars['dropdowns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['def']):
?> <?php if ($this->_tpl_vars['items'] % 3 == 0 && $this->_tpl_vars['items'] != 0): ?>
	</tr>
	<tr>
		<?php endif; ?>
		<td><a class='mbLBLL' href='javascript:void(0)'
			onclick='ModuleBuilder.getContent("module=ModuleBuilder&action=dropdown&dropdown_name=<?php echo $this->_tpl_vars['name']; ?>
")'><?php echo $this->_tpl_vars['name']; ?>
</a></td>
		<?php echo smarty_function_counter(array('name' => 'items'), $this);?>
 <?php endforeach; endif; unset($_from); ?> <?php if ($this->_tpl_vars['items'] == 0): ?>
		<td class='mbLBLL'><?php echo $this->_tpl_vars['mod_strings']['LBL_NONE']; ?>
</td>
		<?php elseif ($this->_tpl_vars['items'] % 3 == 1): ?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php elseif ($this->_tpl_vars['items'] % 3 == 2): ?>
		<td>&nbsp;</td>
		<?php endif; ?>
	</tr>
</table>

<script>
ModuleBuilder.helpRegisterByID('dropdowns', 'input');
ModuleBuilder.helpSetup('dropdowns','default');
</script> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ModuleBuilder/tpls/assistantJavascript.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>