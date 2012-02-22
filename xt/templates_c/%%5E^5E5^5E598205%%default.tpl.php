<?php /* Smarty version 2.6.9, created on 2012-01-28 11:38:59
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/lostpassword/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/lostpassword/default.tpl', 1, false),array('modifier', 'livetranslate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/lostpassword/default.tpl', 6, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/lostpassword/default.tpl', 18, false),)), $this); ?>
<?php echo XT_load_css(array('file' => "formmanager.css"), $this);?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
    <div id="form_container">
        <div class="form_separator">
            <?php echo ((is_array($_tmp='password forgotten')) ? $this->_run_mod_handler('livetranslate', true, $_tmp) : livetranslate($_tmp)); ?>

        </div>
        <div class="formsublabel">
            <?php echo ((is_array($_tmp="Your e-mail address")) ? $this->_run_mod_handler('livetranslate', true, $_tmp) : livetranslate($_tmp)); ?>
:
        </div>
        <div class="formelement">
            <input class="field" type="text" size="30" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_email" />
        </div>
        <div class="formsublabel clear">
            &nbsp;
        </div>
        <div class="formelement">
            <input type="submit" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_submit" value="<?php echo ((is_array($_tmp='Receive new password')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
        </div>
    </div>
</form>