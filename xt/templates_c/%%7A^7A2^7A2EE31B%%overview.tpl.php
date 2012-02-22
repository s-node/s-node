<?php /* Smarty version 2.6.9, created on 2011-01-21 10:38:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl', 8, false),array('modifier', 'allowed', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl', 40, false),array('modifier', 'cat', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl', 85, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl', 31, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/overview.tpl', 38, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="POST" name="addresstable">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'addresstable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td class="row" align="right" colspan="3">
                <?php echo ((is_array($_tmp='Zeige Adressen folgenden Typs')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:
                <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_filtertype" onChange="this.form.submit();">
                    <option value="-1" <?php if ($this->_tpl_vars['FILTERTYPE'] == -1): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='All')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
                    <option value="-2" <?php if ($this->_tpl_vars['FILTERTYPE'] == -2): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Undefined')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
                    <?php $_from = $this->_tpl_vars['ADDRESSTYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPEKEY'] => $this->_tpl_vars['TYPE']):
?>
                        <option value="<?php echo $this->_tpl_vars['TYPEKEY']; ?>
" <?php if ($this->_tpl_vars['FILTERTYPE'] == $this->_tpl_vars['TYPEKEY']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['TYPE'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
                <tr>
            <td class="table_header" width="81"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
            <td class="table_header" width="62">
                <?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'addresstable','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>

            </td>
            <td class="table_header">
                <?php echo actionIcon(array('action' => 'NULL','form' => 'addresstable','label' => 'Display name','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>

            </td>
        </tr>
        <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ADDRESSTABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ADDRESSTABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ADDRESS']):
        $this->_foreach['ADDRESSTABLE']['iteration']++;
?>
            <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
                <td class="button">
                    <?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('allowed', true, $_tmp) : allowed($_tmp))): ?>
                        <?php if ($this->_tpl_vars['ADDRESS']['active'] == 1): ?>
                            <?php echo actionIcon(array('action' => 'deactivateAddress','form' => 'addresstable','icon' => "active.png",'title' => 'deactivate this address','perm' => 'edit','id' => $this->_tpl_vars['ADDRESS']['id']), $this);?>

                        <?php else: ?>
                            <?php echo actionIcon(array('action' => 'activateAddress','form' => 'addresstable','icon' => "inactive.png",'title' => 'activate this address','perm' => 'edit','id' => $this->_tpl_vars['ADDRESS']['id']), $this);?>

                        <?php endif; ?>
                        <?php echo actionIcon(array('action' => 'editAddress','icon' => "pencil.png",'form' => '0','target' => 'slave1','perm' => 'edit','id' => $this->_tpl_vars['ADDRESS']['id'],'title' => 'Edit this user'), $this);?>

                    <?php endif; ?>
                    <?php if (((is_array($_tmp='delete')) ? $this->_run_mod_handler('allowed', true, $_tmp) : allowed($_tmp)) && $this->_tpl_vars['ADDRESS']['active'] == 0): ?>
                        <?php echo actionIcon(array('action' => 'deleteAddress','icon' => "delete.png",'title' => 'Delete this user','perm' => 'edit','id' => $this->_tpl_vars['ADDRESS']['id'],'ask' => "Are you sure to delete this address?",'form' => 'addresstable'), $this);?>

                    <?php endif; ?>
                </td>
                <td class="row"><?php echo $this->_tpl_vars['ADDRESS']['id']; ?>
&nbsp;</td>
                <td class="row">
                    <?php if ($this->_tpl_vars['ADDRESS']['type'] == 0): ?>
                        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/help2.png" alt="<?php echo ((is_array($_tmp='Person')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
                        <?php echo $this->_tpl_vars['ADDRESS']['title']; ?>

                    <?php elseif ($this->_tpl_vars['ADDRESS']['type'] == 1): ?>
                        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/factory.png" alt="<?php echo ((is_array($_tmp='Company')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
                        <?php if ($this->_tpl_vars['ADDRESS']['title'] != ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ADDRESS']['firstName'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['ADDRESS']['lastName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['ADDRESS']['lastName']))): ?>
                            <?php echo $this->_tpl_vars['ADDRESS']['title']; ?>
, <?php echo $this->_tpl_vars['ADDRESS']['firstName']; ?>
 <?php echo $this->_tpl_vars['ADDRESS']['lastName']; ?>

                        <?php else: ?>
                            <?php echo $this->_tpl_vars['ADDRESS']['title']; ?>

                        <?php endif; ?>
                    <?php elseif ($this->_tpl_vars['ADDRESS']['type'] == 2): ?>
                        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/member2.png" alt="<?php echo ((is_array($_tmp='Department')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
                        <?php echo $this->_tpl_vars['ADDRESS']['title']; ?>

                        <?php if ($this->_tpl_vars['ADDRESS']['organisation_name'] != ""): ?>
                            <i>(<?php echo $this->_tpl_vars['ADDRESS']['organisation_name']; ?>
)</i>
                        <?php endif; ?>
                    <?php elseif ($this->_tpl_vars['ADDRESS']['type'] == 3): ?>
                        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/user.png" alt="<?php echo ((is_array($_tmp='Person')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
                        <?php echo $this->_tpl_vars['ADDRESS']['title']; ?>

                        <?php if ($this->_tpl_vars['ADDRESS']['organisation_name'] != ""): ?>
                            <i>(<?php echo $this->_tpl_vars['ADDRESS']['organisation_name']; ?>
)</i>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['ADDRESS']['organizationalunit_name'] != ""): ?>
                            <i>(<?php echo $this->_tpl_vars['ADDRESS']['organizationalunit_name']; ?>
)</i>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['ADDRESS']['user_id'] != ""): ?>
                        <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/worker.png" alt="<?php echo ((is_array($_tmp='Address of a system user')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/>
                        <b>(<?php echo $this->_tpl_vars['ADDRESS']['user_name']; ?>
)</b>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'addresstable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="" />
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>