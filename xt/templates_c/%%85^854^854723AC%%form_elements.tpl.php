<?php /* Smarty version 2.6.9, created on 2011-06-08 09:10:59
         compiled from includes/form_elements.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'livetranslate', 'includes/form_elements.tpl', 149, false),array('modifier', 'translate', 'includes/form_elements.tpl', 165, false),)), $this); ?>
<?php if ($this->_tpl_vars['ELEMENT']['element_type'] == 0): ?>
        <input
        type="hidden"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  elseif ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
    />
    <label for="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>">
        <?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]): ?>
            <?php echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]; ?>

        <?php elseif ($this->_tpl_vars['ELEMENT']['default_value'] != ''): ?>
            <?php echo $this->_tpl_vars['ELEMENT']['default_value']; ?>

        <?php else: ?>
            <?php echo $this->_tpl_vars['ELEMENT']['values']['0']['value']; ?>

        <?php endif; ?>
    </label>
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 1): ?>
        <input
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  elseif ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="<?php if ($this->_tpl_vars['ELEMENT']['size'] > 0):  echo $this->_tpl_vars['ELEMENT']['size'];  else: ?>15<?php endif; ?>"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

     />
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 2 || $this->_tpl_vars['ELEMENT']['element_type'] == 4): ?>
        <select
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

    >
        <?php $_from = $this->_tpl_vars['ELEMENT']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['VAL']):
?>
            <option
                <?php if ($this->_tpl_vars['VAL']['value'] != ''): ?>value="<?php echo $this->_tpl_vars['VAL']['value']; ?>
"<?php endif; ?>
                <?php if (posted_form_value ( $this->_tpl_vars['ELEMENT']['element_id'] , $this->_tpl_vars['VAL']['value'] )): ?>selected="selected"<?php elseif ($this->_tpl_vars['ELEMENT']['default_value'] == $this->_tpl_vars['VAL']['value'] && $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][$this->_tpl_vars['VAL']['value']] == ""): ?>selected="selected"<?php endif; ?>
            >
                <?php echo $this->_tpl_vars['VAL']['label']; ?>

            </option>
        <?php endforeach; endif; unset($_from); ?>
    </select>
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 3): ?>
        <?php $_from = $this->_tpl_vars['ELEMENT']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['RADIO'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['RADIO']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['VAL']):
        $this->_foreach['RADIO']['iteration']++;
?>
        <div>
            <div class="checkbox">
                <input
                    type="radio"
                    id="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_<?php echo $this->_foreach['RADIO']['iteration'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_<?php echo $this->_foreach['RADIO']['iteration'];  endif; ?>"
                    name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
                    value="<?php if ($this->_tpl_vars['VAL']['value'] != ''):  echo $this->_tpl_vars['VAL']['value'];  else:  echo $this->_tpl_vars['VAL']['label'];  endif; ?>"
                    <?php if (posted_form_value ( $this->_tpl_vars['ELEMENT']['element_id'] , $this->_tpl_vars['VAL']['value'] )): ?>checked<?php elseif ($this->_tpl_vars['ELEMENT']['default_value'] == $this->_tpl_vars['VAL']['value'] && $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][$this->_tpl_vars['VAL']['value']] == ""): ?>checked<?php endif; ?>
                    <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

                />
            </div>
            <div class="checkboxlabel">
                <label for="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_<?php echo $this->_foreach['RADIO']['iteration'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_<?php echo $this->_foreach['RADIO']['iteration'];  endif; ?>">
                    <?php echo $this->_tpl_vars['VAL']['label']; ?>

                </label>
            </div>
            <br clear="all" />
        </div>
    <?php endforeach; endif; unset($_from);  elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 5): ?>
        <?php $_from = $this->_tpl_vars['ELEMENT']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['CHECKBOX'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['CHECKBOX']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['VAL']):
        $this->_foreach['CHECKBOX']['iteration']++;
?>
        <input
            type="checkbox"
            id="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_<?php echo $this->_foreach['CHECKBOX']['iteration'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_<?php echo $this->_foreach['CHECKBOX']['iteration'];  endif; ?>"
            name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
][<?php echo $this->_tpl_vars['VAL']['value']; ?>
]"
            value="<?php if ($this->_tpl_vars['VAL']['value'] != ''):  echo $this->_tpl_vars['VAL']['value'];  else:  echo $this->_tpl_vars['VAL']['label'];  endif; ?>"
            <?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][$this->_tpl_vars['VAL']['value']]): ?>checked="checked"<?php endif; ?>
        />
        <label for="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_<?php echo $this->_foreach['CHECKBOX']['iteration'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_<?php echo $this->_foreach['CHECKBOX']['iteration'];  endif; ?>">
            <?php echo $this->_tpl_vars['VAL']['label']; ?>

        </label>
        <br />
    <?php endforeach; endif; unset($_from);  elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 7): ?>
        <input
        type="password"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  else:  if ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif;  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="<?php if ($this->_tpl_vars['ELEMENT']['size'] > 0):  echo $this->_tpl_vars['ELEMENT']['size'];  else: ?>15<?php endif; ?>"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

     />
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 9): ?>
        <input
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_0<?php else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_0<?php endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
][0]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][0]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][0];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="6"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
     />
    <input
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_1<?php else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_1<?php endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
][1]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][1]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][1];  else:  echo $this->_tpl_vars['ELEMENT']['values']['1']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="27"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][1]): ?>class="form_error"<?php endif; ?>
     />
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 10): ?>
        <input
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_0<?php else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_0<?php endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
][0]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][0]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][0];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="27"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
     />
    <input
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
_1<?php else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
_1<?php endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
][1]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][1]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']][1];  else:  echo $this->_tpl_vars['ELEMENT']['values']['1']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="6"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][1]): ?>class="form_error"<?php endif; ?>
     />
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 11): ?>
        <textarea
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        <?php if ($this->_tpl_vars['ELEMENT']['maxlength'] > 0): ?>onkeyup="ismaxlength(this); document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlength_<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
').value = (<?php echo $this->_tpl_vars['ELEMENT']['maxlength']; ?>
 -  this.value.length);"<?php endif; ?>
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

    ><?php if ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif;  if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?></textarea>
    <?php if ($this->_tpl_vars['ELEMENT']['maxlength'] > 0): ?>
        <br/>
        <label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlength_<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
">
            <?php echo ((is_array($_tmp='number of characters')) ? $this->_run_mod_handler('livetranslate', true, $_tmp) : livetranslate($_tmp)); ?>
&nbsp;
        </label>
        <input type="text" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlength_<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
" size="5" value="<?php echo $this->_tpl_vars['ELEMENT']['maxlength']; ?>
" />
    <?php endif;  elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 12): ?>
        <input
        type="hidden"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  elseif ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

    />
<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 13): ?>
        <?php if ($this->_tpl_vars['UPLOADEDFILE'][$this->_tpl_vars['ELEMENT']['scripting_identifier']] == 1): ?>
        <?php echo ((is_array($_tmp='file uploaded')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    <?php else: ?>
        <input
            type="file"
            id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
            name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
"
            <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
            <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>class="form_error"<?php endif; ?>
            <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

         />
    <?php endif;  elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 14): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/captcha.tpl", 'smarty_include_vars' => array('name' => ($this->_tpl_vars['ELEMENT']['scripting_identifier']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <br class="clear" />
    <?php echo $this->_tpl_vars['ELEMENT']['description']; ?>

<?php elseif ($this->_tpl_vars['ELEMENT']['element_type'] == 15): ?>
        <input class="XTFoMdatepicker <?php if ($this->_tpl_vars['ERRORS'][$this->_tpl_vars['ELEMENT']['element_id']][0]): ?>form_error<?php endif; ?>"
        type="text"
        id ="<?php if ($this->_tpl_vars['ELEMENT']['scripting_identifier'] != ""):  echo $this->_tpl_vars['ELEMENT']['scripting_identifier'];  else: ?>form_element<?php echo $this->_tpl_vars['ELEMENT']['element_id'];  endif; ?>"
        name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_formfields[<?php echo $this->_tpl_vars['ELEMENT']['element_id']; ?>
]"
        value="<?php if ($this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']]):  echo $this->_tpl_vars['POSTS'][$this->_tpl_vars['ELEMENT']['element_id']];  elseif ($this->_tpl_vars['ELEMENT']['default_value'] != ''):  echo $this->_tpl_vars['ELEMENT']['default_value'];  else:  echo $this->_tpl_vars['ELEMENT']['values']['0']['value'];  endif; ?>"
        <?php if ($this->_tpl_vars['ELEMENT']['readonly']): ?>disabled<?php endif; ?>
        size="<?php if ($this->_tpl_vars['ELEMENT']['size'] > 0):  echo $this->_tpl_vars['ELEMENT']['size'];  else: ?>15<?php endif; ?>"
        <?php echo $this->_tpl_vars['ELEMENT']['params']; ?>

    />
<?php endif; ?>