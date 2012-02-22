<?php /* Smarty version 2.6.9, created on 2011-01-21 10:21:01
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/editPool.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/editPool.tpl', 6, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="edit_node">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_NODE_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Edit pool')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
<tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" id="title" value="<?php echo $this->_tpl_vars['NODE']['title']; ?>
" size="42" onfocus="this.select()"></td>
  </tr>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>

<?php echo '
<script type="text/javascript">
addEvent(window, \'load\', function() {
 document.getElementById(\'title\').focus()
});

function addEvent(obj, evType, fn){
 if (obj.addEventListener){
    obj.addEventListener(evType, fn, true);
    return true;
 } else if (obj.attachEvent){
    var r = obj.attachEvent("on"+evType, fn);
    return r;
 } else {
    return false;
 }
}
</script>
'; ?>