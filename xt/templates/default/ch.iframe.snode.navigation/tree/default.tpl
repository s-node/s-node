{if sizeof($DATA) > 0}
	{foreach from=$DATA item=NAV name=N}
		<a class="nav" {if $NAV.target != ''}target="{$NAV.target}"{/if} href="{if $NAV.ext_link}{$NAV.ext_link}{else}{$smarty.server.PHP_SELF}?TPL={$NAV.id}{/if}">{$NAV.title}</a>&nbsp;&nbsp;{if !$smarty.foreach.N.last}<img style="margin-top: 1px;" src="/images/default/vertdot.gif" alt="" align="top" />&nbsp;{/if}
	{/foreach}
{/if}