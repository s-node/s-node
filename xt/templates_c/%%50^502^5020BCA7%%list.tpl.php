<?php /* Smarty version 2.6.9, created on 2011-01-21 11:15:26
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 17, false),array('modifier', 'htmlentities', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 46, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 46, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 46, false),array('modifier', 'xt_getUserProperties', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 46, false),array('modifier', 'count', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 94, false),array('function', 'xt_getaddresses', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 22, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 48, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 57, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/list.tpl', 78, false),)), $this); ?>
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
<form method="POST" name="list"  action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => 'true')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="row"><?php echo ((is_array($_tmp='Client')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="row">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_client_filter" onChange="this.form.submit();">
    <option value="0" <?php if ($this->_tpl_vars['xt8100_admin']['client_filter'] < 1): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='all')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <?php $_from = $this->_tpl_vars['xt8100_admin']['all_clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ALL_CLIENTS']):
?>
    <?php echo xt_getaddresses(array('assign' => 'CLIENT','id' => $this->_tpl_vars['ALL_CLIENTS']), $this);?>

    <?php if ($this->_tpl_vars['ALL_CLIENTS'] > 0 && $this->_tpl_vars['CLIENT']['title'] != ""): ?>
    <option value="<?php echo $this->_tpl_vars['ALL_CLIENTS']; ?>
" <?php if ($this->_tpl_vars['xt8100_admin']['client_filter'] == $this->_tpl_vars['ALL_CLIENTS']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['CLIENT']['title']; ?>
</option>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
</table>
<table cellspacing="0" cellpadding="0" width="100%">
<?php ob_start(); ?>
  <tr>
   <td class="table_header" width="65">&nbsp;</td>
   <td class="table_header" width="25" onclick="document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='id';document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['list'].submit();"><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  if ($this->_tpl_vars['xt8100_admin']['order_by'] == 'id'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" onclick="document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='title';document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['list'].submit();"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  if ($this->_tpl_vars['xt8100_admin']['order_by'] == 'title'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" width="85" onclick="document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='client_id';document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['list'].submit();"><?php echo ((is_array($_tmp='Client')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  if ($this->_tpl_vars['xt8100_admin']['order_by'] == 'client_id'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" width="85" onclick="document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='date';document.forms['list'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['list'].submit();"><?php echo ((is_array($_tmp='Time')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  if ($this->_tpl_vars['xt8100_admin']['order_by'] == 'date'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['xt8100_admin']['order_by_dir'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" width="65"><?php echo ((is_array($_tmp='Effort')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
<?php $this->_smarty_vars['capture']['header'] = ob_get_contents(); ob_end_clean();  echo $this->_smarty_vars['capture']['header']; ?>

  <?php $_from = $this->_tpl_vars['xt8100_admin']['data_worker']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TICKET']):
 ob_start();  echo xt_getaddresses(array('assign' => 'CLIENT','id' => $this->_tpl_vars['TICKET']['client_id']), $this);?>

 onmouseover="Tip('<div class=&quot;TipCls1&quot;><b><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</b><br/><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <i><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
</i><br/><br/> <i><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php if ($this->_tpl_vars['CLIENT']['user_id'] > 0): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['CLIENT']['user_id'])) ? $this->_run_mod_handler('xt_getUserProperties', true, $_tmp, 'username') : xt_getUserProperties($_tmp, 'username')); ?>
)<?php endif; ?><br/><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['firstName'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php echo $this->_tpl_vars['CLIENT']['lastName']; ?>
<br/><?php if ($this->_tpl_vars['CLIENT']['email'] != ""): ?><a href=&quot;mailto:<?php echo $this->_tpl_vars['CLIENT']['email']; ?>
&quot;><?php echo $this->_tpl_vars['CLIENT']['email']; ?>
</a><?php endif; ?></i> <br/><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['description'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</div>',BORDERWIDTH, '',BORDERWIDTH, '',BGCOLOR, '',PADDING,'')" onmouseout="UnTip()"
<?php $this->_smarty_vars['capture']['tooltipp'] = ob_get_contents(); ob_end_clean(); ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" ondblclick="window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_id.value='<?php echo $this->_tpl_vars['TICKET']['id']; ?>
';window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='edit';window.parent.frames['slave1'].focus();window.parent.frames['slave1'].document.forms['0'].submit();">
   <td class="button">
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
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['id']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['title']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php if ($this->_tpl_vars['CLIENT']['user_id'] > 0): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['CLIENT']['user_id'])) ? $this->_run_mod_handler('xt_getUserProperties', true, $_tmp, 'username') : xt_getUserProperties($_tmp, 'username')); ?>
)<?php endif; ?></td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
>
	<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['TICKET']['date'],'y' => time(),'assign' => 'TIMEDIFF'), $this);?>

	<?php if ($this->_tpl_vars['TIMEDIFF'] <= 0): ?>
	<img src="images/icons/tickets/due.png" alt="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 21600): ?>
	<img src="images/icons/tickets/6h.png" alt="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 86400): ?>
	<img src="images/icons/tickets/24h.png" alt="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php else: ?>
	<img src="images/icons/tickets/morethan1day.png" alt="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%y") : smarty_modifier_date_format($_tmp, "%d.%m.%y")); ?>

   </td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['work_time']; ?>
 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<?php if (count($this->_tpl_vars['xt8100_admin']['data_supervisor']) > 0): ?>
<div class="toolbar"><b><?php echo ((is_array($_tmp='Supervisor Tickets')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</b></div>
<table cellspacing="0" cellpadding="0" width="100%">
 <?php echo $this->_smarty_vars['capture']['header']; ?>

  <?php $_from = $this->_tpl_vars['xt8100_admin']['data_supervisor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TICKET']):
 ob_start();  echo xt_getaddresses(array('assign' => 'CLIENT','id' => $this->_tpl_vars['TICKET']['client_id']), $this);?>

 onmouseover="Tip('<div class=&quot;TipCls1&quot;><b><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</b><br/><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <i><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
</i><br/><br/> <i><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php if ($this->_tpl_vars['CLIENT']['user_id'] > 0): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['CLIENT']['user_id'])) ? $this->_run_mod_handler('xt_getUserProperties', true, $_tmp, 'username') : xt_getUserProperties($_tmp, 'username')); ?>
)<?php endif; ?><br/><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['firstName'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php echo $this->_tpl_vars['CLIENT']['lastName']; ?>
<br/><?php if ($this->_tpl_vars['CLIENT']['email'] != ""): ?><a href=&quot;mailto:<?php echo $this->_tpl_vars['CLIENT']['email']; ?>
&quot;><?php echo $this->_tpl_vars['CLIENT']['email']; ?>
</a><?php endif; ?></i> <br/><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['description'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</div>',BORDERWIDTH, '',BORDERWIDTH, '',BGCOLOR, '',PADDING,'')" onmouseout="UnTip()"
<?php $this->_smarty_vars['capture']['tooltipp'] = ob_get_contents(); ob_end_clean(); ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" ondblclick="window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_id.value='<?php echo $this->_tpl_vars['TICKET']['id']; ?>
';window.parent.frames['slave1'].document.forms['0'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='edit';window.parent.frames['slave1'].focus();window.parent.frames['slave1'].document.forms['0'].submit();">
   <td class="button">
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
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['id']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['title']; ?>
</td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo ((is_array($_tmp=@$this->_tpl_vars['CLIENT']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
 <?php if ($this->_tpl_vars['CLIENT']['user_id'] > 0): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['CLIENT']['user_id'])) ? $this->_run_mod_handler('xt_getUserProperties', true, $_tmp, 'username') : xt_getUserProperties($_tmp, 'username')); ?>
)<?php endif; ?></td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
>
	<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['TICKET']['date'],'y' => time(),'assign' => 'TIMEDIFF'), $this);?>

	<?php if ($this->_tpl_vars['TIMEDIFF'] <= 0): ?>
	<img src="images/icons/tickets/due.png" alt="<?php echo ((is_array($_tmp='due')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 21600): ?>
	<img src="images/icons/tickets/6h.png" alt="<?php echo ((is_array($_tmp='6h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php elseif ($this->_tpl_vars['TIMEDIFF'] < 86400): ?>
	<img src="images/icons/tickets/24h.png" alt="<?php echo ((is_array($_tmp='24h')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php else: ?>
	<img src="images/icons/tickets/morethan1day.png" alt="<?php echo ((is_array($_tmp='more than one day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['TICKET']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%y") : smarty_modifier_date_format($_tmp, "%d.%m.%y")); ?>

   </td>
   <td class="row" <?php echo $this->_smarty_vars['capture']['tooltipp']; ?>
><?php echo $this->_tpl_vars['TICKET']['work_time']; ?>
 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="<?php echo $this->_tpl_vars['xt8100_admin']['order_by']; ?>
" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="<?php echo $this->_tpl_vars['xt8100_admin']['order_by_dir']; ?>
" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
 <input type="hidden" name="module" value="<?php echo $_REQUEST['module']; ?>
" />
<input type="hidden" name="showtabs" value="1" />