<?php /* Smarty version 2.6.9, created on 2011-01-21 10:18:43
         compiled from includes/charfilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'includes/charfilter.tpl', 31, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == ''): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='all';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">All</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'a'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='a';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">A</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'b'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='b';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">B</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'c'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='c';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">C</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'd'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='d';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">D</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'e'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='e';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">E</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'f'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='f';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">F</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'g'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='g';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">G</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'h'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='h';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">H</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'i'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='i';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">I</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'j'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='j';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">J</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'k'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='k';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">K</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'l'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='l';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">L</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'm'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='m';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">M</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'n'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='n';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">N</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'o'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='o';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">O</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'p'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='p';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">P</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'q'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='q';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">Q</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'r'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='r';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">R</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 's'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='s';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">S</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 't'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='t';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">T</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'u'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='u';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">U</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'v'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='v';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">V</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'w'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='w';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">W</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'x'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='x';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">X</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'y'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='y';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">Y</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'z'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='z';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">Z</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'num'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='num';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();">#</td>
  <td class="char<?php if ($this->_tpl_vars['CHAR_FILTER'] == 'special'): ?>_active<?php endif; ?>" onclick="document.getElementById('char_filter').value='special';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();"><?php echo ((is_array($_tmp='Others')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="char_withoutwidth" width="100%">&nbsp;</td>
 </tr>
</table>
<input type="hidden" id="char_filter" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_char_filter" value="<?php echo $this->_tpl_vars['CHAR_FILTER']; ?>
" />