<?php /* Smarty version 2.6.11, created on 2015-12-04 09:49:14
         compiled from themes/Suite7/tpls/header.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Suite7/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body onMouseOut="closeMenus();">
<a name="top"></a>
<?php echo $this->_tpl_vars['DCSCRIPT']; ?>

<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="header">
    <div id="ajaxHeader">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Suite7/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Suite7/tpls/_globalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Suite7/tpls/_welcome.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="clear"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Suite7/tpls/_headerSearch.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="clear"></div>
    <?php if (! $this->_tpl_vars['AUTHENTICATED']): ?>
        <br /><br />
    <?php endif; ?>

    <div class="clear"></div>

</div>

<?php endif; ?>

<?php echo '
    <iframe id=\'ajaxUI-history-iframe\' src=\'index.php?entryPoint=getImage&imageName=blank.png\'  title=\'empty\' style=\'display:none\'></iframe>
<input id=\'ajaxUI-history-field\' type=\'hidden\'>
<script type=\'text/javascript\'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded)
    {
        YAHOO.util.History.register(\'ajaxUILoc\', "", SUGAR.ajaxUI.go);
        ';  if ($_REQUEST['module'] != 'ModuleBuilder'): ?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php endif;  echo '
    }
</script>
'; ?>


<div id="main">
    <div id="content" <?php if (! $this->_tpl_vars['AUTHENTICATED']): ?>class="noLeftColumn" <?php endif; ?>>
        <table style=""" id="contentTable"><tr><td>