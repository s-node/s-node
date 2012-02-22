<?php /* Smarty version 2.6.9, created on 2011-06-08 09:12:25
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl', 4, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl', 40, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl', 16, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl', 18, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/articles_selector/select_articles.tpl', 120, false),)), $this); ?>
<form method="POST" name="article" onSubmit="window.document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td colspan="4"><h2><?php echo ((is_array($_tmp='Last 5 Entries')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</h2></td>
      </tr>
       <tr>
        <td colspan="4"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
      <tr>
       <td class="table_header" width="30">&nbsp;</td>
       <td class="table_header" width="40">ID</td>
       <td class="table_header" width="80"><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header"><?php echo ((is_array($_tmp='title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      </tr>
      <?php $_from = $this->_tpl_vars['DATA_LAST']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['LASTENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button">
       <?php if ($this->_tpl_vars['LASTENTRY']['article_id'] == $this->_tpl_vars['LASTENTRY']['id']):  echo actionIcon(array('action' => 'removeArticleFromTree','icon' => "check.png",'perm' => 'articleSelector','form' => 'article','title' => 'remove article from tree','article_id' => $this->_tpl_vars['LASTENTRY']['id'],'node_id' => $this->_tpl_vars['LASTENTRY']['node_id'],'yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'addArticleToTree','icon' => "folder_add.png",'perm' => 'articleSelector','form' => 'article','title' => 'add article to tree','id' => $this->_tpl_vars['LASTENTRY']['id'],'node_id' => $this->_tpl_vars['LASTENTRY']['node_id'],'yoffset' => '1'), $this); endif; ?>
       </td>
       <td class="row">
       <?php echo $this->_tpl_vars['LASTENTRY']['id']; ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['LASTENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['LASTENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
</table>
<h2><?php echo ((is_array($_tmp='Search')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="search_box">
   <?php echo ((is_array($_tmp='Search for')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <input type="text" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_search" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_search" value="<?php echo $this->_tpl_vars['SEARCH_TERM']; ?>
" />&nbsp;
   <?php echo ((is_array($_tmp='in')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_search_field">
    <option value="d.title" <?php if ($this->_tpl_vars['SEARCH_BY'] == "d.title"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="d.lead" <?php if ($this->_tpl_vars['SEARCH_BY'] == "d.lead"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='lead')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="d.description" <?php if ($this->_tpl_vars['SEARCH_BY'] == "d.description"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="a.id" <?php if ($this->_tpl_vars['SEARCH_BY'] == "a.id"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="a.art_nr" <?php if ($this->_tpl_vars['SEARCH_BY'] == "a.art_nr"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Article nr.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   </select>
   <input type="submit" value="<?php echo ((is_array($_tmp='Search')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" onload="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_search').focus();" />
  </td>
 </tr>
</table>
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id" value="">
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="">
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="">
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="">
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="">
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="">
<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td colspan="4"><h2><?php echo ((is_array($_tmp='List')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2></td>
      </tr>
      <tr>
        <td colspan="4"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
      <tr>
       <td class="table_header" width="30">&nbsp;</td>
       <td class="table_header" width="40" onclick="document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='a.id';document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'a.id'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['article'].submit();">ID <?php if ($this->_tpl_vars['ORDER_BY'] == 'a.id'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
       <td class="table_header" width="80" onclick="document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='a.art_nr';document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'a.art_nr'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['article'].submit();"><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['ORDER_BY'] == 'a.art_nr'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
       <td class="table_header" onclick="document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='d.title';document.forms['article'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'd.title'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['article'].submit();"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['ORDER_BY'] == 'd.title'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
      </tr>
      <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button">
       <?php if ($this->_tpl_vars['ENTRY']['article_id'] == $this->_tpl_vars['ENTRY']['id']):  echo actionIcon(array('action' => 'removeArticleFromTree','icon' => "check.png",'perm' => 'articleSelector','form' => 'article','title' => 'remove article from tree','article_id' => $this->_tpl_vars['ENTRY']['id'],'node_id' => "{".($this->_tpl_vars['ENTRY']).".node_id",'yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'addArticleToTree','icon' => "folder_add.png",'perm' => 'articleSelector','form' => 'article','title' => 'add article to tree','id' => $this->_tpl_vars['ENTRY']['id'],'node_id' => "{".($this->_tpl_vars['ENTRY']).".node_id",'yoffset' => '1'), $this); endif; ?>
       </td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['id']; ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'article')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php echo yoffset(array(), $this);?>

</form>

<script language="javascript" type="text/javascript">
<!--
window.focus();
// -->
</script>