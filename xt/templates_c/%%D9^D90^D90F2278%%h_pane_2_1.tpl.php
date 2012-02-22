<?php /* Smarty version 2.6.9, created on 2011-01-21 10:13:40
         compiled from includes/admin/h_pane_2_1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'iframe_paper', 'includes/admin/h_pane_2_1.tpl', 25, false),array('function', 'plugin', 'includes/admin/h_pane_2_1.tpl', 33, false),)), $this); ?>
<?php if ($_GET['adminmode'] == 1): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%;">
      <tr>
       <td valign="top" width="<?php if ($this->_tpl_vars['lwidth'] > 1):  echo $this->_tpl_vars['lwidth'];  else: ?>50<?php endif; ?>%">
        <table cellspacing="0" cellpadding="0" width="100%" style="height: 50%;">
         <tr>
          <td valign="top" style="background-color: #FFFFFF; border: 1px solid #002E95;">
          <iframe name="master" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['m_template']; ?>
&amp;tabs=1" frameborder="0" style="height: 100%; width: 100%;"></iframe></td>
         </tr>
         <tr>
          <td><img src="/images/spacer.gif" alt="" height="2" /></td>
         </tr>
        </table>
        <table cellspacing="0" cellpadding="0" width="100%" style="height: 50%;">
         <tr>
          <td valign="top" style="background-color: #FFFFFF; border: 1px solid #002E95;">
           <iframe name="slave2" src="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['s2_template']; ?>
&amp;tabs=0&amp;module=<?php echo $this->_tpl_vars['s2_tab']; ?>
" frameborder="0" style="height: 100%; width: 100%;"></iframe>
          </td>
         </tr>
        </table>
       </td>
       <td width="3"><img src="/images/spacer.gif" alt="" width="3" /></td>
       <td>
        <?php echo iframe_paper(array('url' => "?TPL=%TPL%&amp;tabs=0&amp;module=%MODULE%",'name' => 'slave1','template' => $this->_tpl_vars['s1_template'],'s1_tab' => $this->_tpl_vars['s1_tab']), $this);?>

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