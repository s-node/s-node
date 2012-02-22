<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:07
         compiled from ch.iframe.snode.catalog/admin/edit_articles/related.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 4, false),array('modifier', 'default', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 39, false),array('function', 'inline_navigator_top', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 4, false),array('function', 'cycle', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 21, false),array('function', 'actionIcon', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 23, false),array('function', 'image', 'ch.iframe.snode.catalog/admin/edit_articles/related.tpl', 32, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title"> <?php echo ((is_array($_tmp='Related articles')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php echo inline_navigator_top(array('anchor' => 'related_articles'), $this);?>

   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_related_article_id" value="">
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['RELATED_ARTICLES_BUTTONS'],'withouthidden' => '1','nobr' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
   <td class="table_header" width="80"><?php echo ((is_array($_tmp='options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="70"><?php echo ((is_array($_tmp='image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="60"><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header"><?php echo ((is_array($_tmp='title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['RELATED_ARTICLES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td class="button">
   <?php echo actionIcon(array('action' => 'removeRelatedArticleFromArticle','ask' => "Are you sure to remove this article?",'icon' => "delete.png",'form' => 'editArticle','title' => 'remove Article','yoffset' => '1','related_article_id' => $this->_tpl_vars['ENTRY']['article_id']), $this);?>

   </td>
   <td class="row"><?php if ($this->_tpl_vars['ENTRY']['image_id'] != ''):  echo image(array('id' => $this->_tpl_vars['ENTRY']['image_id'],'version' => 0), $this); else: ?>&nbsp;<?php endif; ?></td>
   <td class="row">
   <?php echo $this->_tpl_vars['ENTRY']['art_nr']; ?>

   </td>
   <td class="row">
   <b><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>
</b><br />
   <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['lead'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

   </td>
  </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>