<?php /* Smarty version 2.6.9, created on 2011-01-26 14:20:17
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/default.tpl', 1, false),array('modifier', 'livetranslate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/default.tpl', 5, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/default.tpl', 15, false),)), $this); ?>
<?php echo XT_load_css(array('file' => "formmanager.css"), $this);?>


<?php if ($this->_tpl_vars['ERROR_MSG'] != ""): ?>
    <span style="color:red;">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR_MSG'])) ? $this->_run_mod_handler('livetranslate', true, $_tmp) : livetranslate($_tmp)); ?>

    </span>
<?php endif; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
    <div id="form_container">
        <div class="form_separator">
            <?php echo ((is_array($_tmp='Login')) ? $this->_run_mod_handler('livetranslate', true, $_tmp) : livetranslate($_tmp)); ?>

        </div>
        <div class="formlabel clear">
            <label class="label" for="<?php echo $this->_tpl_vars['FIELD_USERNAME']; ?>
"><?php echo ((is_array($_tmp='Username')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</label>
        </div>
        <div class="formelement">
            <input class="field" type="text" id="<?php echo $this->_tpl_vars['FIELD_USERNAME']; ?>
" name="<?php echo $this->_tpl_vars['FIELD_USERNAME']; ?>
" size="19" />
        </div>
        <div class="formlabel clear">
            <label class="label" for="<?php echo $this->_tpl_vars['FIELD_PASSWORD']; ?>
"><?php echo ((is_array($_tmp='Password')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</label>
        </div>
        <div class="formelement">
            <input class="field" type="password" id="<?php echo $this->_tpl_vars['FIELD_PASSWORD']; ?>
" name="<?php echo $this->_tpl_vars['FIELD_PASSWORD']; ?>
" size="19" />
        </div>
        <div class="formlabel clear">
            &nbsp;
        </div>
        <div class="formelement">
            <input class="field" type="submit" name="submit" value="<?php echo ((is_array($_tmp='Login')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
        </div>
        <div class="formlabel clear">
            &nbsp;
        </div>
        <div class="formelement">
            &raquo; <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['LOST_TPL']; ?>
"><?php echo ((is_array($_tmp='password forgotten')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
?</a>
        </div>
    </div>
</form>
<br class="clear" />