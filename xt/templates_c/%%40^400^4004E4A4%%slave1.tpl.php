<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:39
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/slave1.tpl', 5, false),)), $this); ?>
<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.gmap/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="content">
        <img src="/images/icons/gmaplogo.gif" alt="" />
        <p class="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
    </div>
</form>
<?php echo '
    <script type="text/javascript">
        //<![CDATA[
            if(window.parent.frames[\'master\'].document.forms[0]){
                window.parent.frames[\'master\'].document.forms[0].submit();
            }
        //]]>
    </script>
'; ?>