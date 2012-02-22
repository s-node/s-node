<?php /* Smarty version 2.6.9, created on 2011-01-24 09:51:35
         compiled from _pages/130.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin', '_pages/130.tpl', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo load_plugin(array('package' => "ch.iframe.snode.articles",'module' => 'setvalues'), $this);?>

    <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%;">
      <tr>
       <td style="background-color: #DDDDDD; border: 1px solid #002E95;" valign="top" width="280">
        <iframe name="master" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=134" frameborder="0" style="height: 465px;  width: 100%;"></iframe>
       </td>
       <td width="3">
       .<br />.<br />.
       </td>
       <td style="background-color: #FFFFFF; border: 1px solid #002E95;" valign="top">
 <iframe name="slave1" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=133" frameborder="0" style="height: 465px;  width: 100%;"></iframe>
       </td>
      </tr>
     </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>