<?php /* Smarty version 2.6.9, created on 2011-01-21 11:15:16
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 3, false),array('function', 'XT_load_js', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 4, false),array('function', 'xt_getaddresses', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 49, false),array('function', 'actionPopUp', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 52, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 94, false),array('function', 'html_select_time', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 101, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 40, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 99, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/addTicket.tpl', 126, false),)), $this); ?>
<?php if ($this->_tpl_vars['xt8100_admin']['my_userid'] == $this->_tpl_vars['xt8100_admin']['data']['supervisor']):  echo XT_load_css(array('file' => "autocomplete.css"), $this);?>

<?php echo XT_load_js(array('file' => "jquery.autocomplete.js"), $this);?>

<script type="text/javascript">
<?php echo '
 $(document).ready(function(){
	var data = "Core Selectors Attributes Traversing Manipulation CSS Events Effects Ajax Utilities".split(" ");
$("#ac").autocomplete(\'ajax.php?package=ch.iframe.snode.addressmanager&module=AX_getaddressbytitle\',
{
selectFirst: false,
formatItem: formatItem,
formatResult: formatResult

});
$("#ac").result(function(event, data, formatted) {
		if (data){
			//$(this).parent().next().find("input").val(data[1]);
			$("#x';  echo $this->_tpl_vars['BASEID'];  echo '_client_id").attr(\'value\',data[0]);
			$("#x';  echo $this->_tpl_vars['BASEID'];  echo '_client_id_title").attr(\'value\',data[1]);
		}
	});
});

function formatItem(row) {
		return row[1] + " (<strong>id: " + row[0] + "</strong>)";
	}
	function formatResult(row) {
		return row[1];
	}

'; ?>

</script>
<?php endif; ?>
<form method="post" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Client infromations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Client')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
 <?php echo xt_getaddresses(array('assign' => 'CLIENT','id' => $this->_tpl_vars['xt8100_admin']['data']['client_id']), $this);?>

  <input type="text" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_client_id_title"  value="<?php echo $this->_tpl_vars['CLIENT']['title']; ?>
" readonly="readonly"/><input type="hidden" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_client_id" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_client_id" value="<?php echo $this->_tpl_vars['xt8100_admin']['data']['client_id']; ?>
"/>

  <?php echo actionPopUp(array('icon' => "breakpoint_add.png",'title' => ((is_array($_tmp='Pick an address')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => 281,'BASEID' => 7400,'form' => '0','name' => 'picker','fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'client_id'), $this);?>
<input id="ac" value="<?php echo ((is_array($_tmp="Search...")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" onclick="this.value='';">
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="E-Mail report")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mail_report">
  	<option value="0" style="background-color:red;"><?php echo ((is_array($_tmp='Off')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="1" style="background-color:green;"><?php echo ((is_array($_tmp='On')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Client check')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_client_check">
  	<option value="0" style="background-color:red;"><?php echo ((is_array($_tmp='No review by the customers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="1" style="background-color:green;"><?php echo ((is_array($_tmp='Review by the customers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select>
  </td>
 </tr>
 <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Ticket infromations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo $this->_tpl_vars['xt8100_admin']['title']; ?>
" size="42"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" rows="6" cols="65"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='To do until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_date_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_date_str" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'date_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_date" value="<?php echo $this->_tpl_vars['ARTICLE']['date']; ?>
" /> <?php echo smarty_function_html_select_time(array('use_24_hours' => true,'minute_interval' => 15), $this);?>

  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Priority')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_priority">
  <?php $_from = $this->_tpl_vars['xt8100_admin']['priorities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PID'] => $this->_tpl_vars['P']):
?>
  	<option value="<?php echo $this->_tpl_vars['PID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['P'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Estimated effort')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mail_report_tmp" onchange="document.getElementById('work_time').value=this.options[this.selectedIndex].value">
  	<option value="5">5 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="15">15 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="30">30 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="45">45 <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="60">1 <?php echo ((is_array($_tmp='Hour')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="120">2 <?php echo ((is_array($_tmp='Hours')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="240">4 <?php echo ((is_array($_tmp='Hours')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="480">8 <?php echo ((is_array($_tmp='Hours')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select> &nbsp;<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_work_time" id="work_time" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['xt8100_admin']['work_time'])) ? $this->_run_mod_handler('default', true, $_tmp, '5') : smarty_modifier_default($_tmp, '5')); ?>
" size="5"> <?php echo ((is_array($_tmp='Minutes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
 </tr>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Workflow')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Supervisor')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_supervisor">
  <?php $_from = $this->_tpl_vars['xt8100_admin']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['USER']):
?>
  	<option value="<?php echo $this->_tpl_vars['USER']['id']; ?>
" <?php if ($this->_tpl_vars['USER']['id'] == $this->_tpl_vars['xt8100_admin']['supervisor']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['USER']['username']; ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Supervisor check')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_supervisor_check">
  	<option value="0" style="background-color:red;"><?php echo ((is_array($_tmp='No review by the supervisor')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="1" style="background-color:green;"><?php echo ((is_array($_tmp='Review by the supervisor')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select>
  </td>
 </tr>
   <tr>
  <td class="left"><?php echo ((is_array($_tmp='Worker')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_worker">
  <option value="0"><?php echo ((is_array($_tmp='No assignment')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  <?php $_from = $this->_tpl_vars['xt8100_admin']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['USER']):
?>
  	<option value="<?php echo $this->_tpl_vars['USER']['id']; ?>
" <?php if ($this->_tpl_vars['USER']['id'] == $this->_tpl_vars['xt8100_admin']['worker']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['USER']['username']; ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  </td>
 </tr>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp="Is the ticket billable?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_billable">
  	<option value="1" selected="selected" style="background-color:green;"><?php echo ((is_array($_tmp='Billable')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  	<option value="0" style="background-color:red;"><?php echo ((is_array($_tmp='Not billable')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select>
  </td>
 </tr>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Files')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Add a file')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <input type="file" size="36" name="file">
  </td>
 </tr>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" />
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="JavaScript">
window.parent.frames['master'].document.forms[1].submit();
</script>