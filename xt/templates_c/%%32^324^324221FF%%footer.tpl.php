<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from ch.iframe.snode.toolbox/viewer/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.toolbox/viewer/footer.tpl', 3, false),)), $this); ?>
<!-- footer toolbox-->
<div style="padding:5px;">
<a href="#" onclick="window.open('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['SOURCEEDIT_TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['SOURCEEDIT_BASEID']; ?>
_tpl_id=<?php echo $this->_tpl_vars['TPL']; ?>
','','scrollbars=1,width=900,height=600,top=200,left=200');"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/wrench.png" alt="<?php echo ((is_array($_tmp='Edit Source')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /> <?php echo ((is_array($_tmp='Edit Source')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br/>
<a href="#" onclick="livetranslatehandler();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/text.png" alt="<?php echo ((is_array($_tmp='Livetranslate')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" id="lt"/> <?php echo ((is_array($_tmp='Turn on/off live translation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br/>
<a href="<?php echo $_SERVER['REQUEST_URI']; ?>
&amp;outline_plugins=true"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/text_find.png" alt="<?php echo ((is_array($_tmp='Outline plugins')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/> <?php echo ((is_array($_tmp='Outline plugins')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>
<script type="text/javascript">getlivetranslatestate();</script>
</div>
</div>
<!-- /footer toolbox-->