<?php /* Smarty version 2.6.11, created on 2015-12-04 22:15:50
         compiled from modules/Users/Changenewpassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Users/Changenewpassword.tpl', 52, false),)), $this); ?>
<?php echo '
<script type=\'text/javascript\'>
<!--
var ERR_RULES_NOT_MET = \'';  echo $this->_tpl_vars['MOD']['ERR_RULES_NOT_MET'];  echo '\';
var ERR_ENTER_OLD_PASSWORD = \'';  echo $this->_tpl_vars['MOD']['ERR_ENTER_OLD_PASSWORD'];  echo '\';
var ERR_ENTER_NEW_PASSWORD = \'';  echo $this->_tpl_vars['MOD']['ERR_ENTER_NEW_PASSWORD'];  echo '\';
var ERR_ENTER_CONFIRMATION_PASSWORD = \'';  echo $this->_tpl_vars['MOD']['ERR_ENTER_CONFIRMATION_PASSWORD'];  echo '\';
var ERR_REENTER_PASSWORDS = \'';  echo $this->_tpl_vars['MOD']['ERR_REENTER_PASSWORDS'];  echo '\';
-->
</script>
<script type=\'text/javascript\' src=\'';  echo smarty_function_sugar_getjspath(array('file' => "modules/Users/PasswordRequirementBox.js"), $this); echo '\'></script>
<style type="text/css">
<!--
.body 
{ 
    font-size: 12px;
}
    
.buttonLogin 
{
    border: 1px solid #444444;
    font-size: 11px;
    color: #ffffff;
    background-color: #666666;
    font-weight: bold;
}
    
table.tabForm td 
{
    border: none;
}

p 
{
    MARGIN-TOP: 0px;
    MARGIN-BOTTOM: 10px;
}
    
form 
{
    margin: 0px;
}
    
#recaptcha_image 
{
    height: 47.5px !important;
    width: 250px !important;
}

#recaptcha_image img 
{
    height: 47.5px;
    width: 250px;
} 	
-->
</style>
'; ?>


<form action="index.php" method="post" name="ChangePasswordForm" id="ChangePasswordForm" onsubmit="return document.getElementById('cant_login').value == ''">
<table cellpadding="0" align="center" width="100%" cellspacing="0" border="0">
<tr>
<td>
<table cellpadding="0"  cellspacing="0" border="0" align="center">
<tr>
<td style="padding-bottom: 10px;" >
<img src="<?php echo $this->_tpl_vars['sugar_md']; ?>
" alt="SuiteCRM" /></td>
</tr>
<tr>
<td align="center">

		<table cellpadding="0" cellspacing="2" border="0" align="center" width="100%" class="edit view">
		<tr>
			<td colspan="2" width="100%" style="font-size: 12px; padding-bottom: 5px; font-weight: normal;"><?php echo $this->_tpl_vars['INSTRUCTION']; ?>
</td>
		</tr>
			<input type="hidden" name="entryPoint" value="<?php echo $this->_tpl_vars['ENTRY_POINT']; ?>
" />
			<input type='hidden' name='action' value="<?php echo $this->_tpl_vars['ACTION']; ?>
" />
			<input type='hidden' name='module' value="<?php echo $this->_tpl_vars['MODULE']; ?>
" />
			<input type="hidden" name="guid" value="<?php echo $this->_tpl_vars['GUID']; ?>
" />
			<input type="hidden" name="return_module" value="Home" />
			<input type="hidden" name="login" value="1" />
			<input type="hidden" name="is_admin" value="<?php echo $this->_tpl_vars['IS_ADMIN']; ?>
" />
			<input type="hidden" name="cant_login" id="cant_login" value="" />
			<input type="hidden" name="old_password" id="old_password" value="" />
			<input type="hidden" name="password_change" id="password_change" value="true" />
			<input type="hidden" value="" name="user_password" id="user_password" />
			<input type="hidden" name="page" value="Change" />
			<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['ID']; ?>
" />
			<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['return_action']; ?>
" />
			<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['ID']; ?>
" />
			<input type="hidden" name="user_name" value="<?php echo $this->_tpl_vars['USER_NAME']; ?>
" />
			<input type='hidden' name='saveConfig' value='0' />
		<tr>
			<td  colspan='2'><span id='post_error' class="error"><?php echo $this->_tpl_vars['EXPIRATION_TYPE']; ?>
&nbsp;</span></td>
		</tr>
		
		<tr>
		<?php if ($this->_tpl_vars['OLD_PASSWORD_FIELD'] == '' && $this->_tpl_vars['USERNAME_FIELD'] == ''): ?>
		<td  width="30%"></td><td></td>
		<?php endif; ?>
			<?php echo $this->_tpl_vars['OLD_PASSWORD_FIELD']; ?>

			<?php echo $this->_tpl_vars['USERNAME_FIELD']; ?>

		</tr>
		<tr>
			<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_NEW_PASSWORD']; ?>
:</td>
			<td width="30%"><input type="password" size="26" tabindex="2" id="new_password" name="new_password" value="" onkeyup="password_confirmation();newrules('<?php echo $this->_tpl_vars['PWDSETTINGS']['minpwdlength']; ?>
','<?php echo $this->_tpl_vars['PWDSETTINGS']['maxpwdlength']; ?>
','<?php echo $this->_tpl_vars['REGEX']; ?>
');" /></td>
		</tr>
		<tr>
			<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_NEW_PASSWORD2']; ?>
:</td>
			<td width="30%"><input type="password" size="26" tabindex="2" id="confirm_pwd" name="confirm_pwd" value="" onkeyup="password_confirmation();" /> <div id="comfirm_pwd_match" class="error" style="display: none;">mis-match</div></td>
		</tr>
		<tr>
			<td><?php echo $this->_tpl_vars['CAPTCHA']; ?>
</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<?php echo $this->_tpl_vars['SUBMIT_BUTTON']; ?>

			</td>		
		</tr>
		</table>
	</td>
</tr>
</table>
</td>
</tr>
</table>
</form>