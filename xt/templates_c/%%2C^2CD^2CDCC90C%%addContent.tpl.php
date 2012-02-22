<?php /* Smarty version 2.6.9, created on 2011-01-24 09:43:16
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/addContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/addContent.tpl', 16, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
'; ?>

<script language="JavaScript"><!--
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.parent.frames['master'].pageYOffset;
window.parent.frames['master'].document.forms[1].submit();
//-->
</script>
<form method="post" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo ((is_array($_tmp='Contents wizard')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='Please choose a standard module')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p><br />

<div style="padding: 10px; background-color: #6F86A5; margin-bottom: 10px;">
<?php $_from = $this->_tpl_vars['MODULES'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MOD']):
?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td width="16" style="padding-right: 5px; padding-bottom: 3px;">
  <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module_id" value="<?php echo $this->_tpl_vars['MOD']['package']; ?>
-|-<?php echo $this->_tpl_vars['MOD']['module']; ?>
">
  </td>
  <td >
  <span style="color: black;"><?php echo $this->_tpl_vars['MOD']['title']; ?>
</span></td>
  </td>
 </tr>
</table>
<?php endforeach; endif; unset($_from); ?>
</div>

<div id="control" style="padding-left: 0px; margin-bottom: 10px; margin-top: 20px;">
<input type="submit" value="<?php echo ((is_array($_tmp='Weiter')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
</div>

<p id="introduction"><?php echo ((is_array($_tmp='Or choose an advanced module')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p><br />

<?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['N'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['N']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
        $this->_foreach['N']['iteration']++;
?>
 <?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>
 <?php if (! ($this->_foreach['N']['iteration'] <= 1)): ?></table><?php endif; ?>
 <table cellspacing="0" cellpadding="0" width="100%" style="background-color: #6F86A5;">
 <?php endif; ?>
 <tr>
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr <?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>onclick="switchNode(<?php echo $this->_tpl_vars['ENTRY']['id']; ?>
);" onmouseover="this.style.backgroundColor='#91A8BD'" onmouseout="this.style.backgroundColor='#6F86A5'" style="cursor: hand; cursor: pointer;"<?php endif; ?>>
      <td class="button" style="<?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>border-bottom: 1px solid #49678F;<?php else: ?>border: 0px;<?php endif; ?> padding-left: <?php echo $this->_tpl_vars['ENTRY']['level']*28-50; ?>
px; width: 1px;">
        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/cubes_blue.png" width="16" height="16" alt="<?php echo $this->_tpl_vars['ENTRY']['title']; ?>
" />
      </td>
      <td class="row" <?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>style="color: #FFFFFF; border-bottom: 1px solid #49678F; padding-left: 0px;"<?php else: ?>style="color: #FFFFFF; border: 0px; padding-left: 0px;"<?php endif; ?>><?php echo $this->_tpl_vars['ENTRY']['title']; ?>
</td>
     </tr>
    </table>
    <div id="mods_<?php echo $this->_tpl_vars['ENTRY']['id']; ?>
" style="<?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>display: none;<?php endif; ?>">
    <?php $_from = $this->_tpl_vars['MODULES'][$this->_tpl_vars['ENTRY']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MOD']):
?>
    <table cellspacing="0" cellpadding="0" width="100%" style="background-color: #6F86A5;">
     <tr>
      <td class="button" style="border: 0px; padding-left: <?php echo $this->_tpl_vars['ENTRY']['level']*20-12; ?>
px; width: 20px;"><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module_id" value="<?php echo $this->_tpl_vars['MOD']['package']; ?>
-|-<?php echo $this->_tpl_vars['MOD']['module']; ?>
"></td>
      <td class="button" style="border: 0px; padding-left: 0px; width: 20px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/cube_yellow.png" /></td>
      <td><?php echo $this->_tpl_vars['MOD']['title']; ?>
</td>
     </tr>
    </table>
    <?php endforeach; endif; unset($_from); ?>
    </div>
   </td>
  </tr>
  <?php if ($this->_tpl_vars['ENTRY']['level'] == 2): ?>
  </table>
  <table cellspacing="0" cellpadding="0" width="100%" style="background-color: #6F86A5; display: none;" id="node_<?php echo $this->_tpl_vars['ENTRY']['id']; ?>
"><?php endif; ?>

 <?php endforeach; endif; unset($_from); ?>
   <tr>
   <td>&nbsp;</td>
   </tr>
 </table>
</div>
<div id="control">
<input type="submit" value="<?php echo ((is_array($_tmp='Weiter')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
</div>
<br />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['NODE_ID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="<?php echo $this->_tpl_vars['NODE_PID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mode" value="<?php echo $this->_tpl_vars['MODE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="saveAddContent" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_insert_pos" value="<?php echo $this->_tpl_vars['INSERT_POS']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_livetpl" value="<?php echo $this->_tpl_vars['LIVETPL']; ?>
" />
<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
</form>
<script type="text/javascript"><!--
<?php echo '
var visible = Array();
function switchNode(nodeid){
    if(!visible[nodeid]){
        document.getElementById(\'node_\' + nodeid).style.display = \'block\';
        document.getElementById(\'node_\' + nodeid).style.width = \'100%\';
        if(document.getElementById(\'mods_\' + nodeid)){
            document.getElementById(\'mods_\' + nodeid).style.display = \'block\';
            document.getElementById(\'mods_\' + nodeid).style.width = \'100%\';
        }
        visible[nodeid] = true;
    } else {
        document.getElementById(\'node_\' + nodeid).style.display = \'none\';
        if(document.getElementById(\'mods_\' + nodeid)){
            document.getElementById(\'mods_\' + nodeid).style.display = \'none\';
        }
        visible[nodeid] = false;
    }
}
'; ?>

//-->
</script>