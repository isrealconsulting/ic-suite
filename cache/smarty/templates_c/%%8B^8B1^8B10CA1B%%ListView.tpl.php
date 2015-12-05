<?php /* Smarty version 2.6.11, created on 2015-12-04 09:52:19
         compiled from include/SugarFields/Fields/Bool/ListView.tpl */ ?>

    <?php if (strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == '1' || strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == 'yes' || strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == 'on'):  $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>