<?php /* Smarty version 2.6.11, created on 2015-12-04 22:38:07
         compiled from modules/ACLRoles/DetailViewBody.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'modules/ACLRoles/DetailViewBody.tpl', 73, false),)), $this); ?>

<?php echo '<TABLE width=\'100%\' class=\'detail view\' border=\'0\' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td>';  $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME']):
 echo '<td style="text-align: center;" scope="row"><b>';  echo $this->_tpl_vars['ACTION_NAME'];  echo '</b></td>';  endforeach; else:  echo '<td colspan="2">&nbsp;</td>';  endif; unset($_from);  echo '</TR>';  $_from = $this->_tpl_vars['CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CATEGORY_NAME'] => $this->_tpl_vars['TYPES']):
 echo '';  if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] != 'Users'):  echo '<TR>';  if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] == 'Users'):  echo '<td nowrap width=\'1%\' scope="row"><b>';  echo $this->_tpl_vars['MOD']['LBL_USER_NAME_FOR_ROLE'];  echo '</b></td>';  else:  echo '<td nowrap width=\'1%\' scope="row"><b>';  echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']];  echo '</b></td>';  endif;  echo '';  $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
 echo '';  $this->assign('ACTION_FIND', 'false');  echo '';  $_from = $this->_tpl_vars['TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPE_NAME'] => $this->_tpl_vars['ACTIONS']):
 echo '';  $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
 echo '';  if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']):  echo '';  $this->assign('ACTION_FIND', 'true');  echo '<td  width=\'';  echo $this->_tpl_vars['TDWIDTH'];  echo '%\' align=\'center\'><div align=\'center\' class="acl';  echo ((is_array($_tmp=$this->_tpl_vars['ACTION']['accessLabel'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp));  echo '"><b>';  echo $this->_tpl_vars['ACTION']['accessName'];  echo '</b></div></td>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '';  endforeach; endif; unset($_from);  echo '';  if ($this->_tpl_vars['ACTION_FIND'] == 'false'):  echo '<td nowrap width=\'';  echo $this->_tpl_vars['TDWIDTH'];  echo '%\' style="text-align: center;"><div><font color=\'red\'>N/A</font></div></td>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</TR>';  endif;  echo '';  endforeach; else:  echo '<tr> <td colspan="2">No Actions</td></tr>';  endif; unset($_from);  echo '</TABLE>'; ?>