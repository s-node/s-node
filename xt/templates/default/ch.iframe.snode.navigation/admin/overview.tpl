
<!-- navigation drag and drop -->
<script type="text/javascript" src="{$XT_SCRIPTS}libs/ajax.js"></script>
<script type="text/javascript" src="{$XT_SCRIPTS}libs/context-menu.js"></script><!-- IMPORTANT! INCLUDE THE context-menu.js FILE BEFORE drag-drop-folder-tree.js -->
<script type="text/javascript" src="{$XT_SCRIPTS}libs/drag-drop-folder-tree.js"></script>


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
<form method="post" name="navigation" action="{$smarty.server.PHP_SELF}?TPL={$TPL}" onSubmit="window.document.forms['navigation'].x{$BASEID}_yoffset.value=window.pageYOffset;">
{include file="includes/buttons.tpl" data=$OVERVIEW_BUTTONS yoffset=true}
<input type="hidden" name="x{$BASEID}_lang_filter" value="{$ACTIVE_LANG}" />
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td class="lang_tab" style="padding: 0px;">
<table cellspacing="0" cellpadding="0">
 <tr>
	<td  class="lang_tab" style="padding-right: 10px;">{"Active language"|translate}: {$ACTIVE_LANG}</td>
 	<td  class="lang_tab" style="padding-right: 10px;"><img src="{$XT_IMAGES}lang/{$ACTIVE_LANG}.png" alt="{$ACTIVE_LANG}" title="{$ACTIVE_LANG}" /></td>
 	<td  class="lang_tab" style="padding-right: 10px;">&nbsp;</td>
 </tr>
</table>
</td>
</tr>
</table>


