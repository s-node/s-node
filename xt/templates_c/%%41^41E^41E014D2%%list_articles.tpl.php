<?php /* Smarty version 2.6.9, created on 2011-01-21 10:21:33
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl', 12, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl', 86, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl', 13, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl', 19, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/list_articles.tpl', 99, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="article">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['LIST_ARTICLES_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_page" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />

<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td class="table_header" width="70"><?php echo ((is_array($_tmp='options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header" width="45"><?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'article','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>
</td>
       <td class="table_header" width="60"><?php echo actionIcon(array('action' => 'NULL','label' => 'art_nr','form' => 'article','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>
</td>
       <td class="table_header"><?php echo actionIcon(array('action' => 'NULL','form' => 'article','label' => 'Title','sort' => $this->_tpl_vars['sort']['2']['value'],'icon' => $this->_tpl_vars['sort']['2']['icon']), $this);?>
</td>
       <td class="table_header" width="60">&nbsp;</td>
      </tr>
      <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" <?php if ($this->_tpl_vars['ENTRY']['id'] == $this->_tpl_vars['ACTUAL_ID']): ?> style="background-color:#FFCCCC;"<?php endif; ?>>
       <td class="button">
        <?php if ($this->_tpl_vars['ENTRY']['lang_active'] == 1): ?>
        <?php echo actionIcon(array('action' => 'deactivateArticleLang','icon' => "active.png",'form' => 'article','perm' => 'activateArticle','title' => 'deactivate article','nopermicon' => "active.gif",'nopermtitle' => 'article is active','yoffset' => '1','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang']), $this); else:  echo actionIcon(array('action' => 'activateArticleLang','icon' => "inactive.png",'form' => 'article','perm' => 'activateArticle','title' => 'activate article','nopermicon' => "inactive.gif",'nopermtitle' => 'article is inactive','yoffset' => '1','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang']), $this); endif;  if ($this->_tpl_vars['ENTRY']['product_of_month'] == 1):  echo actionIcon(array('action' => 'product_of_month_unset','icon' => "star_yellow.png",'form' => 'article','perm' => 'activateArticle','title' => 'unset product of month','yoffset' => '1','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang']), $this); else:  echo actionIcon(array('action' => 'product_of_month_set','icon' => "star_grey.png",'form' => 'article','perm' => 'activateArticle','title' => 'set product of month','yoffset' => '1','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang']), $this); endif;  echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'target' => 'slave1','form' => '0','perm' => 'editArticle','title' => 'edit article','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'duplicateArticle','icon' => "copy.png",'form' => 'article','perm' => 'addArticle','title' => 'duplicate article','yoffset' => '1','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'deleteArticle','icon' => "delete.png",'ask' => "Are you sure to delete this article?",'form' => 'article','yoffset' => '1','perm' => 'deleteArticle','title' => 'Delete article','id' => $this->_tpl_vars['ENTRY']['id']), $this);?>

       </td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['id']; ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "...") : smarty_modifier_default($_tmp, "...")); ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
       <td class="button"><?php echo $this->_tpl_vars['EXT_OPTIONS'][$this->_tpl_vars['ENTRY']['id']]; ?>
<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'article','withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_contributed_action" value="" />
<?php echo yoffset(array(), $this);?>

</form>