<?php /* Smarty version 2.6.9, created on 2011-01-21 11:14:43
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl', 6, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl', 59, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl', 151, false),array('modifier', 'browsericon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl', 243, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.statistics/admin/overview.tpl', 52, false),)), $this); ?>
<form method="POST" name="overview">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Statistics')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr><td class="stats_link">
 &raquo; <a href="#years"><?php echo ((is_array($_tmp='Summary')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#monthly_history"><?php echo ((is_array($_tmp='Monthly history')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#days_in_month"><?php echo ((is_array($_tmp='Days in month')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#hosts">Top 20 <?php echo ((is_array($_tmp='Hosts')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#pages">Top 20 <?php echo ((is_array($_tmp='Pages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#referers">Top 20 <?php echo ((is_array($_tmp='Referers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 &raquo; <a href="#browsers">Top 20 <?php echo ((is_array($_tmp='Browsers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
 </td></tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Summary')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="years">&nbsp;</a></span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php $_from = $this->_tpl_vars['YEARS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['YEAR']):
?>
 <tr>
  <td class="view_right"><?php echo $this->_tpl_vars['YEAR']['year']; ?>
 - <?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <span class="stats_big" style="color: #979823;"><?php echo $this->_tpl_vars['YEAR']['views']; ?>
</span> -
  <?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <span class="stats_big" style="color: #1BC006;"><?php echo $this->_tpl_vars['YEAR']['visitors']; ?>
</span> - <?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:
  <span class="stats_big" style="color: #E0927D;"><?php echo $this->_tpl_vars['YEAR']['unique_visitors']; ?>
</span></td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title"><?php echo ((is_array($_tmp='Monthly history')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="monthly_history">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" style="margin: 15px;">
  <tr>
  <?php $_from = $this->_tpl_vars['MONTHS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MONTH']):
?>
  <td valign="bottom" style="padding-right: 2px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/yellow.gif" alt="" height="<?php echo smarty_function_math(array('equation' => '100/max*views+2','max' => $this->_tpl_vars['MONTH_TOTAL']['max'],'views' => $this->_tpl_vars['MONTH']['views']), $this);?>
" width="6" /></td>
  <td valign="bottom" style="padding-right: 2px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/green.gif" alt="" height="<?php echo smarty_function_math(array('equation' => '100/max*visitors+2','max' => $this->_tpl_vars['MONTH_TOTAL']['max'],'visitors' => $this->_tpl_vars['MONTH']['visitors']), $this);?>
" width="6" /></td>
  <td valign="bottom" style="padding-right: 10px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/red.gif" alt="" height="<?php echo smarty_function_math(array('equation' => '100/max*unique_visitors+2','max' => $this->_tpl_vars['MONTH_TOTAL']['max'],'unique_visitors' => $this->_tpl_vars['MONTH']['unique_visitors']), $this);?>
" width="6" /></td>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
  <tr>
  <?php $_from = $this->_tpl_vars['MONTHS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MONTH']):
?>
  <td colspan="3" class="stats_small" <?php if ($this->_tpl_vars['DATE']['mon'] == $this->_tpl_vars['MONTH']['month']): ?>style="font-weight: bold;"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['MONTH_LABELS'][$this->_tpl_vars['MONTH']['month']])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 4, '.', true) : smarty_modifier_truncate($_tmp, 4, '.', true)); ?>
</td>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" width="80"><?php echo ((is_array($_tmp='Month')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['MONTHS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MONTH']):
?>
 <tr <?php if ($this->_tpl_vars['DATE']['mon'] == $this->_tpl_vars['MONTH']['month']): ?>style="font-weight: bold;"<?php endif; ?>>
  <td class="stats_light"><?php echo ((is_array($_tmp=$this->_tpl_vars['MONTH_LABELS'][$this->_tpl_vars['MONTH']['month']])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php echo $this->_tpl_vars['MONTH']['year']; ?>
</td>
  <td class="stats_yellow"><?php echo $this->_tpl_vars['MONTH']['views']; ?>
</td>
  <td class="stats_green"><?php echo $this->_tpl_vars['MONTH']['visitors']; ?>
</td>
  <td class="stats_red"><?php echo $this->_tpl_vars['MONTH']['unique_visitors']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['MONTH_TOTAL']['views']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['MONTH_TOTAL']['visitors']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['MONTH_TOTAL']['unique_visitors']; ?>
</td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title"><?php echo ((is_array($_tmp='Days in month')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="days_in_month">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" style="margin: 15px;">
  <tr>
  <?php $_from = $this->_tpl_vars['DAYS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['DAY']):
?>
  <td valign="bottom" style="padding-right: 1px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/yellow.gif" alt="<?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['DAY']['views']; ?>
 <?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" height="<?php echo smarty_function_math(array('equation' => '100/max*views+2','max' => $this->_tpl_vars['DAY_TOTAL']['max'],'views' => $this->_tpl_vars['DAY']['views']), $this);?>
" width="4" /></td>
  <td valign="bottom" style="padding-right: 1px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/green.gif" alt="<?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['DAY']['visitors']; ?>
" title="<?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['DAY']['visitors']; ?>
" height="<?php echo smarty_function_math(array('equation' => '100/max*visitors+2','max' => $this->_tpl_vars['DAY_TOTAL']['max'],'visitors' => $this->_tpl_vars['DAY']['visitors']), $this);?>
" width="4" /></td>
  <td valign="bottom" style="padding-right: 5px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/stats/red.gif" alt="<?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['DAY']['unique_visitors']; ?>
" title="<?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['DAY']['unique_visitors']; ?>
" height="<?php echo smarty_function_math(array('equation' => '100/max*unique_visitors+2','max' => $this->_tpl_vars['DAY_TOTAL']['max'],'unique_visitors' => $this->_tpl_vars['DAY']['unique_visitors']), $this);?>
" width="4" /></td>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
  <tr>
  <?php $_from = $this->_tpl_vars['DAYS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['DAY']):
?>
  <td colspan="3" class="stats_small" <?php if ($this->_tpl_vars['DATE']['mday'] == $this->_tpl_vars['DAY']['day']): ?>style="font-weight: bold;"<?php endif; ?>><?php echo $this->_tpl_vars['DAY']['day']; ?>
<br /><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['MONTH_LABELS'][$this->_tpl_vars['DAY']['month']])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 4, '.', true) : smarty_modifier_truncate($_tmp, 4, '.', true)); ?>
</td>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" width="80"><?php echo ((is_array($_tmp='Day')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['DAYS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['DAY']):
?>
 <tr <?php if ($this->_tpl_vars['DATE']['mday'] == $this->_tpl_vars['DAY']['day']): ?>style="font-weight: bold;"<?php endif; ?>>
  <td class="stats_light"><?php echo $this->_tpl_vars['DAY']['day']; ?>
.<?php echo $this->_tpl_vars['DAY']['month']; ?>
.<?php echo $this->_tpl_vars['DAY']['year']; ?>
</td>
  <td class="stats_yellow"><?php echo $this->_tpl_vars['DAY']['views']; ?>
</td>
  <td class="stats_green"><?php echo $this->_tpl_vars['DAY']['visitors']; ?>
</td>
  <td class="stats_red"><?php echo $this->_tpl_vars['DAY']['unique_visitors']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['DAY_TOTAL']['views']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['DAY_TOTAL']['visitors']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['DAY_TOTAL']['unique_visitors']; ?>
</td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title">Top 20 <?php echo ((is_array($_tmp='Hosts')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="hosts">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" width="260"><?php echo ((is_array($_tmp='Host')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Last access')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['HOSTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HOST']):
?>
 <tr <?php if ($this->_tpl_vars['DATE']['mday'] == $this->_tpl_vars['DAY']['day']): ?>style="font-weight: bold;"<?php endif; ?>>
  <td class="stats_light"><?php echo $this->_tpl_vars['HOST']['host']; ?>
</td>
  <td class="stats_yellow"><?php echo $this->_tpl_vars['HOST']['views']; ?>
</td>
  <td class="stats_light"><?php echo ((is_array($_tmp=$this->_tpl_vars['HOST']['last_access'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total" colspan="2"><?php echo $this->_tpl_vars['HOST_TOTAL']['views']; ?>
</td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title">Top 20 <?php echo ((is_array($_tmp='Pages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="pages">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" width="260"><?php echo ((is_array($_tmp='Page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PAGE']):
?>
 <tr <?php if ($this->_tpl_vars['DATE']['mday'] == $this->_tpl_vars['DAY']['day']): ?>style="font-weight: bold;"<?php endif; ?>>
  <td class="stats_light"><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['PAGE']['tpl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['PAGE']['title']; ?>
</a> (<?php echo $this->_tpl_vars['PAGE']['tpl']; ?>
)</td>
  <td class="stats_yellow"><?php echo $this->_tpl_vars['PAGE']['views']; ?>
</td>
  <td class="stats_green"><?php echo $this->_tpl_vars['PAGE']['visitors']; ?>
</td>
  <td class="stats_red"><?php echo $this->_tpl_vars['PAGE']['unique_visitors']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['PAGE_TOTAL']['views']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['PAGE_TOTAL']['visitors']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['PAGE_TOTAL']['unique_visitors']; ?>
</td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title">Top 20 <?php echo ((is_array($_tmp='Referers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="referers">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>

 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" width="260"><?php echo ((is_array($_tmp='Referer')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header" width="150"><?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Unique Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['REFERERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['REFERER']):
?>
 <tr>
  <td class="stats_light"><a href="<?php echo $this->_tpl_vars['REFERER']['referer']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['REFERER']['referer'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 47, "...", true) : smarty_modifier_truncate($_tmp, 47, "...", true)); ?>
</a></td>
  <td class="stats_yellow"><?php echo $this->_tpl_vars['REFERER']['views']; ?>
</td>
  <td class="stats_green"><?php echo $this->_tpl_vars['REFERER']['visitors']; ?>
</td>
  <td class="stats_red"><?php echo $this->_tpl_vars['REFERER']['unique_visitors']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['REFERER_TOTAL']['views']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['REFERER_TOTAL']['visitors']; ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['REFERER_TOTAL']['unique_visitors']; ?>
</td>
 </tr>
 </table>

 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="4">
   <span class="title">Top 20 <?php echo ((is_array($_tmp='Browsers')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="browsers">&nbsp;</a></span><a href="#top">top</a>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_stats_header" style="padding-right: 0px;" width="20">&nbsp;</td>
  <td class="table_stats_header" style="padding-left: 0px;" width="200"><?php echo ((is_array($_tmp='Browser')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_stats_header"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['AGENTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['AGENT']):
?>
 <tr>
  <td class="stats_light" style="padding-right: 0px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['AGENT']['agent'])) ? $this->_run_mod_handler('browsericon', true, $_tmp) : browsericon($_tmp)); ?>
</td>
  <td class="stats_light" style="padding-left: 0px;<?php if ($this->_tpl_vars['AGENT']['agent'] == 'Firefox' || $this->_tpl_vars['AGENT']['agent'] == 'Internet Explorer' || $this->_tpl_vars['AGENT']['agent'] == 'Mozilla'): ?>font-weight: bold;<?php endif; ?>"><?php echo $this->_tpl_vars['AGENT']['agent']; ?>
</td>
  <td class="stats_yellow"><?php echo smarty_function_math(array('equation' => "100/total_views*views",'total_views' => $this->_tpl_vars['AGENT_TOTAL']['views'],'views' => $this->_tpl_vars['AGENT']['views'],'format' => "%.2f"), $this);?>
% (<?php echo $this->_tpl_vars['AGENT']['views']; ?>
)</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="stats_total" colspan="2"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="stats_total"><?php echo $this->_tpl_vars['AGENT_TOTAL']['views']; ?>
</td>
 </tr>
 </table>
</form>