<table cellpadding="0" cellspacing="0" width="100%">
    	<ul id="dhtmlgoodies_tree2" class="dhtmlgoodies_tree">

 {foreach from=$NODES item=NODE}
  {if $NODE.id != 100 && $NODE.id != 106}
  {if $NODE.allowed.view == 1}
  <tr class="{cycle values="row_a,row_b"}">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
   
    
    
     
     <tr>
      {if $NODE.l != 1}
    	MEHLIKA
      <ul>
     	 <li id="node{$NODE.id}" noRename="true"><a href="#">
      <td class="row" style="padding-left: {$NODE.level*20-32}px; width: 1px;">{if $NODE.subs > 0}{if $NODE.itw}<a href="javascript:document.forms['navigation'].x{$BASEID}_open.value={$NODE.pid};document.forms['navigation'].submit();"><img src="{$XT_IMAGES}icons/minus.gif" alt="" /></a>{else}<a href="javascript:document.forms['navigation'].x{$BASEID}_open.value={$NODE.id};document.forms['navigation'].submit();"><img src="{$XT_IMAGES}icons/plus.gif" alt="" /></a>{/if}{else}<img src="{$XT_IMAGES}spacer.gif" width="9" height="9" alt="" />{/if}</td>{/if}
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       	<a href="javascript:document.forms['navigation'].x{$BASEID}_open.value={$NODE.id};document.forms['navigation'].submit();">{if $NODE.itw}{if $NODE.subs > 0}{if $NODE.level == 2}<img src="{$XT_IMAGES}icons/data.png" alt="" />{else}<img src="{$XT_IMAGES}icons/explorer/folder.png" alt="" />{/if}{else}<img src="{$XT_IMAGES}icons/document.png" alt="" />{/if}{else}{if $NODE.subs > 0}{if $NODE.level == 2}<img src="{$XT_IMAGES}icons/data.png" alt="" />{else}<img src="{$XT_IMAGES}icons/folder_document.png" alt="" />{/if}{else}<img src="{$XT_IMAGES}icons/document.png" alt="" />{/if}{/if}</a><br />
      </td>
      <td class="row">{$NODE.itw}
      {if !$NODE.lang_na}
      {if $NODE.id==1}
      <!-- root title  -->  
		<li id="node0" noDrag="true" noSiblings="true" noDelete="true" noRename="true"><a href="#">TEST{$NODE.title}</a>
      {/if}
      AKAN
          {if $NODE.subs == 0}
          Ahmet
            {if $NODE.itw}{
              actionLink
                  action="editPageSimple"
                  form="0"
                  node_id=$NODE.id
                  node_pid=$NODE.pid
                  node_perm="editPages"
                  target="slave1"
                  title="Edit this page"
                  text=$NODE.title|truncate:40:"...":true
                  style="font-weight: bold;color: black;"
              }{else}{
              actionLink
                  action="editPageSimple"
                  form="0"
                  node_id=$NODE.id
                  node_pid=$NODE.pid
                  node_perm="editPages"
                  target="slave1"
                  title="Edit this page"
                  text=$NODE.title|truncate:40:"...":true
              }{/if}
          {else}
          SABAHAT
            {if $NODE.itw}{
            actionLink
              action=""
              yoffset="1"
              form="1"
              open=$NODE.id
              text=$NODE.title|truncate:40:"...":true
              style="font-weight: bold;color: black;"
            }{else}{
            actionLink
              action=""
              yoffset="1"
              form="1"
              open=$NODE.id
              text=$NODE.title|truncate:40:"...":true
            }
            {/if}
            ({$NODE.subs})
          {/if}
          {if $NODE.itw}
        {/if}
        </a></li>
        </ul>
      {else}
			TEST{$NODE.title}
      {/if}
      </td>
      <td class="button" align="right">
      {if $NODE.id > 1}{if $CTRL
          }{if $NODE.id != 1}{actionIcon
                action="insertNode"
                icon="explorer/arrow_down_green.png"
                node_perm="addPages"
                node_pid=$NODE.pid
                node_id=$NODE.id
                node_perm_pid=$NODES[$NODE.pid].pid
                node_perm_id=$NODE.pid
                position="after"
                form=$CTRL_FORM
                target=$CTRL_TARGET
                target_module="es"
                title="Insert after this node"
          }{actionIcon
                action="insertNode"
                icon="explorer/arrow_up_green.png"
                form=$CTRL_FORM
                target=$CTRL_TARGET
                node_perm="addPages"
                node_pid=$NODE.pid
                node_id=$NODE.id
                node_perm_pid=$NODES[$NODE.pid].pid
                node_perm_id=$NODE.pid
                position="before"
                target_module="es"
                title="Insert before this node"
          }{/if}{actionIcon
                action="insertNode"
                icon="explorer/folder_into.png"
                form=$CTRL_FORM
                target=$CTRL_TARGET
                node_perm="addPages"
                node_pid=$NODE.pid
                node_id=$NODE.id
                position="into"
                target_module="es"
                title="Insert into this node"
      }{else
          }{if $NODE.active == 1
              }{actionIcon
                    action="deactivateLang"
                    icon="active.png"
                    form="navigation"
                    node_perm="changeStatus"
                    node_pid=$NODE.pid
                    id=$NODE.id
                    node_id=$NODE.id
                    title="Deactivate this page in this language"
                    yoffset="1"
          }{else
              }{actionIcon
                    action="activateLang"
                    icon="inactive.png"
                    form="navigation"
                    node_perm="changeStatus"
                    node_pid=$NODE.pid
                    id=$NODE.id
                    node_id=$NODE.id
                    title="Activate this page in this language"
                    yoffset="1"
          }{/if
          }{if !$NODE.lang_na}<a href="#" onclick="window.open('{$smarty.server.PHP_SELF}?TPL={$NODE.id}&amp;tmp_lang={$ACTIVE_LANG}','Preview');"><img src="{$XT_IMAGES}icons/view.png" alt="{'Preview this page'|translate}" title="{'Preview this page'|translate}" style="padding-right: 4px;"
          /></a>{else}{$ICONSPACER}{/if}{actionIcon

                action="editPageSimple"
                icon="pencil.png"
                form="0"
                node_id=$NODE.id
                node_pid=$NODE.pid
                node_perm="editPages"
                target="slave1"
                title="Edit this page"
                target_tpl=$TPL

          }
          {if $NODE.id != 10000}
          {actionIcon
				action="cutNode"
                icon="cut.png"
                form="navigation"
                node_id=$NODE.id
                node_pid=$NODE.pid
                node_perm="deletePages"
                title="Cut this page node"}
          {actionIcon
				action="copyNode"
                icon="copy.png"
                form="navigation"
                source_node_id=$NODE.id
                node_id=$NODE.id
                node_pid=$NODE.pid
                node_perm="view"
                title="Copy this page node"}
          {actionIcon
                action="deleteNode"
                icon="delete.png"
                form="navigation"
                node_id=$NODE.id
                node_pid=$NODE.pid
                node_perm="deletePages"
                title="Delete this page node"
                ask="Are you sure you want to delete this node?"
                yoffset="1}
          {/if}
      {/if}{else}{$ICONSPACER}{/if}
      </td>
     </tr>

    </table>
   </td>
  </tr>
  {/if}
  {/if}
 {/foreach}
 
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
{if $CTRL}{actionIcon
    action="insertNode"
    icon="explorer/folder_into.png"
    form=$CTRL_FORM
    target=$CTRL_TARGET
    node_perm="manageNodePermissions"
    node_pid=0
    node_id=1
    position="into"
    title="Insert into this node"

}
{/if}
<input type="hidden" name="x{$BASEID}_id" value="" />
<input type="hidden" name="x{$BASEID}_position" value="" />
<input type="hidden" name="x{$BASEID}_node_id" value="" />
<input type="hidden" name="x{$BASEID}_node_pid" value="" />
<input type="hidden" name="x{$BASEID}_node_perm_pid" value="" />
<input type="hidden" name="x{$BASEID}_node_perm_id" value="" />
<input type="hidden" name="x{$BASEID}_open" value="" />
<input type="hidden" name="x{$BASEID}_target_module" value="" />
<input type="hidden" name="module" value="o" />
<input type="hidden" name="x{$BASEID}_source_node_id" value="" />
{yoffset}
</form>