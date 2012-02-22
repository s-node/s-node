<?php /* Smarty version 2.6.9, created on 2011-01-21 11:10:19
         compiled from includes/admin/single_pane.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin', 'includes/admin/single_pane.tpl', 13, false),)), $this); ?>
<?php if ($_GET['adminmode'] == 1):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%; border: 1px solid #002E95;">
  <tr>
   <td style="background-color: #FFFFFF;" valign="top">
    <iframe name="master" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['template']; ?>
" frameborder="0" style="height: 100%; width: 100%;"></iframe>
   </td>
  </tr>
 </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php echo load_plugin(array('package' => $this->_tpl_vars['package'],'module' => $this->_tpl_vars['module'],'tabs' => $this->_tpl_vars['tabs']), $this);?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>