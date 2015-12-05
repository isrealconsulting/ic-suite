<?php /* Smarty version 2.6.11, created on 2015-12-04 23:20:23
         compiled from modules/Leads/tpls/ConvertLeadFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modules/Leads/tpls/ConvertLeadFooter.tpl', 85, false),array('function', 'sugar_translate', 'modules/Leads/tpls/ConvertLeadFooter.tpl', 88, false),array('function', 'sugar_help', 'modules/Leads/tpls/ConvertLeadFooter.tpl', 88, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
    var accountText = document.getElementById(\'account_name\');

    // add focus() to the onclick event handler of the clear account name button
    // because we need onblur to be triggered after account name is cleared
    var clearButton = document.getElementById(\'btn_clr_account_name\');
    if (clearButton && accountText) {
        clearButton.attributes[\'onclick\'].value = "accountText.focus();" + clearButton.attributes[\'onclick\'].value + "clearButton.focus();";
    }

    // add onblur event handler to the account name text to update the module dropdown
    var account_name = document.getElementById(\'account_name\');

    function onBlurKeyUpHandler() {
        var dropdown = document.getElementById(\'lead_conv_ac_op_sel\');
        if (!dropdown || !account_name) {
            return;
        }
        var found = false;
        var i;
        var module = \'Accounts\';
        for (i=dropdown.options.length-1; i>=0; i--) {
            if (dropdown.options[i].value == module) {
                found = true;
                if (account_name.value == \'\') {
                    dropdown.remove(i);
                }
                break;
            }
        }
        if (!found && account_name.value != \'\') {
            var opt = document.createElement("option");
            opt.text = SUGAR.language.get(\'app_list_strings\', "moduleListSingular")[module];
            opt.value = module;
            opt.label = opt.text;
            dropdown.options.add(opt);
        }
    }
    if (account_name) {
        account_name.onblur = onBlurKeyUpHandler;
        account_name.onkeyup = onBlurKeyUpHandler;
    }
</script>
'; ?>


<?php if ($this->_tpl_vars['lead_conv_activity_opt'] == 'move'): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="lead_conv_ac_op">
<tr>
    <td width="15%" class="rssItemDate">
        <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVITIES_MOVE','module' => 'Leads'), $this);?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ACTIVITIES_MOVE_HELP']), $this);?>

    </td>
    <td>
        <select id="lead_conv_ac_op_sel" name="lead_conv_ac_op_sel">
            <?php echo $this->_tpl_vars['convertModuleListOptions']; ?>

        </select>
    </td>
</tr>
</table>
<?php elseif ($this->_tpl_vars['lead_conv_activity_opt'] == 'copy' || $this->_tpl_vars['lead_conv_activity_opt'] == ''): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="lead_conv_ac_op">
<tr>
    <td width="15%" class="rssItemDate">
        <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVITIES_COPY','module' => 'Leads'), $this);?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ACTIVITIES_COPY_HELP']), $this);?>

    </td>
    <td>
        <select id="lead_conv_ac_op_sel" name="lead_conv_ac_op_sel[]" size="5" multiple="">
            <?php echo $this->_tpl_vars['convertModuleListOptions']; ?>

        </select>
    </td>
</tr>
</table>
<?php endif; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?>
    <input title='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_LABEL'), $this);?>
' class="button primary"
        onclick="return check_form('<?php echo $this->_tpl_vars['form_name']; ?>
');"
        type="submit" name="button" id="SAVE_FOOTER" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_LABEL'), $this);?>
">
<?php endif; ?>

<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['record_id'] ) )): ?>
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON'), $this);?>
"  class="button"
        onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';"
        type="submit" id="CANCEL_FOOTER" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?>';
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_TITLE'), $this);?>
" class="button"
        onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';"
        type="submit" id="CANCEL_FOOTER" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php else: ?>
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_TITLE'), $this);?>
"  class="button"
        onclick="this.form.action.value='DetailView'; this.form.module.value='Leads'; this.form.record.value='<?php echo $_REQUEST['record']; ?>
';"
        type="submit" id="CANCEL_FOOTER" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php endif; ?>
</td>
</tr>
</table>
 <script type="text/javascript">
   addDropdownElements();//Bug#50590 after  lead_conv_ac_op_sel is loaded fill it with all required modules
 </script>