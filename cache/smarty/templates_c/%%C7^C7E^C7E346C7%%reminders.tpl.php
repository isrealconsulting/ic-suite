<?php /* Smarty version 2.6.11, created on 2015-12-04 10:16:45
         compiled from modules/Meetings/tpls/reminders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/Meetings/tpls/reminders.tpl', 79, false),)), $this); ?>

	<?php if ($this->_tpl_vars['fields']['reminder_time']): ?>            	
            	
            	<?php $this->assign('REMINDER_TIME_OPTIONS', $this->_tpl_vars['fields']['reminder_time']['options']); ?>
            	<?php $this->assign('EMAIL_REMINDER_TIME_OPTIONS', $this->_tpl_vars['fields']['reminder_time']['options']); ?>	
            	
            	<?php if (! $this->_tpl_vars['fields']['reminder_checked']['value']): ?>            		
            		<?php $this->assign('REMINDER_TIME', -1); ?>
            	<?php else: ?>
            		<?php $this->assign('REMINDER_TIME', $this->_tpl_vars['fields']['reminder_time']['value']); ?>
            	<?php endif; ?>
            	<?php if (! $this->_tpl_vars['fields']['email_reminder_checked']['value']): ?>            		
            		<?php $this->assign('EMAIL_REMINDER_TIME', -1); ?>
            	<?php else: ?>
            		<?php $this->assign('EMAIL_REMINDER_TIME', $this->_tpl_vars['fields']['email_reminder_time']['value']); ?>
            	<?php endif; ?>
	<?php endif; ?>
	
	<?php $this->assign('REMINDER_TIME_DISPLAY', 'none'); ?>
	<?php $this->assign('EMAIL_REMINDER_TIME_DISPLAY', 'none'); ?>
	<?php if ($this->_tpl_vars['REMINDER_TIME'] != -1): ?>
            	<?php $this->assign('REMINDER_CHECKED', 'checked'); ?>
            	<?php $this->assign('REMINDER_TIME_DISPLAY', 'inline'); ?>	
	<?php endif; ?>
        <?php if ($this->_tpl_vars['EMAIL_REMINDER_TIME'] != -1): ?>
            	<?php $this->assign('EMAIL_REMINDER_CHECKED', 'checked'); ?>
            	<?php $this->assign('EMAIL_REMINDER_TIME_DISPLAY', 'inline'); ?>
        <?php endif; ?>


<?php if ($this->_tpl_vars['view'] == 'EditView' || $this->_tpl_vars['view'] == 'QuickCreate' || $this->_tpl_vars['view'] == 'QuickEdit'): ?>

		<div>
		    	   	
		    	<input name="reminder_checked" type="hidden" value="0">
		    	<input name="reminder_checked" id="reminder_checked" onclick="toggleReminder(this,'reminder');" type="checkbox" class="checkbox" value="1" <?php echo $this->_tpl_vars['REMINDER_CHECKED']; ?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_POPUP']; ?>
</div>
		    	<div id="reminder_list" style="display: <?php echo $this->_tpl_vars['REMINDER_TIME_DISPLAY']; ?>
">
		    		<select tabindex="<?php echo $this->_tpl_vars['REMINDER_TABINDEX']; ?>
" name="reminder_time">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['REMINDER_TIME_OPTIONS'],'selected' => $this->_tpl_vars['REMINDER_TIME']), $this);?>

				</select>
		    	</div>
            	</div>
            	<div>
		    	
		   	<input name="email_reminder_checked" type="hidden" value="0">
		    	<input name="email_reminder_checked" id="email_reminder_checked" onclick="toggleReminder(this,'email_reminder');" type="checkbox" class="checkbox" value="1" <?php echo $this->_tpl_vars['EMAIL_REMINDER_CHECKED']; ?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_EMAIL_ALL_INVITEES']; ?>
</div>
		    	<div id="email_reminder_list" style="display: <?php echo $this->_tpl_vars['EMAIL_REMINDER_TIME_DISPLAY']; ?>
">
		    		<select tabindex="<?php echo $this->_tpl_vars['REMINDER_TABINDEX']; ?>
" name="email_reminder_time">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['EMAIL_REMINDER_TIME_OPTIONS'],'selected' => $this->_tpl_vars['EMAIL_REMINDER_TIME']), $this);?>

				</select>
		    	</div>
		</div>
            	<script type="text/javascript">
            		<?php echo ' 
			function toggleReminder(el,field){
				if(el.checked){
					document.getElementById(field + "_list").style.display = "inline";
				}else{
					document.getElementById(field + "_list").style.display = "none";
				}
			}
			'; ?>

            	</script>
	<?php else: ?>
		<div>			
			<input type="checkbox" disabled  <?php echo $this->_tpl_vars['REMINDER_CHECKED']; ?>
>
			<?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_POPUP']; ?>

			<?php if ($this->_tpl_vars['REMINDER_TIME'] != -1): ?>
				<?php echo $this->_tpl_vars['REMINDER_TIME_OPTIONS'][$this->_tpl_vars['REMINDER_TIME']]; ?>

			<?php endif; ?>			
		</div>
		<div>			
			<input type="checkbox" disabled  <?php echo $this->_tpl_vars['EMAIL_REMINDER_CHECKED']; ?>
>
			<?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_EMAIL_ALL_INVITEES']; ?>

			<?php if ($this->_tpl_vars['EMAIL_REMINDER_TIME'] != -1): ?>
				<?php echo $this->_tpl_vars['EMAIL_REMINDER_TIME_OPTIONS'][$this->_tpl_vars['EMAIL_REMINDER_TIME']]; ?>

			<?php endif; ?>			
		</div>
	<?php endif; ?>	