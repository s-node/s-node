<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:39
         compiled from includes/admin/h_pane_2_gmap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'iframe_paper', 'includes/admin/h_pane_2_gmap.tpl', 11, false),array('function', 'plugin', 'includes/admin/h_pane_2_gmap.tpl', 23, false),)), $this); ?>

<?php if ($_GET['adminmode'] == 1): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%;">
      <tr>
       <td style="background-color: #FFFFFF; border: 1px solid #002E95;" valign="top" width="<?php if ($this->_tpl_vars['lwidth'] > 1):  echo $this->_tpl_vars['lwidth'];  else: ?>45<?php endif; ?>%">
        <iframe style="overflow: none; width: 100%; height: 100%;" name="master" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['m_template']; ?>
&amp;tabs=1" frameborder="0"></iframe>
       </td>
       <td width="3"><img src="/images/spacer.gif" alt="" width="3" /></td>
       <td>
        <?php echo iframe_paper(array('url' => "?TPL=%TPL%&amp;tabs=0&amp;module=%MODULE%&amp;gmapheader=true",'name' => 'slave1','template' => $this->_tpl_vars['s1_template'],'s1_tab' => $this->_tpl_vars['s1_tab']), $this);?>

       </td>
      </tr>
     </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  if ($_REQUEST['x7000_gmapheader'] == 'true'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin_empty_gmap.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
        <?php if ($_GET['tabs'] == 1): ?>
        <?php echo load_plugin(array('package' => $this->_tpl_vars['package'],'module' => $this->_tpl_vars['module'],'tabs' => 1), $this);?>

        <?php else: ?>
        <?php echo load_plugin(array('package' => $this->_tpl_vars['package'],'module' => $this->_tpl_vars['module'],'tabs' => 0), $this);?>

        <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>