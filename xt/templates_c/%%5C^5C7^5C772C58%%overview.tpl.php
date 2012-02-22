<?php /* Smarty version 2.6.9, created on 2011-01-21 11:10:19
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl', 6, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl', 78, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl', 22, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl', 23, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/overview.tpl', 86, false),)), $this); ?>
<form method="POST" name="overview" onSubmit="window.document.forms['overview'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Installed Packages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
<tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="200"><?php echo ((is_array($_tmp='Build')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="200"><?php echo ((is_array($_tmp='Sample data')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="20"><?php echo ((is_array($_tmp='done')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="40"><?php echo ((is_array($_tmp='date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['INSTALLED']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PACKAGE']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="row"><?php echo actionIcon(array('action' => 'buildPackage','title' => $this->_tpl_vars['PACKAGE']['name'],'form' => 'overview','icon' => "lock.png",'encode' => 1,'yoffset' => '1','package' => $this->_tpl_vars['PACKAGE']['name']), $this);?>

       
       <a href="/index.php?TPL=1005&x6_package=<?php echo $this->_tpl_vars['PACKAGE']['name']; ?>
&x6_package_version=closed&xdate=<?php echo $this->_tpl_vars['TIME']; ?>
">
       <img src="/images/icons/download.png" alt="" /></a>
       <!-- actionIcon
           action = "downloadPackage"
           title = $PACKAGE.name
           form= "overview"
           icon= "download.png"
           package = $PACKAGE.name
           yoffset="1"
           package_version = "closed"
       --><?php echo actionIcon(array('action' => 'buildPackage','title' => $this->_tpl_vars['PACKAGE']['name'],'form' => 'overview','icon' => "lock_open.png",'yoffset' => '1','package' => $this->_tpl_vars['PACKAGE']['name']), $this);?>

       <a href="/index.php?TPL=1005&x6_package=<?php echo $this->_tpl_vars['PACKAGE']['name']; ?>
&x6_package_version=open&xdate=<?php echo $this->_tpl_vars['TIME']; ?>
">
       <img src="/images/icons/factory.png" alt="factory version -- iframe internal use only" /></a>
       <!--
       actionIcon
           action = "downloadPackage"
           title = $PACKAGE.name
           form= "overview"
           icon= "download.png"
           package = $PACKAGE.name
           yoffset="1"
           package_version = "open"
       -->
       </td>
       <td class="row"><?php if ($this->_tpl_vars['PACKAGE']['sample_data_available']):  echo actionIcon(array('action' => 'buildSamplePackage','title' => $this->_tpl_vars['PACKAGE']['name'],'form' => 'overview','icon' => "lock_open.png",'yoffset' => '1','package' => $this->_tpl_vars['PACKAGE']['name']), $this); echo actionIcon(array('action' => 'downloadPackage','title' => $this->_tpl_vars['PACKAGE']['name'],'form' => 'overview','icon' => "download.png",'package' => $this->_tpl_vars['PACKAGE']['name'],'yoffset' => '1','package_version' => 'sampledata'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
       <td class="row"><?php echo $this->_tpl_vars['PACKAGE']['name']; ?>
</td>
       <td class="row"><?php if ($this->_tpl_vars['PACKAGE']['package'] != 'not_done'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" alt="" /><?php else: ?>...<?php endif; ?></td>
       <td class="row"><?php if ($this->_tpl_vars['PACKAGE']['package'] != 'not_done'):  echo ((is_array($_tmp=$this->_tpl_vars['PACKAGE']['package']['8'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%y %H:%I:%S"));  else: ?>...<?php endif; ?></td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <br />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_package" value="">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_package_version" value="">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_encode" value="">
 <?php echo yoffset(array(), $this);?>

</form>