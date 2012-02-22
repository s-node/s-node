<?php /* Smarty version 2.6.9, created on 2011-06-08 09:10:59
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/viewer/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/viewer/default.tpl', 1, false),array('function', 'XT_load_js', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/viewer/default.tpl', 3, false),array('function', 'counter', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/viewer/default.tpl', 17, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/viewer/default.tpl', 10, false),)), $this); ?>
<?php echo XT_load_css(array('file' => "formmanager.css"), $this);?>

<?php echo XT_load_css(array('file' => "jquery-ui-theme.css"), $this);?>

<?php echo XT_load_js(array('file' => "jquery-ui/ui.datepicker.js"), $this);?>

<?php echo XT_load_js(array('file' => "ch.iframe.snode.formmanager/viewer.js"), $this);?>


<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
    <div id="form_container">
        <?php if ($this->_tpl_vars['FORM']['hide_label'] != 1): ?><h1><?php echo $this->_tpl_vars['FORM']['title']; ?>
</h1><?php endif; ?>
        <?php if ($this->_tpl_vars['FORM']['description'] != ''): ?><br /><?php echo $this->_tpl_vars['FORM']['description']; ?>
<br /><br /><?php endif; ?>
        <?php if (count ( $this->_tpl_vars['ERRORS'] ) > 0):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/errorhandler.tpl", 'smarty_include_vars' => array('Message' => ((is_array($_tmp='Die fehlenden Felder sind rot markiert')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'Title' => ((is_array($_tmp='Fehlende Eingaben')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'Options' => ",width:400")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

                <?php $_from = $this->_tpl_vars['ELEMENTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['formelements'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['formelements']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ELEMENT']):
        $this->_foreach['formelements']['iteration']++;
?>

                        <?php if ($this->_tpl_vars['ELEMENT']['element_type'] == 6 && $this->_tpl_vars['ELEMENT']['size'] > 1): ?>
                <?php echo smarty_function_counter(array('start' => $this->_tpl_vars['ELEMENT']['size'],'direction' => 'down','print' => false,'assign' => 'counterI'), $this);?>

                <?php $this->assign('GROUPWIDTH', $this->_tpl_vars['ELEMENT']['size']); ?>
                <?php $this->assign('ISCOUNTING', '1'); ?>
            <?php elseif ($this->_tpl_vars['ISCOUNTING'] == 1): ?>
                <?php echo smarty_function_counter(array(), $this);?>

            <?php else: ?>
                                <?php $this->assign('ISCOUNTING', '0'); ?>
                <?php $this->assign('counterI', '0'); ?>
            <?php endif; ?>
    
            <?php if ($this->_tpl_vars['ELEMENT']['element_type'] == 8): ?>
                <div class="form_separator">
                    <?php if (! $this->_tpl_vars['ELEMENT']['hide_label']):  echo $this->_tpl_vars['ELEMENT']['label'];  endif; ?>
                </div>
                <?php if ($this->_tpl_vars['ELEMENT']['description'] != ""): ?>
                    <?php echo $this->_tpl_vars['ELEMENT']['description']; ?>
<br />
                    <br />
                <?php endif; ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['ELEMENT']['element_type'] != 12): ?>
                    <?php if ($this->_tpl_vars['ELEMENT']['element_type'] == 0): ?>
                        <br />
                        <label for="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>">
                            <?php echo $this->_tpl_vars['ELEMENT']['label']; ?>

                        </label>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/form_elements.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['ELEMENT']['hide_label'] != 1): ?>
                            <div class="<?php if ($this->_tpl_vars['counterI'] >= 0 && $this->_tpl_vars['counterI'] != $this->_tpl_vars['GROUPWIDTH']): ?>formsublabel<?php else: ?>formlabel<?php endif; ?>">
                                <?php if ($this->_tpl_vars['ELEMENT']['element_type'] == 3 || $this->_tpl_vars['ELEMENT']['element_type'] == 5 || $this->_tpl_vars['ELEMENT']['element_type'] == 6 || $this->_tpl_vars['ELEMENT']['element_type'] == 9 || $this->_tpl_vars['ELEMENT']['element_type'] == 10): ?>
                                    <?php echo $this->_tpl_vars['ELEMENT']['label']; ?>

                                <?php else: ?>
                                    <label for ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>">
                                        <?php echo $this->_tpl_vars['ELEMENT']['label']; ?>

                                    </label>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['ELEMENT']['required'] || $this->_tpl_vars['ELEMENT']['element_type'] == 14): ?>
                                    <span class="required">*</span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                                                <?php if ($this->_tpl_vars['ELEMENT']['element_type'] != 6): ?>
                            <div class="formelement"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/form_elements.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                        <?php endif; ?>
                                                <?php if ($this->_tpl_vars['counterI'] <= 0 || ($this->_foreach['formelements']['iteration'] == $this->_foreach['formelements']['total'])): ?>
                            <br class="clear" />
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/form_elements.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" value="<?php echo $this->_tpl_vars['FORM']['id']; ?>
" />
        <input type="submit" value="<?php echo ((is_array($_tmp='Submit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
    </div>
</form>