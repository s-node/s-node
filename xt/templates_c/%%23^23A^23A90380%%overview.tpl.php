<?php /* Smarty version 2.6.9, created on 2012-02-14 09:29:53
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 66, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 107, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 82, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 107, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 151, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview.tpl', 290, false),)), $this); ?>

<!-- navigation drag and drop -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/ajax.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/context-menu.js"></script><!-- IMPORTANT! INCLUDE THE context-menu.js FILE BEFORE drag-drop-folder-tree.js -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/drag-drop-folder-tree.js"></script>


<!-- 
<ul id="dhtmlgoodies_tree4" class="dhtmlgoodies_tree">

		<li id="node0" noDrag="true" noSiblings="true" noDelete="true" noRename="true"><a href="#">Root node</a>
			<ul>
				<li id="node1"><a href="#">Europe</a>
					<ul>
						<li id="node2" noDelete="true"><a href="#">Norway</a>
							<ul>
								<li id="node3" noRename="true"><a href="#">Stavanger</a></li>

								<li id="node6"><a href="#">Bergen</a></li>
								<li id="node7"><a href="#">Oslo</a></li>
							</ul>
						</li>
						<li id="node8"><a href="#">United Kingdom</a>
							<ul>
								<li id="node9"><a href="#">London</a></li>

								<li id="node10"><a href="#">Manchester</a></li>
							</ul>				
						</li>
						<li id="node12"><a href="#">Sweden</a></li>
						<li id="node13"><a href="#">Denmark</a></li>
						<li id="node14"><a href="#">Germany</a>
							<ul>

								<li id="node141"><a href="#">Berlin</a>	
								<li id="node142"><a href="#">Munich</a>	
								<li id="node143"><a href="#">Stuttgart</a>	
							</ul>
						</li>
					</ul>
				</li>

			</ul>
		</li>
	</ul>


<script type="text/javascript">	
	treeObj = new JSDragDropTree();
	treeObj.setTreeId('dhtmlgoodies_tree2');
	treeObj.setMaximumDepth(7);
	treeObj.setMessageMaximumDepthReached('Maximum depth reached'); // If you want to show a message when maximum depth is reached, i.e. on drop.
	treeObj.initTree();
	treeObj.expandAll();
</script>	
 
-->
<form method="post" name="navigation" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" onSubmit="window.document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'],'yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td class="lang_tab" style="padding: 0px;">
<table cellspacing="0" cellpadding="0">
 <tr>
	<td  class="lang_tab" style="padding-right: 10px;"><?php echo ((is_array($_tmp='Active language')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
</td>
 	<td  class="lang_tab" style="padding-right: 10px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
lang/<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
.png" alt="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" title="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" /></td>
 	<td  class="lang_tab" style="padding-right: 10px;">&nbsp;</td>
 </tr>
</table>
</td>
</tr>
</table>


<table cellpadding="0" cellspacing="0" width="100%">
    	<ul id="dhtmlgoodies_tree2" class="dhtmlgoodies_tree">

 <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
  <?php if ($this->_tpl_vars['NODE']['id'] != 100 && $this->_tpl_vars['NODE']['id'] != 106): ?>
  <?php if ($this->_tpl_vars['NODE']['allowed']['view'] == 1): ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
   
    
    
     
     <tr>
      <?php if ($this->_tpl_vars['NODE']['l'] != 1): ?>
    	MEHLIKA
      <ul>
     	 <li id="node<?php echo $this->_tpl_vars['NODE']['id']; ?>
" noRename="true"><a href="#">
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['navigation'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" height="9" alt="" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       	<a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/folder_document.png" alt="" /><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" alt="" /><?php endif;  endif; ?></a><br />
      </td>
      <td class="row"><?php echo $this->_tpl_vars['NODE']['itw']; ?>

      <?php if (! $this->_tpl_vars['NODE']['lang_na']): ?>
      <?php if ($this->_tpl_vars['NODE']['id'] == 1): ?>
      <!-- root title  -->  
		<li id="node0" noDrag="true" noSiblings="true" noDelete="true" noRename="true"><a href="#">TEST<?php echo $this->_tpl_vars['NODE']['title']; ?>
</a>
      <?php endif; ?>
      AKAN
          <?php if ($this->_tpl_vars['NODE']['subs'] == 0): ?>
          Ahmet
            <?php if ($this->_tpl_vars['NODE']['itw']):  echo actionLink(array('action' => 'editPageSimple','form' => '0','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'editPages','target' => 'slave1','title' => 'Edit this page','text' => ((is_array($_tmp=$this->_tpl_vars['NODE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)),'style' => "font-weight: bold;color: black;"), $this); else:  echo actionLink(array('action' => 'editPageSimple','form' => '0','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'editPages','target' => 'slave1','title' => 'Edit this page','text' => ((is_array($_tmp=$this->_tpl_vars['NODE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this); endif; ?>
          <?php else: ?>
          SABAHAT
            <?php if ($this->_tpl_vars['NODE']['itw']):  echo actionLink(array('action' => "",'yoffset' => '1','form' => '1','open' => $this->_tpl_vars['NODE']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['NODE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)),'style' => "font-weight: bold;color: black;"), $this); else:  echo actionLink(array('action' => "",'yoffset' => '1','form' => '1','open' => $this->_tpl_vars['NODE']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['NODE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this);?>

            <?php endif; ?>
            (<?php echo $this->_tpl_vars['NODE']['subs']; ?>
)
          <?php endif; ?>
          <?php if ($this->_tpl_vars['NODE']['itw']): ?>
        <?php endif; ?>
        </a></li>
        </ul>
      <?php else: ?>
			TEST<?php echo $this->_tpl_vars['NODE']['title']; ?>

      <?php endif; ?>
      </td>
      <td class="button" align="right">
      <?php if ($this->_tpl_vars['NODE']['id'] > 1):  if ($this->_tpl_vars['CTRL']):  if ($this->_tpl_vars['NODE']['id'] != 1):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'node_perm_pid' => $this->_tpl_vars['NODES'][$this->_tpl_vars['NODE']['pid']]['pid'],'node_perm_id' => $this->_tpl_vars['NODE']['pid'],'position' => 'after','form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'target_module' => 'es','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'node_perm_pid' => $this->_tpl_vars['NODES'][$this->_tpl_vars['NODE']['pid']]['pid'],'node_perm_id' => $this->_tpl_vars['NODE']['pid'],'position' => 'before','target_module' => 'es','title' => 'Insert before this node'), $this); endif;  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'into','target_module' => 'es','title' => 'Insert into this node'), $this); else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateLang','icon' => "active.png",'form' => 'navigation','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this page in this language','yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'activateLang','icon' => "inactive.png",'form' => 'navigation','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Activate this page in this language','yoffset' => '1'), $this); endif;  if (! $this->_tpl_vars['NODE']['lang_na']): ?><a href="#" onclick="window.open('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NODE']['id']; ?>
&amp;tmp_lang=<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
','Preview');"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/view.png" alt="<?php echo ((is_array($_tmp='Preview this page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Preview this page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="padding-right: 4px;"
          /></a><?php else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  echo actionIcon(array('action' => 'editPageSimple','icon' => "pencil.png",'form' => '0','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'editPages','target' => 'slave1','title' => 'Edit this page','target_tpl' => $this->_tpl_vars['TPL']), $this);?>

          <?php if ($this->_tpl_vars['NODE']['id'] != 10000): ?>
          <?php echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'navigation','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deletePages','title' => 'Cut this page node'), $this);?>

          <?php echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'navigation','source_node_id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'view','title' => 'Copy this page node'), $this);?>

          <?php echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'navigation','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deletePages','title' => 'Delete this page node','ask' => "Are you sure you want to delete this node?",'yoffset' => 1), $this);?>

          <?php endif; ?>
      <?php endif;  else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?>
      </td>
     </tr>

    </table>
   </td>
  </tr>
  <?php endif; ?>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 
     </li>
	</ul>	
	
	<script type="text/javascript">	
	//achtung script muss gleich nach der ul-auflistung kommen
	treeObj = new JSDragDropTree();
	treeObj.setTreeId('dhtmlgoodies_tree2');
	treeObj.setMaximumDepth(7);
	treeObj.setMessageMaximumDepthReached('Maximum depth reached'); // If you want to show a message when maximum depth is reached, i.e. on drop.
	treeObj.initTree();
	treeObj.expandAll();
</script>

</table>
<?php if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'manageNodePermissions','node_pid' => 0,'node_id' => 1,'position' => 'into','title' => 'Insert into this node'), $this);?>

<?php endif; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="module" value="o" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source_node_id" value="" />
<?php echo yoffset(array(), $this);?>

</form>