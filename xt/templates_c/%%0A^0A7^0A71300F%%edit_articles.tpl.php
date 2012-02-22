<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:06
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/edit_articles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'inline_navigator', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/edit_articles.tpl', 7, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/edit_articles.tpl', 51, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/edit_articles.tpl', 88, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/edit_articles.tpl', 11, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="editArticle" onSubmit="window.document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<a name="top" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['DATA']['lang_active']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_submit.tpl", 'smarty_include_vars' => array('form' => 'editArticle','action' => 'saveArticle')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- <?php echo inline_navigator(array('data' => $this->_tpl_vars['INLINE_NAVIGATION']), $this);?>
 -->
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"> <?php echo ((is_array($_tmp='Product')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: </span><span class="title"> <?php echo $this->_tpl_vars['DATA']['title']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_ARTICLES_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table cellspacing="0" cellpadding="0" width="100%">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/basics.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['DATA']['id'],'ctitle' => $this->_tpl_vars['DATA']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['DISPLAY']['variables'] == 1):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/variables.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['properties'] == 1):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/properties.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/images.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</table>
<?php if ($this->_tpl_vars['DISPLAY']['shop'] == 1): ?>
 <?php echo $this->_tpl_vars['EA_BASIC_DATAROWS']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['DISPLAY']['sets'] == 1):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/set.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['relations'] == 1):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.catalog/admin/edit_articles/related.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if (sizeof ( $this->_tpl_vars['LANGS'] ) > 1): ?>
<h2><?php echo ((is_array($_tmp='Languages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Copy into')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_copyToLang">
   <?php $_from = $this->_tpl_vars['LANGS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['LANG']):
?>
    <?php if ($this->_tpl_vars['KEY'] != $this->_tpl_vars['ACTIVE_LANG']): ?>
    <option value="<?php echo $this->_tpl_vars['KEY']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
   </select>
   <?php echo actionIcon(array('action' => 'copyToLang','form' => 'editArticle','icon' => "explorer/arrow_right_green.png",'title' => 'Copy to this language'), $this);?>

  </td>
 </tr>
</table>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['EDIT_ARTICLE_DATAROWS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
  <?php if ($this->_tpl_vars['ENTRY']['label'] == 'head'): ?>
   <br />
   <table cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td class="table_header" colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['input'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
    </tr>
  <?php elseif ($this->_tpl_vars['ENTRY']['label'] == 'end'): ?>
   </table>
  <?php else: ?>
    <tr>
      <td class="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['label'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      <td class="right"><?php echo $this->_tpl_vars['ENTRY']['input']; ?>
</td>
    </tr>
  <?php endif;  endforeach; endif; unset($_from); ?>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="<?php echo $this->_tpl_vars['DATA']['id']; ?>
" />
<?php if ($this->_tpl_vars['FOCUS']['segment'] != ''): ?>
<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" onLoad="anchor('<?php echo $this->_tpl_vars['FOCUS']['segment']; ?>
');" width="1"" />
<?php endif;  if ($this->_tpl_vars['FOCUS']['field'] != ''): ?>
<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" onLoad="document.forms['editArticle'].<?php echo $this->_tpl_vars['FOCUS']['field']; ?>
.focus();" width="1" />
<?php endif;  if ($this->_tpl_vars['PICKER'] > 0): ?>
<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" onLoad="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['PICKER']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=editArticle',770,470,'picker');" width="1" />
<?php endif;  echo yoffset(array(), $this);?>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>