<?php /* Smarty version 2.6.9, created on 2011-06-08 10:35:44
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 7, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 69, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 24, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 26, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 64, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_nodes.tpl', 98, false),)), $this); ?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="browser_nodes">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BROWSER_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'browser_nodes')));
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
       <td class="table_header" width="60">&nbsp;
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_property_id" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="">
       <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="">

       </td>
      </tr>
      <?php $_from = $this->_tpl_vars['ARTICLES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button">
        <?php if ($this->_tpl_vars['ENTRY']['lang_active'] == 1):  echo actionIcon(array('action' => 'deactivateArticleLang','icon' => "active.png",'form' => 'browser_nodes','perm' => 'activateArticle','title' => 'deactivate article','nopermicon' => "active.gif",'nopermtitle' => 'article is active','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang'],'yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'activateArticleLang','icon' => "inactive.png",'form' => 'browser_nodes','perm' => 'activateArticle','title' => 'activate article','nopermicon' => "inactive.gif",'nopermtitle' => 'article is inactive','id' => $this->_tpl_vars['ENTRY']['id'],'save_lang' => $this->_tpl_vars['ENTRY']['lang'],'yoffset' => '1'), $this); endif;  echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'form' => 'browser_nodes','perm' => 'editArticle','title' => 'edit article','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'browserRemoveArticleFromTree','icon' => "delete.png",'form' => 'browser_nodes','perm' => 'browserArticles','title' => 'remove article association from node','ask' => "Are you sure to remove this article from this node?",'article_id' => $this->_tpl_vars['ENTRY']['id'],'node_id' => $this->_tpl_vars['ENTRY']['node_id'],'yoffset' => '1'), $this);?>

       </td>
       <td class="row">
       <?php if ($this->_tpl_vars['ENTRY']['image_id'] != ''):  echo image(array('id' => $this->_tpl_vars['ENTRY']['image_id'],'version' => 0), $this); else: ?>&nbsp;<?php endif; ?>
       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "...") : smarty_modifier_default($_tmp, "...")); ?>

       </td>
       <td class="row">
       <b><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>
</b><br />
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['lead'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
       <td class="row">
       <?php echo actionIcon(array('action' => 'moveNodeDown','icon' => "explorer/arrow_down_green.png",'form' => 'browser_nodes','perm' => 'browserArticles','title' => 'move down','article_id' => $this->_tpl_vars['ENTRY']['id'],'position' => $this->_tpl_vars['ENTRY']['position'],'yoffset' => '1'), $this); echo actionIcon(array('action' => 'moveNodeUp','icon' => "explorer/arrow_up_green.png",'form' => 'browser_nodes','perm' => 'browserArticles','title' => 'move up','article_id' => $this->_tpl_vars['ENTRY']['id'],'position' => $this->_tpl_vars['ENTRY']['position'],'yoffset' => '1'), $this);?>

&nbsp;
       </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php echo yoffset(array(), $this);?>

    </form>
