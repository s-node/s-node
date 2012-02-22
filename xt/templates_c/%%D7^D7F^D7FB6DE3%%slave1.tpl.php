<?php /* Smarty version 2.6.9, created on 2011-01-21 10:21:33
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 11, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 38, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 40, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 30, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 31, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/slave1.tpl', 68, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
'; ?>

<form method="POST" name="slave1">
<div id="content">
<h1><?php echo ((is_array($_tmp='Catalog')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_property_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<p id="subtitle"><?php echo ((is_array($_tmp='last_changes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>

<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header" width="40"><b>ID</b></td>
  <td class="table_header" width="60"><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='productname')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="50"><?php echo ((is_array($_tmp='date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['CHANGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="row"><?php echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'form' => 'slave1','perm' => 'editArticle','title' => 'edit article','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo $this->_tpl_vars['ENTRY']['id']; ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "<br />") : smarty_modifier_default($_tmp, "<br />")); ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "<br />") : smarty_modifier_default($_tmp, "<br />")); ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>

<p id="subtitle"><?php echo ((is_array($_tmp='newest_entries')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header" width="40"><b>ID</b></td>
  <td class="table_header" width="60"><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='productname')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="50"><?php echo ((is_array($_tmp='date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['NEWEST']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="row"><?php echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'form' => 'slave1','perm' => 'editArticle','title' => 'edit article','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo $this->_tpl_vars['ENTRY']['id']; ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['art_nr'])) ? $this->_run_mod_handler('default', true, $_tmp, "<br />") : smarty_modifier_default($_tmp, "<br />")); ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "<br />") : smarty_modifier_default($_tmp, "<br />")); ?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo yoffset(array(), $this);?>

</div>
</form>

<script language="javascript"><!--
yoffset = window.parent.frames['master'].pageYOffset;
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=yoffset
setTimeout("window.parent.frames['master'].document.forms[1].submit()",200);

//-->
</script>
