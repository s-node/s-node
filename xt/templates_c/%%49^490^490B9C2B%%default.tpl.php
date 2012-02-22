<?php /* Smarty version 2.6.9, created on 2011-06-08 10:35:12
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_list/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_list/default.tpl', 6, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_list/default.tpl', 22, false),array('function', 'get_param', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_list/default.tpl', 14, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_list/default.tpl', 15, false),)), $this); ?>
<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
<?php if ($this->_tpl_vars['NODE']['subtitle'] != ''): ?>
<tr>
<td>
<span style="font-size:14px; font-style:italic;"><b><?php echo $this->_tpl_vars['NODE']['subtitle']; ?>
</b></span><br /><br />
<?php echo ((is_array($_tmp=$this->_tpl_vars['NODE']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<br />
</td>
</tr>
<?php endif;  $_from = $this->_tpl_vars['PRODUCTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['p'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['p']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['PRODUCT']):
        $this->_foreach['p']['iteration']++;
?>
    <tr>
        <td valign="bottom" style="border-bottom: 1px solid #444444; padding:5px;">
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo get_param(array('param' => 'details_tpl'), $this);?>
&x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id=<?php echo $this->_tpl_vars['PRODUCT']['id']; ?>
">
        <?php echo image(array('id' => $this->_tpl_vars['PRODUCT']['image_id'],'version' => 0,'title' => $this->_tpl_vars['PRODUCT']['field_text'],'alt' => $this->_tpl_vars['PRODUCT']['field_text']), $this);?>
</a>
        <?php echo $this->_tpl_vars['PRODUCT']['title']; ?>

            <br />
        <?php echo $this->_tpl_vars['PRODUCT']['field_text']; ?>

        <?php echo $this->_tpl_vars['PRODUCT']['quantity']; ?>
 <?php echo $this->_tpl_vars['PRODUCT']['unit']; ?>
<br /><?php echo ((is_array($_tmp='art_nr')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['PRODUCT']['art_nr']; ?>

         <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo get_param(array('param' => 'details_tpl'), $this);?>
&x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id=<?php echo $this->_tpl_vars['PRODUCT']['id']; ?>
"><?php echo ((is_array($_tmp='Details')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a><br />
        <?php $_from = $this->_tpl_vars['FIELDS'][$this->_tpl_vars['PRODUCT']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD']):
?>
        <?php if ($this->_tpl_vars['FIELD']['type'] == 4): ?>
            <b><?php echo $this->_tpl_vars['FIELD']['title']; ?>
 :</b>
            <?php if ($this->_tpl_vars['FIELD']['data'] != ""): ?>
            <ul>
                <?php $_from = $this->_tpl_vars['FIELD']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ITEM']):
?>
                <li><?php echo $this->_tpl_vars['ITEM']['label']; ?>
></li> 
                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <?php endif; ?>
        <?php else: ?>
            <b><?php echo $this->_tpl_vars['FIELD']['title']; ?>
 :</b> <?php echo $this->_tpl_vars['FIELD']['display']; ?>
<br />
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<form name="navigator" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php if ($this->_tpl_vars['PAGE_START'] <= $this->_tpl_vars['PAGE_END'] && $this->_tpl_vars['PAGE_START'] >= 0): ?>
  <table cellspacing="0" cellpadding="0" width="100%">
   <tr>
    <td class="subhead_bottom" colspan="<?php echo $this->_tpl_vars['PAGE_COUNT']+1; ?>
" style="width: 200px;"><?php echo ((is_array($_tmp='Showing entries')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <b><?php echo $this->_tpl_vars['PAGE_START']; ?>
</b> <?php echo ((is_array($_tmp='to')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <b><?php echo $this->_tpl_vars['PAGE_END']; ?>
</b> <?php echo ((is_array($_tmp='from')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <b><?php echo $this->_tpl_vars['TOTAL_COUNT']; ?>
</b></td>
    <?php $_from = $this->_tpl_vars['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['NAVIGATOR'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['NAVIGATOR']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['PAGE']):
        $this->_foreach['NAVIGATOR']['iteration']++;
?>
    <td class="pages<?php if ($this->_tpl_vars['ACTIVE_PAGE'] == $this->_foreach['NAVIGATOR']['iteration']): ?>_active<?php endif; ?>" style="width: 10px;cursor:hand; cursor:pointer;" 
        onclick="document.forms['navigator'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_page.value='<?php echo $this->_foreach['NAVIGATOR']['iteration']; ?>
';document.forms['navigator'].submit();"><?php echo $this->_foreach['NAVIGATOR']['iteration']; ?>

    </td>
    <?php endforeach; endif; unset($_from); ?>
    <td class="subhead_bottom">&nbsp;</td>
   </tr>
  </table>
  <?php endif; ?>
 <?php if (! $this->_tpl_vars['withouthidden']): ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_page" value="<?php echo $this->_tpl_vars['ACTIVE_PAGE']; ?>
">
 <?php endif; ?>
 </form>