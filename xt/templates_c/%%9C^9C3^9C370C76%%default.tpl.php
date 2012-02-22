<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl', 1, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl', 63, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl', 65, false),array('function', 'translate_replace', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl', 22, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/simple/default.tpl', 50, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='Search')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<br />

<!-- Search -->
<form method="post" name="searchengine" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<input class="field" type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_term" value="<?php if ($this->_tpl_vars['USEDTERM'] != ''):  echo $this->_tpl_vars['USEDTERM'];  else:  echo $this->_tpl_vars['SEARCHTERM'];  endif; ?>" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_page" value="1" />
<input type="submit" value="<?php echo ((is_array($_tmp='Start search')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_submit_search" />&nbsp;
<br />

<!-- Similar words -->
<?php $_from = $this->_tpl_vars['SIMILAR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
        $this->_foreach['outer']['iteration']++;
?>
<br />
<?php echo translate_replace(array('string' => "There were no results found for <b>%1</b>.",'t1' => $this->_tpl_vars['ENTRY']['original']), $this);?>
 <?php echo translate_replace(array('string' => "The best possible alternative term <b>%1</b> was used for the following search results.",'t1' => $this->_tpl_vars['ENTRY']['replacement']), $this);?>
<br /><br />
<b><?php echo ((is_array($_tmp='Alternatives')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</b><br /><br />
<?php $_from = $this->_tpl_vars['ENTRY']['alternatives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['inner'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['inner']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ALT']):
        $this->_foreach['inner']['iteration']++;
?>
- <a href="javascript:document.forms['searchengine'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_term.value='<?php echo $this->_tpl_vars['ALT']['word']; ?>
';document.forms['searchengine'].submit();"><?php echo $this->_tpl_vars['ALT']['word']; ?>
</a> <span style="color: #999999;">(<?php echo $this->_tpl_vars['ALT']['distance']; ?>
)</span><br />
<?php endforeach; endif; unset($_from);  endforeach; endif; unset($_from); ?>
<br />

<!-- Search info -->
<?php if ($this->_tpl_vars['TOTAL'] > 0): ?>
  <h2><span style="color: black;"><?php echo $this->_tpl_vars['TOTAL']; ?>
</span> <?php if ($this->_tpl_vars['TOTAL'] == 1):  echo ((is_array($_tmp='result found for word')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  else:  echo ((is_array($_tmp='results found for word')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?> <span style="color: black;"><?php if ($this->_tpl_vars['ENTRY']['replacement'] != ''):  echo $this->_tpl_vars['ENTRY']['replacement'];  else:  echo $this->_tpl_vars['SEARCHTERM'];  endif; ?></span></h2>
<?php else: ?>
  <?php if ($_POST): ?>
   <span style="color: red;"><?php echo ((is_array($_tmp='No results found')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  <?php else: ?>
   <?php echo ((is_array($_tmp='Please input a search query')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
...
  <?php endif;  endif; ?>

<!-- Results -->
<table width="100%" cellspacing="0" cellpadding="0" summary="searchresults">
  <?php $_from = $this->_tpl_vars['RESULTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
     <tr>
      <td colspan="2" style="padding-top: 10px; padding-bottom: 10px;">
       <?php if ($this->_tpl_vars['ENTRY']['image'] > 0): ?>
       <table cellpadding="0" cellspacing="0" align="left" style="margin: 0px 10px 5px 0px;">
        <tr>
         <td><a href="<?php echo $this->_tpl_vars['ENTRY']['url']; ?>
">
          <?php echo image(array('id' => $this->_tpl_vars['ENTRY']['image'],'version' => 1,'title' => $this->_tpl_vars['ENTRY']['description'],'alt' => $this->_tpl_vars['ENTRY']['title'],'class' => 'left_show'), $this);?>

         </a></td>
        </tr>
       </table>
       <?php endif; ?>

       <h3><a href="<?php echo $this->_tpl_vars['ENTRY']['url']; ?>
"><?php if (! $this->_tpl_vars['ENTRY']['public']): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
/icons/lock.png" alt="" /> <?php endif;  echo $this->_tpl_vars['ENTRY']['title']; ?>
</a></h3>
       <span style="color: #666666"><?php echo ((is_array($_tmp='Content type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: </span><?php echo $this->_tpl_vars['CONTENT_TYPES'][$this->_tpl_vars['ENTRY']['content_type']]['title']; ?>
<br />
       <?php if ($this->_tpl_vars['ENTRY']['description'] != ''):  echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 230, "...", true) : smarty_modifier_truncate($_tmp, 230, "...", true)); ?>
<br /><?php endif; ?>
       <span style="color: #0B8310;">
       <?php echo $this->_tpl_vars['ENTRY']['url']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['ENTRY']['mod_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a, %d. %b. %Y - %H:%M:%S") : smarty_modifier_date_format($_tmp, "%a, %d. %b. %Y - %H:%M:%S")); ?>
<br />
       </span>
      </td>
     </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_from = $this->_tpl_vars['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PAGE']):
?>
    <a href="javascript:document.forms['searchengine'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_page.value=<?php echo $this->_tpl_vars['PAGE']; ?>
;document.forms['searchengine'].submit();">[<?php if ($this->_tpl_vars['AKTUALPAGE'] == $this->_tpl_vars['PAGE']): ?><b><?php echo $this->_tpl_vars['PAGE']; ?>
</b><?php else:  echo $this->_tpl_vars['PAGE'];  endif; ?>]</a>
 <?php endforeach; endif; unset($_from); ?>
</form>
<br />
<?php if ($_POST): ?>
<b><?php echo $this->_tpl_vars['ELAPSED_TIME']; ?>
</b> <?php echo ((is_array($_tmp='Seconds')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

<?php endif; ?>