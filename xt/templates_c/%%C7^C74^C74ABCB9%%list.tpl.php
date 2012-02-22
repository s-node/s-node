<?php /* Smarty version 2.6.9, created on 2011-01-27 17:56:49
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl', 13, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl', 48, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl', 46, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/list.tpl', 48, false),)), $this); ?>
<form method="POST" name="article">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="80">&nbsp;</td>
   <td class="table_header" width="40"><?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'article','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>
</td>
   <td class="table_header"><?php echo actionIcon(array('action' => 'NULL','form' => 'article','label' => 'Title','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>
</td>
   <td class="table_header" width="44"><?php echo actionIcon(array('action' => 'NULL','form' => 'article','label' => 'Rev','sort' => $this->_tpl_vars['sort']['2']['value'],'icon' => $this->_tpl_vars['sort']['2']['icon']), $this);?>
</td>
   <td class="table_header" width="40"><?php echo actionIcon(array('action' => 'NULL','form' => 'article','label' => 'Pub','sort' => $this->_tpl_vars['sort']['3']['value'],'icon' => $this->_tpl_vars['sort']['3']['icon']), $this);?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ARTICLETABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ARTICLETABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ARTICLE']):
        $this->_foreach['ARTICLETABLE']['iteration']++;
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" <?php if ($this->_tpl_vars['ARTICLE']['locked_user'] == $this->_tpl_vars['USER_ID']): ?>style="background-image: url(<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/naventry_active.gif);"<?php endif; ?>>
   <td class="button"><?php if ($this->_tpl_vars['ARTICLE']['locked'] != 1 || $this->_tpl_vars['ARTICLE']['locked_user'] == $this->_tpl_vars['USER_ID']):  if ($this->_tpl_vars['ARTICLE']['active']):  echo actionIcon(array('action' => 'deactivate','icon' => "active.png",'form' => 'article','perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Deactivate this article entry'), $this); else:  echo actionIcon(array('action' => 'activate','icon' => "inactive.png",'form' => 'article','perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Activate this article entry'), $this); endif;  echo actionIcon(array('action' => 'view','icon' => "view.png",'form' => 'article','perm' => 'view','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Preview this article entry'), $this); echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'form' => '0','target' => 'slave1','id' => $this->_tpl_vars['ARTICLE']['id'],'perm' => 'edit','title' => 'Edit this article entry'), $this); echo actionIcon(array('action' => 'deleteArticle','icon' => "delete.png",'form' => 'article','id' => $this->_tpl_vars['ARTICLE']['id'],'perm' => 'delete','title' => 'Delete this article entry','ask' => "Are you sure you want to delete this article entry?"), $this); else:  echo ((is_array($_tmp='In edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?></td>
   <td class="row"><?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
</td>
   <td class="row"><?php echo actionLink(array('action' => 'editArticle','form' => '0','target' => 'slave1','perm' => 'view','id' => $this->_tpl_vars['ARTICLE']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this);?>
&nbsp;</td>
   <td class="row"><?php echo $this->_tpl_vars['ARTICLE']['rid']; ?>
&nbsp;</td>
   <td class="button"><?php if ($this->_tpl_vars['ARTICLE']['published'] == 1): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document_green.png" alt="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php else:  echo actionIcon(array('action' => 'publish','icon' => "document_red.png",'form' => 'article','perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Publish this article'), $this); endif; ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="" />
 <input type="hidden" name="module" value="l">
</form>