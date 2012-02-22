<?php /* Smarty version 2.6.9, created on 2011-01-24 14:39:39
         compiled from _pages/10000.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin', '_pages/10000.tpl', 1, false),)), $this); ?>
<?php echo load_plugin(array('package' => "ch.iframe.snode.articles",'module' => 'viewer','id' => '32','style' => "default.tpl",'ncpos' => '1'), $this);?>

<?php echo load_plugin(array('package' => "ch.iframe.snode.articles",'module' => 'list','categories' => "0,10",'count' => '5','link2details' => 'yes','style' => "default.tpl",'target_tpl' => '113','ncpos' => '2'), $this);?>