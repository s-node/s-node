<?php /* Smarty version 2.6.9, created on 2011-06-07 15:54:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.rezepte/_zutaten/xml.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8" <?php echo '?>'; ?>

<?php if (count ( $this->_tpl_vars['DATA'] ) > 0): ?>
<results>
<?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
<rs id="<?php echo $this->_tpl_vars['rs']['id']; ?>
" unitid="<?php echo $this->_tpl_vars['rs']['unitid']; ?>
" info="<?php if ($this->_tpl_vars['rs']['kcal'] > 0):  echo $this->_tpl_vars['rs']['kcal']; ?>
kcal<?php endif;  if ($this->_tpl_vars['rs']['usda_id']): ?>usda id: <?php echo $this->_tpl_vars['rs']['usda_id'];  endif; ?>"><?php echo $this->_tpl_vars['rs']['name']; ?>
</rs>
<?php endforeach; endif; unset($_from); ?>
</results>
<?php else: ?>
<results/>
<?php endif; ?>