<?php /* Smarty version 2.6.9, created on 2011-01-21 10:56:23
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/registrations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/registrations.tpl', 9, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/registrations.tpl', 21, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/registrations.tpl', 22, false),)), $this); ?>
<?php echo '
<script type="text/javascript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[0].submit();
}
//-->
</script>
'; ?>

<h2><span class="light"><?php echo ((is_array($_tmp='Registrations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo $this->_tpl_vars['EVENT']['title']; ?>
</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['REGISTRATION_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" name="ro" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="table_header" width="40">&nbsp;</td>
      <td class="table_header" width="150"><?php echo ((is_array($_tmp='Firstname')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      <td class="table_header" width="150"><?php echo ((is_array($_tmp='Lastname')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      <td class="table_header"><?php echo ((is_array($_tmp='City')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
     </tr>
    <?php $_from = $this->_tpl_vars['REGISTRATIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['REGISTRATION']):
?>
     <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
      <td class="button" width="40" align="right"><?php echo actionIcon(array('action' => 'editRegistration','icon' => "pencil.png",'form' => 'ro','target' => 'slave1','id' => $this->_tpl_vars['REGISTRATION']['id'],'perm' => 'edit','title' => 'Edit this registration'), $this); echo actionIcon(array('action' => 'deleteRegistration','icon' => "delete.png",'form' => 'ro','id' => $this->_tpl_vars['REGISTRATION']['id'],'perm' => 'edit','title' => 'Delete this event entry','ask' => "Are you sure you want to delete this registration?"), $this);?>
</td>
       <td class="row"><?php echo $this->_tpl_vars['REGISTRATION']['firstName']; ?>
</td>
       <td class="row"><?php echo $this->_tpl_vars['REGISTRATION']['lastName']; ?>
</td>
       <td class="row"><?php echo $this->_tpl_vars['REGISTRATION']['city']; ?>
</td>
     </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.events/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>