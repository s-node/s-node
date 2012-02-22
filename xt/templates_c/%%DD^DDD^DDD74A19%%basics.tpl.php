<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:07
         compiled from ch.iframe.snode.catalog/admin/edit_articles/basics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.catalog/admin/edit_articles/basics.tpl', 4, false),array('function', 'inline_navigator_top', 'ch.iframe.snode.catalog/admin/edit_articles/basics.tpl', 4, false),array('function', 'actionIcon', 'ch.iframe.snode.catalog/admin/edit_articles/basics.tpl', 15, false),array('function', 'toggle_editor', 'ch.iframe.snode.catalog/admin/edit_articles/basics.tpl', 50, false),array('function', 'html_options', 'ch.iframe.snode.catalog/admin/edit_articles/basics.tpl', 75, false),)), $this); ?>

 <tr>
  <td class="view_header" colspan="2">
   <span class="title"> <?php echo ((is_array($_tmp='article basics')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php echo inline_navigator_top(array('anchor' => 'article_basics'), $this);?>

  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
<?php if ($this->_tpl_vars['DISPLAY']['status'] == 1): ?>
<tr>
  <td class="left"><?php echo ((is_array($_tmp='Status')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <?php if ($this->_tpl_vars['DATA']['lang_active'] == 1): ?>
  <?php echo actionIcon(array('action' => 'deactivateArticleLang','icon' => "active.png",'perm' => 'activateArticle','form' => 'editArticle','title' => 'deactivate article','nopermicon' => "active.gif",'nopermtitle' => 'article is active','yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'activateArticleLang','icon' => "inactive.png",'perm' => 'activateArticle','form' => 'editArticle','title' => 'activate article','nopermicon' => "inactive.gif",'nopermtitle' => 'article is inactive','yoffset' => '1'), $this); endif; ?>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['title'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo $this->_tpl_vars['DATA']['title']; ?>
" onchange="window.parent.document.title = this.value"></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['subtitle'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Subtitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_subtitle" value="<?php echo $this->_tpl_vars['DATA']['subtitle']; ?>
"></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['lead'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='lead')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'lead'), $this);?>

     <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lead" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lead" rows="4" cols="65"><?php echo $this->_tpl_vars['DATA']['lead']; ?>
</textarea>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['description'] == 1): ?>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

     <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" rows="8" cols="65"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['art_nr'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='article number')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="12" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_art_nr" value="<?php echo $this->_tpl_vars['DATA']['art_nr']; ?>
"></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['quantity'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='quantity')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 / <?php echo ((is_array($_tmp='unit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="text" size="12" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_quantity" value="<?php echo $this->_tpl_vars['DATA']['quantity']; ?>
"> /
   <select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_unit>
    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['UNITS'],'selected' => $this->_tpl_vars['DATA']['unit']), $this);?>

   </select>
  </td>
 </tr>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='stock')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 / <?php echo ((is_array($_tmp='min stock')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="text" size="12" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_stock" value="<?php echo $this->_tpl_vars['DATA']['stock']; ?>
"> &nbsp;
   <input type="text" size="6" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_min_stock" value="<?php echo $this->_tpl_vars['DATA']['min_stock']; ?>
">

  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DISPLAY']['packaging_unit'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='pkg_unit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_pkg_unit>
      <option label="<?php echo ((is_array($_tmp='Not selected')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" value="0" <?php if ($this->_tpl_vars['PKG_UNIT']['id'] == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='Not selected')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['PKG_UNITS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PKG_UNIT']):
?>
   <option label="<?php echo $this->_tpl_vars['PKG_UNIT']['short']; ?>
 / <?php echo $this->_tpl_vars['PKG_UNIT']['standard']; ?>
" value="<?php echo $this->_tpl_vars['PKG_UNIT']['id']; ?>
" <?php if ($this->_tpl_vars['PKG_UNIT']['id'] == $this->_tpl_vars['DATA']['pkg_unit']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['PKG_UNIT']['short']; ?>
 / <?php echo $this->_tpl_vars['PKG_UNIT']['standard']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <?php endif; ?>