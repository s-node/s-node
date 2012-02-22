<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:07
         compiled from includes/widgets/relations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'includes/widgets/relations.tpl', 10, false),array('modifier', 'addslashes', 'includes/widgets/relations.tpl', 21, false),array('modifier', 'alttag', 'includes/widgets/relations.tpl', 21, false),array('modifier', 'count', 'includes/widgets/relations.tpl', 45, false),array('function', 'xt_get_relations', 'includes/widgets/relations.tpl', 44, false),)), $this); ?>
 <?php if ($this->_tpl_vars['ctype'] == ""): ?>
 <?php $this->assign('ctype', $this->_tpl_vars['BASEID']); ?>
 <?php endif; ?>

 <?php if ($this->_tpl_vars['formname'] == ""): ?>
	 <?php $this->assign('formname', 0); ?>
 <?php endif; ?>
 <tr>
  <?php if ($this->_tpl_vars['live'] != 1): ?>
  <td class="left"><?php echo ((is_array($_tmp='Relations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <?php else: ?>
  <td class="adminleft" colspan="2"><?php echo ((is_array($_tmp='Relations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td></tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['live'] != 1): ?>
  <td class="right">
  <?php else: ?>
   <tr><td class="adminright" colspan="2">
  <?php endif; ?>

  <!-- a href="javascript:popup('/index.php?TPL=556&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;mod=tree',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_into.png" <?php echo ((is_array($_tmp='file nodes')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a -->

  <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;conf[table_tree]=files_tree&amp;conf[table_nodes]=files_tree_details&amp;conf[itemrelfieldname]=file_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=files_details&amp;conf[table_items_relation]=files_rel&amp;conf[tree_ctype]=241&amp;conf[item_ctype]=240',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/folder.png" <?php echo ((is_array($_tmp='files')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>
  <img src="/images/icons/menu_continue.gif" alt="" />
  <!-- KATALOG a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo $this->_tpl_vars['ctitle']; ?>
&amp;conf[table_tree]=catalog_tree&amp;conf[table_nodes]=catalog_tree_nodes&amp;conf[itemrelfieldname]=article_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=catalog_articles_details&amp;conf[table_items_relation]=catalog_tree_articles&amp;conf[tree_ctype]=1201&amp;conf[item_ctype]=1200',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/package.png" <?php echo ((is_array($_tmp='catalog')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a -->
  <!-- REZEPTE <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo $this->_tpl_vars['ctitle']; ?>
&amp;conf[table_tree]=rezepte_tree&amp;conf[table_nodes]=rezepte_tree_nodes&amp;conf[itemrelfieldname]=recipe_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=rezepte_details&amp;conf[table_items_relation]=rezepte_r2tree&amp;conf[tree_ctype]=5701&amp;conf[item_ctype]=5700',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/book_blue_next.png" <?php echo ((is_array($_tmp='rezepte')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a> -->
  <a href="javascript:popup('/index.php?TPL=555&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;mod=tree',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/colors.png" <?php echo ((is_array($_tmp='categories')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>
  <img src="/images/icons/menu_continue.gif" alt="" />
  <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;conf[table_tree]=articles_tree&amp;conf[table_nodes]=articles_tree_details&amp;conf[itemrelfieldname]=article_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=articles&amp;conf[table_items_relation]=articles_tree_rel&amp;conf[tree_ctype]=271&amp;conf[item_ctype]=270',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" <?php echo ((is_array($_tmp='articles')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>
  <img src="/images/icons/menu_continue.gif" alt="" />
  
    <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;conf[table_tree]=files_tree&amp;conf[table_nodes]=files_tree_details&amp;conf[itemrelfieldname]=node_id&amp;conf[noderelfieldname]=node_id&amp;conf[tree_ctype]=241&amp;conf[item_ctype]=240',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" <?php echo ((is_array($_tmp='folders')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>
  
  <img src="/images/icons/menu_continue.gif" alt="" />
  
  <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;conf[table_tree]=navigation&amp;conf[table_nodes]=navigation_details&amp;conf[itemrelfieldname]=node_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=articles&amp;conf[table_items_relation]=articles_tree_rel&amp;conf[tree_ctype]=60&amp;conf[item_ctype]=270',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/window_sidebar.png" <?php echo ((is_array($_tmp='sitestructure')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>

  <img src="/images/icons/menu_continue.gif" alt="" />
  <a href="javascript:popup('/index.php?TPL=557&amp;ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&amp;cid=<?php echo $this->_tpl_vars['cid']; ?>
&amp;ctitle=<?php echo ((is_array($_tmp=$this->_tpl_vars['ctitle'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : xt_addslashes($_tmp)); ?>
&amp;conf[table_tree]=events_tree&amp;conf[table_nodes]=events_tree_details&amp;conf[itemrelfieldname]=event_id&amp;conf[noderelfieldname]=node_id&amp;conf[table_items]=events_details&amp;conf[table_items_relation]=events_tree_rel&amp;conf[tree_ctype]=5101&amp;conf[item_ctype]=5100',370,300);"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/calendar.png" <?php echo ((is_array($_tmp='events')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 /></a>
  <img src="/images/icons/menu_continue.gif" alt="" />
  </td>
 </tr>
 <?php echo xt_get_relations(array('cid' => $this->_tpl_vars['cid'],'ctype' => $this->_tpl_vars['ctype'],'lang' => ($this->_tpl_vars['ACTIVE_LANG'])), $this);?>

<?php if (count($this->_tpl_vars['RELATIONS']) > 0): ?>
 <tr>
 	<td class="left" ><?php echo ((is_array($_tmp='Used Relations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 	<td class="right">

 <table width="100%">

<?php $_from = $this->_tpl_vars['RELATIONS']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['R'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['R']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['RELATION']):
        $this->_foreach['R']['iteration']++;
?>
	<tr>
		<td class="right"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/<?php echo $this->_tpl_vars['RELATION']['icon']; ?>
" alt="<?php echo $this->_tpl_vars['RELATION']['title']; ?>
"/> <?php if ($this->_tpl_vars['RELATION']['title'] == ""):  echo ((is_array($_tmp='unknown')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  else:  echo $this->_tpl_vars['RELATION']['title'];  endif; ?></td>
		<td class="right" width="60">
		<a href="javascript:
  if(confirm('<?php echo ((is_array($_tmp='Are you sure to delete this relation?')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
'))
   document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_XT_REL_relation_id.value='<?php echo $this->_tpl_vars['RELATION']['id']; ?>
';
   document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='ch.iframe.snode.relations.deleteRelation';
   document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].submit();">
  	 		   		<img src="images/icons/delete.png" alt="<?php echo ((is_array($_tmp='Delete relation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Delete relation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   			  </a>
		    <?php if (! ($this->_foreach['R']['iteration'] <= 1)): ?>
               <a href="javascript:document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='ch.iframe.snode.relations.moveRelationUp'; document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_XT_REL_relation_id.value='<?php echo $this->_tpl_vars['RELATION']['id']; ?>
';   document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].submit();">
  	 		   		<img src="images/icons/explorer/arrow_up_green.png" alt="<?php echo ((is_array($_tmp='Move this relation up')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Move this relation up')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   			  </a>

              <?php endif; ?>
              <?php if (! ($this->_foreach['R']['iteration'] == $this->_foreach['R']['total'])): ?>
				<a href="javascript:document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='ch.iframe.snode.relations.moveRelationDown'; document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_XT_REL_relation_id.value='<?php echo $this->_tpl_vars['RELATION']['id']; ?>
';   document.forms['<?php echo $this->_tpl_vars['formname']; ?>
'].submit();">
  	 		   		<img src="images/icons/explorer/arrow_down_green.png" alt="<?php echo ((is_array($_tmp='Move this relation down')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Move this relation down')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   			  </a>
              <?php endif; ?>
		</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_XT_REL_relation_id" value="">
</td>
 </tr>
 <?php endif; ?>