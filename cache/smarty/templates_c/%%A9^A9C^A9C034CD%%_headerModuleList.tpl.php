<?php /* Smarty version 2.6.11, created on 2015-12-04 09:52:19
         compiled from themes/Suite7/tpls/_headerModuleList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_link', 'themes/Suite7/tpls/_headerModuleList.tpl', 72, false),)), $this); ?>

<?php if ($this->_tpl_vars['USE_GROUP_TABS']): ?>
    <div id="moduleList">
        <ul>
            <li class="noBorder">&nbsp;</li>
            <?php $this->assign('groupSelected', false); ?>
            <?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group'];  $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                <?php if (( ( $_REQUEST['parentTab'] == $this->_tpl_vars['group'] || ( ! $_REQUEST['parentTab'] && in_array ( $this->_tpl_vars['MODULE_TAB'] , $this->_tpl_vars['modules']['modules'] ) ) ) && ! $this->_tpl_vars['groupSelected'] ) || ( ($this->_foreach['groupList']['iteration']-1) == 0 && $this->_tpl_vars['defaultFirst'] )): ?>
                    <li class="noBorder">
                        <span class="currentTabLeft">&nbsp;</span><span class="currentTab">
            <a href="#" id="grouptab_<?php echo ($this->_foreach['groupList']['iteration']-1); ?>
"><?php echo $this->_tpl_vars['group']; ?>
</a>
        </span><span class="currentTabRight">&nbsp;</span></li>
                        <?php $this->assign('groupSelected', true); ?>
                        <?php else: ?>
                    <li>
                    <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_<?php echo ($this->_foreach['groupList']['iteration']-1); ?>
"><?php echo $this->_tpl_vars['group']; ?>
</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
                <?php endif; ?>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div id="subModuleList">
        <?php $this->assign('groupSelected', false); ?>
        <?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['moduleList']['iteration']++;
?>
            <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group'];  $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
            <span id="moduleLink_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
" <?php if (( ( $_REQUEST['parentTab'] == $this->_tpl_vars['group'] || ( ! $_REQUEST['parentTab'] && in_array ( $this->_tpl_vars['MODULE_TAB'] , $this->_tpl_vars['modules']['modules'] ) ) ) && ! $this->_tpl_vars['groupSelected'] ) || ( ($this->_foreach['moduleList']['iteration']-1) == 0 && $this->_tpl_vars['defaultFirst'] )): ?>class="selected" <?php $this->assign('groupSelected', true);  endif; ?>>
    	<ul>
            <?php $_from = $this->_tpl_vars['modules']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulekey'] => $this->_tpl_vars['module']):
?>
                <li>
                    <?php ob_start(); ?>moduleTab_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
_<?php echo $this->_tpl_vars['module'];  $this->_smarty_vars['capture']['moduleTabId'] = ob_get_contents();  $this->assign('moduleTabId', ob_get_contents());ob_end_clean(); ?>
                    <?php echo smarty_function_sugar_link(array('id' => $this->_tpl_vars['moduleTabId'],'module' => $this->_tpl_vars['modulekey'],'data' => $this->_tpl_vars['module'],'extraparams' => $this->_tpl_vars['extraparams']), $this);?>

                </li>
            <?php endforeach; endif; unset($_from); ?>
            <?php if (! empty ( $this->_tpl_vars['modules']['extra'] )): ?>
                <li class="subTabMore">
                    <a>>></a>
                    <ul class="cssmenu">
                        <?php $_from = $this->_tpl_vars['modules']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                            <li>
                                <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>

                                </a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </span>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php else: ?>
    <div id="moduleList">
        <ul>
            <li class="noBorder">&nbsp;</li>
                <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
            <li>
                <span class="currentTabLeft">&nbsp;</span>
                <span class="currentTab"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span><span>&nbsp;</span>
                <ul class="cssmenu">
                    <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                    <h3 class="home_h2"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                <span class="breaker">

                            <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                    <li>  <a></a><span>&nbsp;</span></li>
                            <?php else: ?>
                                <li > <a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><span><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</span></a><br></li>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                                    <br>
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['name'] == 'Home' && ! $this->_tpl_vars['lock_homepage']): ?>
                                        <h3 class="home_h2"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                        <li style="margin-top:5px; margin-bottom:5px;"><a href="" onclick="return SUGAR.mySugar.showDashletsDialog();"><?php echo $this->_tpl_vars['APP']['LBL_ADD_DASHLETS']; ?>
</a></li>
                                    <?php endif; ?>
                                    <h3 class="home_h2"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h3><br>
                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['name'] == 'Home'): ?>

                                    <table style="width:100%">

                                        <tr>
                                            <td>

                                                <li>
                                                    <span></span>

                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                       accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                       href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                                        <span><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                    </a>
                                            </td>
                                            <td align="right">
                                                <em><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><img style="float:right;" src="index.php?entryPoint=getImage&imageName=dashlet-header-edit.png" width="14" height="14" class="iconed_dull"></a></em>
                                            </td>
                                            </span>
            </li>

            </tr>
            </table>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                <table style="width:100%">
                    <tr>
                        <td>
                            <li>
                                            <span>
                                            <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                               accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                               href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                                <span><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                            </a>
                        </td>
                        <td align="right">
                            <em><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><img style="float:right;" src="index.php?entryPoint=getImage&imageName=dashlet-header-edit.png" width="14" height="14" class="iconed_dull"></a></em>
                        </td>
                        </span>
                        </li>
                        </td>
                    </tr>
                </table>
            <?php endif; ?>
            <?php endforeach; else: ?>
            <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

            <?php endif; unset($_from); ?>
                        </ul>
                        <?php else: ?>
                        <li>
                            <span class="notCurrentTabLeft">&nbsp;</span>
                            <span class="notCurrentTab"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span><span class="notCurrentTabRight">&nbsp;</span>
                            <ul class="cssmenu">
                            <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                <h3 class="home_h2"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                <span class="breaker">
                            <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                <li>  <a></a><span>&nbsp;</span></li>
                            <?php else: ?>
                                <li > <a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><span><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</span></a><br></li>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                                <br>
                            <?php endif; ?>
                            <h3 class="home_h2"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h3><br>
                            <?php $_from = $this->_tpl_vars['recentRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                            <?php if ($this->_tpl_vars['name'] == 'Home'): ?>
                            <table style="width:100%">
                                <tr>
                                    <td>
                                        <li>
                                            <span></span>
                                            <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                            accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                            href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                            <span><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                            </a>
                                            </td>
                                            <td align="right">
                                                <em><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><img style="float:right;" src="index.php?entryPoint=getImage&imageName=dashlet-header-edit.png" width="14" height="14" class="iconed_dull"></a></em>
                                            </td>
                                            </span>
                                        </li>

                                </tr>
                            </table>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                            <table style="width:100%">
                                <tr>
                                    <td>
                                        <li>
                                            <span>
                                            <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                            accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                            href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                            <span><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                            </a>
                                            </td>
                                            <td align="right">
                                            <em><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><img style="float:right;" src="index.php?entryPoint=getImage&imageName=dashlet-header-edit.png" width="14" height="14" class="iconed_dull"></a></em>
                                            </td>
                                            </span>
                                        </li>
                                    </td>
                                </tr>
                                </table>
                            <?php endif; ?>
                            <?php endforeach; else: ?>
                            <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                            <?php endif; unset($_from); ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <?php if (count ( $this->_tpl_vars['moduleExtraMenu'] ) > 0): ?>
                <li id="moduleTabExtraMenu">
                    <a href="#"><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 &raquo;</a><br />
                    <ul class="cssmenu">
                        <?php $_from = $this->_tpl_vars['moduleExtraMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <li><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
            <?php endif; ?>
    </div>
<?php endif; ?>