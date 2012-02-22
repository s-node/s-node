<?php /* Smarty version 2.6.9, created on 2011-01-24 14:39:39
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/list/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/list/default.tpl', 10, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/list/default.tpl', 14, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NEWS']):
?>
<div class="newslistitem">
  <?php if ($this->_tpl_vars['LINK2DETAILS'] == 'yes'): ?>
  <h2 class="newslisttitle"><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TARGET_TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_id=<?php echo $this->_tpl_vars['NEWS']['id']; ?>
"><?php echo $this->_tpl_vars['NEWS']['title']; ?>
</a></h2>
  <?php else: ?>
  <h2 class="newslisttitle"><?php echo $this->_tpl_vars['NEWS']['title']; ?>
</h2>
  <?php endif; ?>
    <h3 class="newslistsubtitle">
    <?php if ($this->_tpl_vars['NEWS']['subtitle'] != ""):  echo $this->_tpl_vars['NEWS']['subtitle']; ?>
 -<?php endif; ?>
    <?php echo ((is_array($_tmp=$this->_tpl_vars['NEWS']['creation_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I")); ?>

  </h3>
  <?php if ($this->_tpl_vars['NEWS']['introduction'] != ""): ?>
    <div class="newslist">
              <?php echo image(array('id' => $this->_tpl_vars['NEWS']['image'],'version' => 2,'title' => $this->_tpl_vars['NEWS']['img_description'],'alt' => $this->_tpl_vars['NEWS']['img_alt'],'class' => 'newslist'), $this);?>

         <?php echo $this->_tpl_vars['NEWS']['introduction']; ?>

         <br clear="all" />
    </div>
  <?php endif; ?>
</div>
<?php endforeach; endif; unset($_from); ?>