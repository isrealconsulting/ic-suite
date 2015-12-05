<?php /* Smarty version 2.6.11, created on 2015-12-04 09:49:14
         compiled from themes/Suite7/tpls/_head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Suite7/tpls/_head.tpl', 52, false),array('function', 'sugar_getjspath', 'themes/Suite7/tpls/_head.tpl', 62, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
    <link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['FAVICON_URL']; ?>
">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <title><?php echo $this->_tpl_vars['APP']['LBL_BROWSER_TITLE']; ?>
</title>
    <?php echo $this->_tpl_vars['SUGAR_JS']; ?>

    <?php echo '
    <script type="text/javascript">
        <!--
        SUGAR.themes.theme_name      = \'';  echo $this->_tpl_vars['THEME'];  echo '\';
        SUGAR.themes.theme_ie6compat = \'';  echo $this->_tpl_vars['THEME_IE6COMPAT'];  echo '\';
        SUGAR.themes.hide_image      = \'';  echo smarty_function_sugar_getimagepath(array('file' => "hide.gif"), $this); echo '\';
        SUGAR.themes.show_image      = \'';  echo smarty_function_sugar_getimagepath(array('file' => "show.gif"), $this); echo '\';
        SUGAR.themes.loading_image   = \'';  echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this); echo '\';
        SUGAR.themes.allThemes       = eval(';  echo $this->_tpl_vars['allThemes'];  echo ');
        if ( YAHOO.env.ua )
            UA = YAHOO.env.ua;
        -->
    </script>
    '; ?>

    <?php echo $this->_tpl_vars['SUGAR_CSS']; ?>

    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "cache/include/javascript/sugar_field_grp.js"), $this);?>
'></script>
</head>