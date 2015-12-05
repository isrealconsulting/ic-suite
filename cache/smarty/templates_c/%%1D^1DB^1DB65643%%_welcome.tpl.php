<?php /* Smarty version 2.6.11, created on 2015-12-04 09:52:19
         compiled from themes/Suite7/tpls/_welcome.tpl */ ?>
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
            <div id="search">
            <div class="wrapper">
                <form name='UnifiedSearch' action='index.php' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                    <input type="hidden" name="action" value="UnifiedSearch">
                    <input type="hidden" name="module" value="Home">
                    <input type="hidden" name="search_form" value="false">
                    <input type="hidden" name="advanced" value="false">
                    <input type="text" name="query_string" id="query_string" value=""/>
                    <button  type="submit" class="button" ></button>
                </form>
            </div>
        </div>


<?php endif; ?>
