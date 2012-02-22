<?php /* Smarty version 2.6.9, created on 2011-01-21 11:15:07
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 18, false),array('modifier', 'htmlentities', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 28, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 28, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 30, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 39, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/overview.tpl', 50, false),)), $this); ?>
<style>
<?php echo '
.TipCls1 {
	width:300px;
	background-color: #FFF3CF;
	border: 1px solid #DDDDDD;
	padding:5px;
	color:black;
}
'; ?>

</style>
<script type="text/javascript" src="tools/wz_tooltip/wz_tooltip.js"></script>
<form method="post" name="o" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="80">&nbsp;</td>
   <td class="table_header" width="45"><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="45"><?php echo ((is_array($_tmp='Time')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="65"><?php echo ((is_array($_tmp='Effort')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
</table>
<div class="toolbar"><b><?php echo ((is_array($_tmp='5 newest tickets in Pool')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</b></div>
<table cellspacing="0" cellpadding="0" width="100%">
  <?php $_from = $this->_tpl_vars['xt8100_admin']['pool']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TICKET']):
 ob_start(); ?>
 onmouseover="Tip('<div class=&quot;TipCls1&quot;><b><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</b><br/><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <i><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
</i><br/><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['description'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</div>',BORDERWIDTH, '',BORDERWIDTH, '',BGCOLOR, '',PADDING,'')" onmouseout="UnTip()"
<?php $this->_smarty_vars['capture']['tooltipp'] = ob_get_contents(); ob_end_clean(); ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" ondblclick="window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_id.value='<?php echo $this->_tpl_vars['TICKET']['id']; ?>
';window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='edit';window.parent.frames['slave1'].focus();window.parent.frames['slave1'].document.forms['0'].submit();">
   <td class="button" width="80">
   <?php if ($this->_tpl_vars['TICKET']['status'] == 0): ?><img src="images/icons/tickets/open.png" alt="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 1): ?><img src="images/icons/tickets/running.png" alt="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 2): ?><img src="images/icons/tickets/onhold.png" alt="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 4): ?><img src="images/icons/tickets/stopped.png" alt="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 3): ?><img src="images/icons/tickets/rejected.png" alt="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 5): ?><img src="images/icons/tickets/done.png" alt="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <img src="images/icons/tickets/priority_<?php echo $this->_tpl_vars['TICKET']['priority']; ?>
.png" alt="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
" title="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
"/>
   <?php echo actionIcon(array('action' => 'edit','icon' => "view.png",'form' => 0,'target' => 'slave1','id' => $this->_tpl_vars['TICKET']['id'],'title' => "Edit / view ticket"), $this);?>

   </td>
   <td class="row" width="45" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['id']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['title']; ?>
</td>
   <td class="row" width="20" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
>
	<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['TICKET']['date'],'y' => time(),'assign' => 'TIMEDIFF'), $this);?>

	<?php if ($this->_tpl_vars['TIMEDIFF'] <= 0): ?>
	<img src="images/icons/tickets/due.png" alt="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 21600): ?>
	<img src="images/icons/tickets/6h.png" alt="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 86400): ?>
	<img src="images/icons/tickets/24h.png" alt="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php else: ?>
	<img src="images/icons/tickets/morethan1day.png" alt="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php endif; ?>
   </td>
   <td class="row" width="65" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['work_time']; ?>
 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<div class="toolbar"><b><?php echo ((is_array($_tmp='My most pressing 5 Tickets')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</b></div>
<table cellspacing="0" cellpadding="0" width="100%">
  <?php $_from = $this->_tpl_vars['xt8100_admin']['my_tickets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TICKET']):
 ob_start(); ?>
 onmouseover="Tip('<div class=&quot;TipCls1&quot;><b><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</b><br/><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <i><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
</i><br/><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['description'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</div>',BORDERWIDTH, '',BORDERWIDTH, '',BGCOLOR, '',PADDING,'')" onmouseout="UnTip()"
<?php $this->_smarty_vars['capture']['tooltipp'] = ob_get_contents(); ob_end_clean(); ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" ondblclick="window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_id.value='<?php echo $this->_tpl_vars['TICKET']['id']; ?>
';window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='edit';window.parent.frames['slave1'].focus();window.parent.frames['slave1'].document.forms['0'].submit();">
   <td class="button" width="80">
   <?php if ($this->_tpl_vars['TICKET']['status'] == 0): ?><img src="images/icons/tickets/open.png" alt="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 1): ?><img src="images/icons/tickets/running.png" alt="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 2): ?><img src="images/icons/tickets/onhold.png" alt="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 4): ?><img src="images/icons/tickets/stopped.png" alt="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 3): ?><img src="images/icons/tickets/rejected.png" alt="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 5): ?><img src="images/icons/tickets/done.png" alt="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <img src="images/icons/tickets/priority_<?php echo $this->_tpl_vars['TICKET']['priority']; ?>
.png" alt="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
" title="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
"/>
   <?php echo actionIcon(array('action' => 'edit','icon' => "view.png",'form' => 0,'target' => 'slave1','id' => $this->_tpl_vars['TICKET']['id'],'title' => "Edit / view ticket"), $this);?>

   </td>
   <td class="row" width="45" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['id']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['title']; ?>
</td>
   <td class="row" width="20" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
>
	<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['TICKET']['date'],'y' => time(),'assign' => 'TIMEDIFF'), $this);?>

	<?php if ($this->_tpl_vars['TIMEDIFF'] <= 0): ?>
	<img src="images/icons/tickets/due.png" alt="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 21600): ?>
	<img src="images/icons/tickets/6h.png" alt="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 86400): ?>
	<img src="images/icons/tickets/24h.png" alt="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php else: ?>
	<img src="images/icons/tickets/morethan1day.png" alt="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php endif; ?>
   </td>
   <td class="row" width="65" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['work_time']; ?>
 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<div class="toolbar"><b><?php echo ((is_array($_tmp='My done 5 Tickets')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</b></div>
<table cellspacing="0" cellpadding="0" width="100%">
  <?php $_from = $this->_tpl_vars['xt8100_admin']['my_old_tickets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TICKET']):
 ob_start(); ?>
 onmouseover="Tip('<div class=&quot;TipCls1&quot;><b><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</b><br/><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <i><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
</i><br/><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['description'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</div>',BORDERWIDTH, '',BORDERWIDTH, '',BGCOLOR, '',PADDING,'')" onmouseout="UnTip()"
<?php $this->_smarty_vars['capture']['tooltipp'] = ob_get_contents(); ob_end_clean(); ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" ondblclick="window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_id.value='<?php echo $this->_tpl_vars['TICKET']['id']; ?>
';window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='edit';window.parent.frames['slave1'].focus();window.parent.frames['slave1'].document.forms['0'].submit();">
   <td class="button" width="80">
   <?php if ($this->_tpl_vars['TICKET']['status'] == 0): ?><img src="images/icons/tickets/open.png" alt="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_0')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 1): ?><img src="images/icons/tickets/running.png" alt="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 2): ?><img src="images/icons/tickets/onhold.png" alt="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 4): ?><img src="images/icons/tickets/stopped.png" alt="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 3): ?><img src="images/icons/tickets/rejected.png" alt="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <?php if ($this->_tpl_vars['TICKET']['status'] == 5): ?><img src="images/icons/tickets/done.png" alt="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='status_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php endif; ?>
   <img src="images/icons/tickets/priority_<?php echo $this->_tpl_vars['TICKET']['priority']; ?>
.png" alt="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
" title="<?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['TICKET']['priority']; ?>
"/>
   <?php echo actionIcon(array('action' => 'edit','icon' => "view.png",'form' => 0,'target' => 'slave1','id' => $this->_tpl_vars['TICKET']['id'],'title' => "Edit / view ticket"), $this);?>

    <?php if ($this->_tpl_vars['TICKET']['status'] == 4 && $this->_tpl_vars['TICKET']['supervisor'] == $this->_tpl_vars['xt8100_admin']['my_userid']): ?>
    <?php echo actionIcon(array('action' => 'deleteTicket','icon' => "delete.png",'form' => 1,'target' => 'master','id' => $this->_tpl_vars['TICKET']['id'],'ask' => "Are you sure to delete this ticket?"), $this);?>

   <?php endif; ?>
   </td>
   <td class="row" width="45" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['id']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['title']; ?>
</td>
   <td class="row" width="20" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
>
	<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['TICKET']['date'],'y' => time(),'assign' => 'TIMEDIFF'), $this);?>

	<?php if ($this->_tpl_vars['TIMEDIFF'] <= 0): ?>
	<img src="images/icons/tickets/due.png" alt="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 21600): ?>
	<img src="images/icons/tickets/6h.png" alt="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 86400): ?>
	<img src="images/icons/tickets/24h.png" alt="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php else: ?>
	<img src="images/icons/tickets/morethan1day.png" alt="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php endif; ?>
   </td>
   <td class="row" width="65" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['work_time']; ?>
 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="module" value="<?php echo $_REQUEST['module']; ?>
" />
<input type="hidden" name="showtabs" value="1" />
</form>