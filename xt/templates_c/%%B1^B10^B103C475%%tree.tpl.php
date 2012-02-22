<?php /* Smarty version 2.6.9, created on 2011-01-24 09:51:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 5, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 28, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 69, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 28, false),array('modifier', 'replace', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 52, false),array('modifier', 'escape', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 52, false),array('modifier', 'alttag', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/_picker/tree.tpl', 53, false),)), $this); ?>
<form method="POST" name="o">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'o')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <?php if ($this->_tpl_vars['NODE']['l'] != 1): ?><td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0 || $this->_tpl_vars['ARTICLES'][$this->_tpl_vars['NODE']['id']] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       <a href="javascript:window.document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php endif;  endif; ?></a><br />
      </td>
      <td class="row"><a href="javascript:window.document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?>&nbsp;</a></td>
      <td class="button" align="right">
&nbsp;
      </td>
     </tr>
    </table>
   </td>
  </tr>
  <?php if ($this->_tpl_vars['NODE']['itw']): ?>
  <?php $_from = $this->_tpl_vars['ARTICLES'][$this->_tpl_vars['NODE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ARTICLE']):
?>
  <tr>
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-12; ?>
px; width: 1px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="9" /></td>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px"><?php if ($this->_tpl_vars['ARTICLE']['published'] == 1): ?><img class="icon" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document_green.png" alt="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php else:  echo actionIcon(array('action' => "",'icon' => "document_red.png",'form' => 'o','perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'article is not published'), $this); endif; ?></td>
      <td class="row">
      <a href="
<?php if ($this->_tpl_vars['ARTICLE']['subs'] == 0): ?>
javascript:window.parent.frames['slave1'].location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=133&x<?php echo $this->_tpl_vars['BASEID']; ?>
_id=<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
&amp;tmp_lang=<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
';
document.forms['o'].submit();
<?php else: ?>
javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;
document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
;
document.forms['o'].submit();
<?php endif; ?>">

      <?php if ($this->_tpl_vars['ARTICLE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['ARTICLE']['selected']): ?><b><?php echo $this->_tpl_vars['ARTICLE']['title']; ?>
</b><?php if ($this->_tpl_vars['ARTICLE']['subs'] > 0): ?>&nbsp;
      (<?php echo $this->_tpl_vars['ARTICLE']['subs']; ?>
)<?php endif; ?>
      <?php else:  echo $this->_tpl_vars['ARTICLE']['title'];  if ($this->_tpl_vars['ARTICLE']['subs'] > 0): ?>&nbsp;(<?php echo $this->_tpl_vars['ARTICLE']['subs']; ?>
)<?php endif;  endif; ?></span>
      <?php else:  echo $this->_tpl_vars['ARTICLE']['title'];  if ($this->_tpl_vars['ARTICLE']['subs'] > 0): ?>&nbsp;(<?php echo $this->_tpl_vars['ARTICLE']['subs']; ?>
)<?php endif;  endif;  if (! $this->_tpl_vars['ARTICLE']['lang_na']): ?></a><?php endif; ?>

      <span style="color: #666666;">(<?php echo $this->_tpl_vars['ARTICLE']['rid']; ?>
)</span></td>
      <td class="button" width="80" align="right"><a href="javascript:window.parent.opener.document.forms['<?php echo $this->_tpl_vars['FORM']; ?>
'].<?php echo $this->_tpl_vars['FIELD']; ?>
.value=<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
;window.parent.opener.document.forms['<?php echo $this->_tpl_vars['FORM']; ?>
'].<?php echo $this->_tpl_vars['TITLEFIELD']; ?>
.value='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ARTICLE']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&#39;", "'") : smarty_modifier_replace($_tmp, "&#39;", "'")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
      window.parent.close();"><img src="images/icons/check.png" <?php echo ((is_array($_tmp='select this article')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
></a></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source_node_id" value="" />
<?php echo yoffset(array(), $this);?>

</form>